<?php
App::uses('AppController', 'Controller');
/**
 * IkeaCategories Controller
 *
 * @property IkeaCategory $IkeaCategory
 * @property PaginatorComponent $Paginator
 */
class IkeaCategoriesController extends AppController {

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
		$this->IkeaCategory->recursive = 0;
		$this->set('ikeaCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IkeaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid ikea category'));
		}
		$options = array('conditions' => array('IkeaCategory.' . $this->IkeaCategory->primaryKey => $id));
		$this->set('ikeaCategory', $this->IkeaCategory->find('first', $options));
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
			$this->IkeaCategory->create();
			$name = $this->request->data['IkeaCategory']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
			if ($this->IkeaCategory->save($data)) {
				$this->Session->setFlash(__('The ikea category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ikea category could not be saved. Please, try again.'));
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
		$this->IkeaCategory->id = $id;
		if (!$this->IkeaCategory->exists($id)) {
			throw new NotFoundException(__('Invalid ikea category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['IkeaCategory']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->IkeaCategory->save($data)) {
				$this->Session->setFlash(__('The ikea category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ikea category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IkeaCategory.' . $this->IkeaCategory->primaryKey => $id));
			$this->request->data = $this->IkeaCategory->find('first', $options);
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
		$this->IkeaCategory->id = $id;
		if (!$this->IkeaCategory->exists()) {
			throw new NotFoundException(__('Invalid ikea category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IkeaCategory->delete()) {
			$this->Session->setFlash(__('The ikea category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ikea category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
