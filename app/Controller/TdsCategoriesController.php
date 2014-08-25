<?php
App::uses('AppController', 'Controller');
/**
 * TdsCategories Controller
 *
 * @property TdsCategory $TdsCategory
 * @property PaginatorComponent $Paginator
 */
class TdsCategoriesController extends AppController {

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
		$this->TdsCategory->recursive = 0;
		$this->set('tdsCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TdsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid tds category'));
		}
		$options = array('conditions' => array('TdsCategory.' . $this->TdsCategory->primaryKey => $id));
		$this->set('tdsCategory', $this->TdsCategory->find('first', $options));
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
			$this->TdsCategory->create();
			$name = $this->request->data['TdsCategory']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
			if ($this->TdsCategory->save($data)) {
				$this->Session->setFlash(__('The tds category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tds category could not be saved. Please, try again.'));
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
		$this->MenuCategory->id = $id;
		if (!$this->TdsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid tds category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['TdsCategory']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->TdsCategory->save($data)) {
				$this->Session->setFlash(__('The tds category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tds category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TdsCategory.' . $this->TdsCategory->primaryKey => $id));
			$this->request->data = $this->TdsCategory->find('first', $options);
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
		$this->TdsCategory->id = $id;
		if (!$this->TdsCategory->exists()) {
			throw new NotFoundException(__('Invalid tds category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TdsCategory->delete()) {
			$this->Session->setFlash(__('The tds category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tds category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
