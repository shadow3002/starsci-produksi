<?php
App::uses('AppController', 'Controller');
/**
 * ProductionCategories Controller
 *
 * @property ProductionCategory $ProductionCategory
 * @property PaginatorComponent $Paginator
 */
class ProductionCategoriesController extends AppController {

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
		$this->ProductionCategory->recursive = 0;
		$this->set('productionCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionCategory->exists($id)) {
			throw new NotFoundException(__('Invalid production category'));
		}
		$options = array('conditions' => array('ProductionCategory.' . $this->ProductionCategory->primaryKey => $id));
		$this->set('productionCategory', $this->ProductionCategory->find('first', $options));
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
			$this->ProductionCategory->create();
			$name = $this->request->data['ProductionCategory']['name'];
			$note = $this->request->data['ProductionCategory']['note'];
			$data = array('name' => $name, 'note' => $note, 'create_date' => $today,'create_by' => $user);
			if ($this->ProductionCategory->save($data)) {
				$this->Session->setFlash(__('The production category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production category could not be saved. Please, try again.'));
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
		$this->ProductionCategory->id = $id;
		if (!$this->ProductionCategory->exists($id)) {
			throw new NotFoundException(__('Invalid production category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['ProductionCategory']['name'];
			$note = $this->request->data['ProductionCategory']['note'];
			$data = array('name' => $name, 'note' => $note, 'modified_date' => $today,'modified_by' => $user);
			if ($this->ProductionCategory->save($data)) {
				$this->Session->setFlash(__('The production category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionCategory.' . $this->ProductionCategory->primaryKey => $id));
			$this->request->data = $this->ProductionCategory->find('first', $options);
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
		$this->ProductionCategory->id = $id;
		if (!$this->ProductionCategory->exists()) {
			throw new NotFoundException(__('Invalid production category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionCategory->delete()) {
			$this->Session->setFlash(__('The production category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
