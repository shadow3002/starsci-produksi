<?php
App::uses('AppController', 'Controller');
/**
 * ProductionCosts Controller
 *
 * @property ProductionCost $ProductionCost
 * @property PaginatorComponent $Paginator
 */
class ProductionCostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Search.Prg');
	public $presetVars = true;

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductionCost->recursive = 0;
		$this->set('productionCosts', $this->Paginator->paginate());
	}
	
	public function cetak() {
		$this->Prg->commonProcess();
		$this->Paginator->settings = array('limit' =>15, 'conditions' => $this->ProductionCost->parseCriteria($this->Prg->parsedParams()));
        $this->set('productionCosts', $this->Paginator->paginate());
		
		$variableCosts = $this->ProductionCost->VariableCost->find('all', array('fields' => 'name, variable_cost_category_id'));
		$this->set(compact('variableCosts'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionCost->exists($id)) {
			throw new NotFoundException(__('Invalid production cost'));
		}
		$options = array('conditions' => array('ProductionCost.' . $this->ProductionCost->primaryKey => $id));
		$this->set('productionCost', $this->ProductionCost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductionCost->create();
			
			if ($this->ProductionCost->saveMany($this->request->data['ProductionCost'])) {
				$this->Session->setFlash(__('The production cost has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production cost could not be saved. Please, try again.'));
			}
			}
		$variableCosts = $this->ProductionCost->VariableCost->find('list');
		$this->set(compact('variableCosts'));
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
		$this->ProductionCost->id = $id;
		if (!$this->ProductionCost->exists($id)) {
			throw new NotFoundException(__('Invalid production cost'));
		}
		if ($this->request->is(array('post', 'put'))) {
		$month = $this->request->data['ProductionCost']['month'];
			$year = $this->request->data['ProductionCost']['year'];
			$varcost = $this->request->data['ProductionCost']['variable_cost_id'];
			$amount = $this->request->data['ProductionCost']['amount'];
			$note = $this->request->data['ProductionCost']['note'];
			$data = array('month' => $month, 
			'year' => $year, 
			'variable_cost_id' => $varcost,
			'amount' => $amount, 
			'note' => $note, 
			'modified_date' => $today,'modified_by' => $user);
			if ($this->ProductionCost->save($data)) {
				$this->Session->setFlash(__('The production cost has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production cost could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionCost.' . $this->ProductionCost->primaryKey => $id));
			$this->request->data = $this->ProductionCost->find('first', $options);
		}
		$variableCosts = $this->ProductionCost->VariableCost->find('list');
		$this->set(compact('variableCosts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductionCost->id = $id;
		if (!$this->ProductionCost->exists()) {
			throw new NotFoundException(__('Invalid production cost'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionCost->delete()) {
			$this->Session->setFlash(__('The production cost has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production cost could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
