<?php
App::uses('AppController', 'Controller');
/**
 * VariableCosts Controller
 *
 * @property VariableCost $VariableCost
 * @property PaginatorComponent $Paginator
 */
class VariableCostsController extends AppController {

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
		$this->VariableCost->recursive = 0;
		$this->set('variableCosts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VariableCost->exists($id)) {
			throw new NotFoundException(__('Invalid variable cost'));
		}
		$options = array('conditions' => array('VariableCost.' . $this->VariableCost->primaryKey => $id));
		$this->set('variableCost', $this->VariableCost->find('first', $options));
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
			$this->VariableCost->create();
			$name = $this->request->data['VariableCost']['name'];
			$note = $this->request->data['VariableCost']['note'];
			$vcost = $this->request->data['VariableCost']['variable_cost_category_id'];
			$data = array('name' => $name, 'note' => $note, 'variable_cost_category_id' => $vcost, 'create_date' => $today,'create_by' => $user);
		
			if ($this->VariableCost->save($data)) {
				$this->Session->setFlash(__('The variable cost has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variable cost could not be saved. Please, try again.'));
			}
		}
		$variableCostCategories = $this->VariableCost->VariableCostCategory->find('list');
		$this->set(compact('variableCostCategories'));
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
		$this->VariableCost->id = $id;
		if (!$this->VariableCost->exists($id)) {
			throw new NotFoundException(__('Invalid variable cost'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['VariableCost']['name'];
			$note = $this->request->data['VariableCost']['note'];
			$vcost = $this->request->data['VariableCost']['variable_cost_category_id'];
			$data = array('name' => $name, 'note' => $note, 'variable_cost_category_id' => $vcost, 'modified_date' => $today,'modified_by' => $user);
			if ($this->VariableCost->save($data)) {
				$this->Session->setFlash(__('The variable cost has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variable cost could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VariableCost.' . $this->VariableCost->primaryKey => $id));
			$this->request->data = $this->VariableCost->find('first', $options);
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
		$this->VariableCost->id = $id;
		if (!$this->VariableCost->exists()) {
			throw new NotFoundException(__('Invalid variable cost'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VariableCost->delete()) {
			$this->Session->setFlash(__('The variable cost has been deleted.'));
		} else {
			$this->Session->setFlash(__('The variable cost could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
