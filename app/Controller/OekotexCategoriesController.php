<?php
App::uses('AppController', 'Controller');
/**
 * OekotexCategories Controller
 *
 * @property OekotexCategory $OekotexCategory
 * @property PaginatorComponent $Paginator
 */
class OekotexCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OekotexCategory->recursive = 0;
		$this->set('oekotexCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OekotexCategory->exists($id)) {
			throw new NotFoundException(__('Invalid oekotex category'));
		}
		$options = array('conditions' => array('OekotexCategory.' . $this->OekotexCategory->primaryKey => $id));
		$this->set('oekotexCategory', $this->OekotexCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$now = new DateTime();
		$today = $now->format("Y-m-d H:i:s");
		$user = $this->Session->read('pengguna');
	
		if ($this->request->is('post')) {
			$this->OekotexCategory->create();
			$name = $this->request->data['OekotexCategory']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
	
			if ($this->OekotexCategory->save($data)) {
				$this->Session->setFlash(__('The oekotex category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oekotex category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$now = new DateTime();
		$today = $now->format("Y-m-d H:i:s");
		$user = $this->Session->read('pengguna');
		$this->OekotexCategory->id = $id;
		if (!$this->OekotexCategory->exists($id)) {
			throw new NotFoundException(__('Invalid oekotex category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['OekotexCategory']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->OekotexCategory->save($data)) {
				$this->Session->setFlash(__('The oekotex category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oekotex category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OekotexCategory.' . $this->OekotexCategory->primaryKey => $id));
			$this->request->data = $this->OekotexCategory->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OekotexCategory->id = $id;
		if (!$this->OekotexCategory->exists()) {
			throw new NotFoundException(__('Invalid oekotex category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OekotexCategory->delete()) {
			$this->Session->setFlash(__('The oekotex category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oekotex category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
