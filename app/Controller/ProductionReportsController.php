<?php
App::uses('AppController', 'Controller');
/**
 * ProductionReports Controller
 *
 * @property ProductionReport $ProductionReport
 * @property PaginatorComponent $Paginator
 */
class ProductionReportsController extends AppController {

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
		$this->ProductionReport->recursive = 0;
		$this->set('productionReports', $this->Paginator->paginate());
	}
	public function cetak() {
	
        $this->Prg->commonProcess();
		$this->ProductionReport->virtualFields['createdate'] = 0;
		$this->ProductionReport->virtualFields['qcpassedqty'] = 1;
		$this->ProductionReport->virtualFields['qcrejectedqty'] = 2;
        $this->Paginator->settings = array('fields' => 'MONTH(ProductionReport.create_date) as ProductionReport__createdate, SUM(ProductionReport.qc_passed_qty) as ProductionReport__qcpassedqty, SUM(ProductionReport.qc_rejected_qty) as ProductionReport__qcrejectedqty, ProductionReport.production_category_id', 'group' => 'MONTH(ProductionReport.create_date), ProductionReport.production_category_id', 'limit' =>15, 'conditions' => $this->ProductionReport->parseCriteria($this->Prg->parsedParams()));
        $this->set('productionReports', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionReport->exists($id)) {
			throw new NotFoundException(__('Invalid production report'));
		}
		$options = array('conditions' => array('ProductionReport.' . $this->ProductionReport->primaryKey => $id));
		$this->set('productionReport', $this->ProductionReport->find('first', $options));
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
			$this->ProductionReport->create();
			$nokp = $this->request->data['ProductionReport']['no_kp'];
			$productid = $this->request->data['ProductionReport']['product_id'];
			$productioncategoryid = $this->request->data['ProductionReport']['production_category_id'];
			$lotnumber = $this->request->data['ProductionReport']['lot_number'];
			$standartqty = $this->request->data['ProductionReport']['standart_quantity'];
			$actualqty = $this->request->data['ProductionReport']['actual_quantity'];
			$qcpassedqty = $this->request->data['ProductionReport']['qc_passed_qty'];
			$qcrejectedqty = $this->request->data['ProductionReport']['qc_rejected_qty'];
			$note = $this->request->data['ProductionReport']['note'];
			$data = array('no_kp' => $nokp, 
			'product_id' => $productid, 
			'production_category_id' => $productioncategoryid, 
			'lot_number' => $lotnumber, 
			'standart_quantity' => $standartqty, 
			'actual_quantity' => $actualqty, 
			'qc_passed_qty' => $qcpassedqty,
			'qc_rejected_qty' => $qcrejectedqty,
			'note' => $note,
			'create_date' => $today,'create_by' => $user);
			if ($this->ProductionReport->save($data)) {
				$this->Session->setFlash(__('The production report has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production report could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductionReport->Product->find('list');
		$this->set(compact('products'));
		$productionCategories = $this->ProductionReport->ProductionCategory->find('list');
		$this->set(compact('productionCategories'));
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
		$this->ProductionReport->id = $id;
		
		if (!$this->ProductionReport->exists($id)) {
			throw new NotFoundException(__('Invalid production report'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$nokp = $this->request->data['ProductionReport']['no_kp'];
			$productid = $this->request->data['ProductionReport']['product_id'];
			$productioncategoryid = $this->request->data['ProductionReport']['production_category_id'];
			$lotnumber = $this->request->data['ProductionReport']['lot_number'];
			$standartqty = $this->request->data['ProductionReport']['standart_quantity'];
			$actualqty = $this->request->data['ProductionReport']['actual_quantity'];
			$qcpassedqty = $this->request->data['ProductionReport']['qc_passed_qty'];
			$qcrejectedqty = $this->request->data['ProductionReport']['qc_rejected_qty'];
			$note = $this->request->data['ProductionReport']['note'];
			$data = array('no_kp' => $nokp, 
			'product_id' => $productid, 
			'production_category_id' => $productioncategoryid, 
			'lot_number' => $lotnumber, 
			'standart_quantity' => $standartqty, 
			'actual_quantity' => $actualqty, 
			'qc_passed_qty' => $qcpassedqty,
			'qc_rejected_qty' => $qcrejectedqty,
			'note' => $note,
			'modified_date' => $today,'modified_by' => $user);
			if ($this->ProductionReport->save($data)) {
				$this->Session->setFlash(__('The production report has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production report could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionReport.' . $this->ProductionReport->primaryKey => $id));
			$this->request->data = $this->ProductionReport->find('first', $options);
		}
		
		$products = $this->ProductionReport->Product->find('list');
		$this->set(compact('products'));
		$productionCategories = $this->ProductionReport->ProductionCategory->find('list');
		$this->set(compact('productionCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductionReport->id = $id;
		if (!$this->ProductionReport->exists()) {
			throw new NotFoundException(__('Invalid production report'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionReport->delete()) {
			$this->Session->setFlash(__('The production report has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production report could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
