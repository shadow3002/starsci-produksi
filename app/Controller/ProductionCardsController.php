<?php
App::uses('AppController', 'Controller');
/**
 * ProductionCards Controller
 *
 * @property ProductionCard $ProductionCard
 * @property PaginatorComponent $Paginator
 */
class ProductionCardsController extends AppController {

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
		$this->ProductionCard->recursive = 0;
		$this->set('productionCards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionCard->exists($id)) {
			throw new NotFoundException(__('Invalid production card'));
		}
		$options = array('conditions' => array('ProductionCard.' . $this->ProductionCard->primaryKey => $id));
		$this->set('productionCard', $this->ProductionCard->find('first', $options));
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
		$this->loadModel('Packaging');
		if ($this->request->is('post')) {
			$this->ProductionCard->create();
			$name = $this->request->data['ProductionCard']['product_name'];
			$code = $this->request->data['ProductionCard']['code'];
			$stdbatch = $this->request->data['ProductionCard']['standard_batch'];
			$lotno = $this->request->data['ProductionCard']['lot_no'];
			$productionstatus = $this->request->data['ProductionCard']['production_status_id'];
			$productiontime = $this->request->data['ProductionCard']['production_time'];
			$nitrogen = $this->request->data['ProductionCard']['nitrogen'];
			$note = $this->request->data['ProductionCard']['note'];
			$reactor = $this->request->data['ProductionCard']['reactor_id'];
			$data = array('product_name' => $name, 
			'code' => $code, 
			'standard_batch' => $stdbatch, 
			'lot_no' => $lotno, 
			'production_status_id' => $productionstatus, 
			'production_time' => $productiontime, 
			'nitrogen' => $nitrogen,
			'note' => $note,
			'reactor_id' => $reactor,
			'create_date' => $today,'create_by' => $user);
			if ($this->ProductionCard->save($data)) {
				$this->Session->setFlash(__('The production card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production card could not be saved. Please, try again.'));
			}
		}
		$productionStatuses = $this->ProductionCard->ProductionStatus->find('list');
		$this->set(compact('productionStatuses'));
		$reactors = $this->ProductionCard->Reactor->find('list');
		$this->set(compact('reactors'));
		$products = $this->ProductionCard->Product->find('list');
		$this->set(compact('products'));
		$packs = $this->Packaging->Pack->Find('list');
		$this->set(compact('packs'));
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
		$this->ProductionCard->id = $id;
		if (!$this->ProductionCard->exists($id)) {
			throw new NotFoundException(__('Invalid production card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['ProductionCard']['product_name'];
			$code = $this->request->data['ProductionCard']['code'];
			$stdbatch = $this->request->data['ProductionCard']['standard_batch'];
			$lotno = $this->request->data['ProductionCard']['lot_no'];
			$productionstatus = $this->request->data['ProductionCard']['production_status_id'];
			$productiontime = $this->request->data['ProductionCard']['production_time'];
			$nitrogen = $this->request->data['ProductionCard']['nitrogen'];
			$note = $this->request->data['ProductionCard']['note'];
			$reactor = $this->request->data['ProductionCard']['reactor_id'];
			$data = array('product_name' => $name, 
			'code' => $code, 
			'standard_batch' => $stdbatch, 
			'lot_no' => $lotno, 
			'production_status_id' => $productionstatus, 
			'production_time' => $productiontime, 
			'nitrogen' => $nitrogen, 
			'note' => $note,
			'reactor_id' => $reactor,
			'modified_date' => $today, 'modified_by' => $user);
			if ($this->ProductionCard->save($data)) {
				$this->Session->setFlash(__('The production card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionCard.' . $this->ProductionCard->primaryKey => $id));
			$this->request->data = $this->ProductionCard->find('first', $options);
		}
		
		$productionStatuses = $this->ProductionCard->ProductionStatus->find('list');
		$this->set(compact('productionStatuses'));
		$reactors = $this->ProductionCard->Reactor->find('list');
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
		$this->ProductionCard->id = $id;
		if (!$this->ProductionCard->exists()) {
			throw new NotFoundException(__('Invalid production card'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionCard->delete()) {
			$this->Session->setFlash(__('The production card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
