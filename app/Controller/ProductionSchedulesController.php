<?php
App::uses('AppController', 'Controller');
/**
 * ProductionSchedules Controller
 *
 * @property ProductionSchedule $ProductionSchedule
 * @property PaginatorComponent $Paginator
 */
class ProductionSchedulesController extends AppController {

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
		$this->ProductionSchedule->recursive = 0;
		$this->set('productionSchedules', $this->Paginator->paginate());
	}
	public function cetak() {
	
        $this->Prg->commonProcess();
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->ProductionSchedule->parseCriteria($this->Prg->parsedParams()));
        $this->set('productionSchedules', $this->Paginator->paginate());
		
		$reactors = $this->ProductionSchedule->Reactor->find('all', array('fields' => 'name'));
		$this->set(compact('reactors'));
		if(isset($this->request->data['ProductionSchedule']['week']) && ($this->request->data['ProductionSchedule']['month']) && ($this->request->data['ProductionSchedule']['year'])){
		$catchdates = $this->ProductionSchedule->query("SELECT DISTINCT substr(create_date,1, 10) create_date, week FROM production_schedules as ProductionSchedule WHERE (select substr(create_date, 1, 4) as year) = '".$this->request->data['ProductionSchedule']['year']."' AND (select substr(create_date, 6, 2) as month) = '".$this->request->data['ProductionSchedule']['month']."' AND week = '".$this->request->data['ProductionSchedule']['week']."' ");
		$this->set(compact('catchdates'));
		}
		$shifts = $this->ProductionSchedule->Shift->find('all', array('fields' =>array('code')));
		$this->set(compact('shifts'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid production schedule'));
		}
		$options = array('conditions' => array('ProductionSchedule.' . $this->ProductionSchedule->primaryKey => $id));
		$this->set('productionSchedule', $this->ProductionSchedule->find('first', $options));
		
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
			$this->ProductionSchedule->create();
			$shift = $this->request->data['ProductionSchedule']['shift_id'];
			$product = $this->request->data['ProductionSchedule']['product_id'];
			$reactor = $this->request->data['ProductionSchedule']['reactor_id'];
			$week = $this->request->data['ProductionSchedule']['week'];
			$lot_no = $this->request->data['ProductionSchedule']['lot_no'];
			$note = $this->request->data['ProductionSchedule']['note'];
			$data = array(
			'shift_id' => $shift, 
			'product_id' => $product, 
			'reactor_id' => $reactor, 
			'week' => $week, 
			'lot_no' => $lot_no, 
			'note' => $note,
			'create_date' => $today,'create_by' => $user);
			if ($this->ProductionSchedule->save($data)) {
				$this->Session->setFlash(__('The production schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production schedule could not be saved. Please, try again.'));
			}
		}
		$shifts = $this->ProductionSchedule->Shift->find('list', array('fields' =>array('Shift.id','Shift.note')));
		$this->set(compact('shifts'));
		$products = $this->ProductionSchedule->Product->find('list');
		$this->set(compact('products'));
		$reactors = $this->ProductionSchedule->Reactor->find('list');
		$this->set(compact('reactors'));
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
		$this->ProductionSchedule->id = $id;
		if (!$this->ProductionSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid production schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
		$shift = $this->request->data['ProductionSchedule']['shift_id'];
			$product = $this->request->data['ProductionSchedule']['product_id'];
			$reactor = $this->request->data['ProductionSchedule']['reactor_id'];
			$week = $this->request->data['ProductionSchedule']['week'];
			$lot_no = $this->request->data['ProductionSchedule']['lot_no'];
			$note = $this->request->data['ProductionSchedule']['note'];
			$data = array(
			'shift_id' => $shift, 
			'product_id' => $product, 
			'reactor_id' => $reactor, 
			'week' => $week, 
			'lot_no' => $lot_no, 
			'note' => $note,
			'modified_date' => $today,'modified_by' => $user);
			if ($this->ProductionSchedule->save($data)) {
				$this->Session->setFlash(__('The production schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionSchedule.' . $this->ProductionSchedule->primaryKey => $id));
			$this->request->data = $this->ProductionSchedule->find('first', $options);
		}
		
		$shifts = $this->ProductionSchedule->Shift->find('list', array('fields' =>array('Shift.id','Shift.note')));
		$this->set(compact('shifts'));
		$products = $this->ProductionSchedule->Product->find('list');
		$this->set(compact('products'));
		$reactors = $this->ProductionSchedule->Reactor->find('list');
		$this->set(compact('reactors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductionSchedule->id = $id;
		if (!$this->ProductionSchedule->exists()) {
			throw new NotFoundException(__('Invalid production schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionSchedule->delete()) {
			$this->Session->setFlash(__('The production schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
