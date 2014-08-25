<?php
App::uses('AppController', 'Controller');
/**
 * ApeofreeCategories Controller
 *
 * @property ApeofreeCategory $ApeofreeCategory
 * @property PaginatorComponent $Paginator
 */
class ApeofreeCategoriesController extends AppController {

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
		$this->ApeofreeCategory->recursive = 0;
		$this->set('apeofreeCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApeofreeCategory->exists($id)) {
			throw new NotFoundException(__('Invalid apeofree category'));
		}
		$options = array('conditions' => array('ApeofreeCategory.' . $this->ApeofreeCategory->primaryKey => $id));
		$this->set('apeofreeCategory', $this->ApeofreeCategory->find('first', $options));
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
			$this->ApeofreeCategory->create();
			$name = $this->request->data['ApeofreeCategory']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
			if ($this->ApeofreeCategory->save($data)) {
				$this->Session->setFlash(__('The apeofree category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apeofree category could not be saved. Please, try again.'));
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
		$this->ApeofreeCategory->id = $id;
		if (!$this->ApeofreeCategory->exists($id)) {
			throw new NotFoundException(__('Invalid apeofree category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['ApeofreeCategory']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->ApeofreeCategory->save($data)) {
				$this->Session->setFlash(__('The apeofree category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apeofree category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApeofreeCategory.' . $this->ApeofreeCategory->primaryKey => $id));
			$this->request->data = $this->ApeofreeCategory->find('first', $options);
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
		$this->ApeofreeCategory->id = $id;
		if (!$this->ApeofreeCategory->exists()) {
			throw new NotFoundException(__('Invalid apeofree category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ApeofreeCategory->delete()) {
			$this->Session->setFlash(__('The apeofree category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The apeofree category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
