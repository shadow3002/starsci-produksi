<?php
App::uses('AppController', 'Controller');
/**
 * Formulations Controller
 *
 * @property Formulation $Formulation
 * @property PaginatorComponent $Paginator
 */
class FormulationsController extends AppController {

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
		$this->Formulation->recursive = 0;
		$this->set('formulations', $this->Paginator->paginate());
	}
	public function cetak(){
		$this->Prg->commonProcess();
		$this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Formulation->parseCriteria($this->Prg->parsedParams()));
        $this->set('formulations', $this->Paginator->paginate());
		
		if(!empty($this->request->data['Formulation']['production_card_id'])){
		$this->loadModel('Packaging');
		$packaging = $this->Packaging->query("SELECT * FROM packagings Packaging INNER JOIN packs Pack ON Packaging.pack_id = Pack.id WHERE Packaging.production_card_id = ".$this->request->data['Formulation']['production_card_id']);
		$this->set(compact('packaging'));
		
		$this->loadModel('ProductionCard');
		$productioncard = $this->ProductionCard->query("SELECT * FROM production_cards ProductionCard INNER JOIN reactors Reactor ON ProductionCard.reactor_id = Reactor.id INNER JOIN production_statuses ProductionStatus ON ProductionCard.production_status_id = ProductionStatus.id WHERE ProductionCard.id = ".$this->request->data['Formulation']['production_card_id']);
		$this->set(compact('productioncard'));
		
		$reactors = $this->ProductionCard->Reactor->Find('list');
		$this->set(compact('reactors'));
		$productionStatuses = $this->ProductionCard->ProductionStatus->Find('list');
		$this->set(compact('productionStatuses'));
		$packs = $this->Packaging->Pack->Find('list');
		$this->set(compact('packs'));
		}

		$productionCards = $this->Formulation->ProductionCard->Find('list', array('fields' =>array('id', 'code')));
		$this->set(compact('productionCards'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Formulation->exists($id)) {
			throw new NotFoundException(__('Invalid formulation'));
		}
		$options = array('conditions' => array('Formulation.' . $this->Formulation->primaryKey => $id));
		$this->set('formulation', $this->Formulation->find('first', $options));
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
			$this->Formulation->create();
			if ($this->Formulation->saveMany($this->request->data['Formulation'])) {
				$this->Session->setFlash(__('The formulation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulation could not be saved. Please, try again.'));
			}
			}
		$products = $this->Formulation->Product->Find('list');
		$this->set(compact('products'));
		$productionCards = $this->Formulation->ProductionCard->Find('list', array('fields' =>array('id', 'code')));
		$this->set(compact('productionCards'));
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
		$this->Formulation->id = $id;
		if (!$this->Formulation->exists($id)) {
			throw new NotFoundException(__('Invalid formulation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$productid = $this->request->data['Formulation']['product_id'];
			$productioncardid = $this->request->data['Formulation']['production_card_id'];
			$rawmaterial = $this->request->data['Formulation']['raw_material'];
			$percentage = $this->request->data['Formulation']['percentage'];
			$std = $this->request->data['Formulation']['std'];
			$actual = $this->request->data['Formulation']['actual'];
			$selisih = $this->request->data['Formulation']['selisih'];
			$note = $this->request->data['Formulation']['note'];
			$data = array('product_id' => $productid,
			'production_card_id' => $productioncardid,
			'raw_material' => $rawmaterial,
			'percentage' => $percentage,
			'std' => $std,
			'actual' => $actual,
			'selisih' =>$selisih,
			'note' =>$note,
			'modified_date' => $today, 'modified_by' => $user);
			if ($this->Formulation->save($data)) {
				$this->Session->setFlash(__('The formulation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formulation.' . $this->Formulation->primaryKey => $id));
			$this->request->data = $this->Formulation->find('first', $options);
		}
		$products = $this->Formulation->Product->Find('list');
		$this->set(compact('products'));
		$productionCards = $this->Formulation->ProductionCard->Find('list', array('fields' =>array('id', 'code')));
		$this->set(compact('productionCards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Formulation->id = $id;
		if (!$this->Formulation->exists()) {
			throw new NotFoundException(__('Invalid formulation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Formulation->delete()) {
			$this->Session->setFlash(__('The formulation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The formulation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
