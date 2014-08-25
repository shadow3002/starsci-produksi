<?php
App::uses('AppController', 'Controller');
/**
 * VariableCostCategories Controller
 *
 * @property VariableCostCategory $VariableCostCategory
 * @property PaginatorComponent $Paginator
 */
class VariableCostCategoriesController extends AppController {

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
		$this->VariableCostCategory->recursive = 0;
		$this->set('variableCostCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VariableCostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid variable cost category'));
		}
		$options = array('conditions' => array('VariableCostCategory.' . $this->VariableCostCategory->primaryKey => $id));
		$this->set('variableCostCategory', $this->VariableCostCategory->find('first', $options));
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
			$this->VariableCostCategory->create();
			$name = $this->request->data['VariableCostCategory']['name'];
			$note = $this->request->data['VariableCostCategory']['note'];
			$data = array('name' => $name, 'note' => $note, 'create_date' => $today,'create_by' => $user);
		
			if ($this->VariableCostCategory->save($data)) {
				$this->Session->setFlash(__('The variable cost category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variable cost category could not be saved. Please, try again.'));
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
		$this->VariableCostCategory->id = $id;
		if (!$this->VariableCostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid variable cost category'));
		}
		if ($this->request->is(array('post', 'put'))) {	
			$name = $this->request->data['VariableCostCategory']['name'];
			$note = $this->request->data['VariableCostCategory']['note'];
			$data = array('name' => $name, 'note' => $note, 'modified_date' => $today,'modified_by' => $user);
			if ($this->VariableCostCategory->save($data)) {
				$this->Session->setFlash(__('The variable cost category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variable cost category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VariableCostCategory.' . $this->VariableCostCategory->primaryKey => $id));
			$this->request->data = $this->VariableCostCategory->find('first', $options);
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
		$this->VariableCostCategory->id = $id;
		if (!$this->VariableCostCategory->exists()) {
			throw new NotFoundException(__('Invalid variable cost category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VariableCostCategory->delete()) {
			$this->Session->setFlash(__('The variable cost category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The variable cost category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
