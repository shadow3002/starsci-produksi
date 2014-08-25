<?php
App::uses('AppController', 'Controller');
/**
 * Packagings Controller
 *
 * @property Packaging $Packaging
 * @property PaginatorComponent $Paginator
 */
class PackagingsController extends AppController {

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
		$this->Packaging->recursive = 0;
		$this->set('packagings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Packaging->exists($id)) {
			throw new NotFoundException(__('Invalid packaging'));
		}
		$options = array('conditions' => array('Packaging.' . $this->Packaging->primaryKey => $id));
		$this->set('packaging', $this->Packaging->find('first', $options));
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
			$this->Packaging->create();
			$productid = $this->request->data['Packaging']['pack_id'];
			$productioncardid = $this->request->data['Packaging']['production_card_id'];
			$actual = $this->request->data['Packaging']['actual'];
			$note = $this->request->data['Packaging']['note'];
			$std = $this->request->data['Packaging']['std'];
			$data = array('pack_id' => $productid,
			'production_card_id' => $productioncardid,
			'std' => $std,
			'actual' => $actual,
			'note' =>$note,
			'create_date' => $today, 'create_by' => $user);
			if ($this->Packaging->save($data)) {
				$this->Session->setFlash(__('The packaging has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packaging could not be saved. Please, try again.'));
			}
		}
		
		$packs = $this->Packaging->Pack->Find('list');
		$this->set(compact('packs'));
		$productionCards = $this->Packaging->ProductionCard->Find('list', array('fields' =>array('id', 'code')));
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
		$this->Packaging->id = $id;
		if (!$this->Packaging->exists($id)) {
			throw new NotFoundException(__('Invalid packaging'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$productid = $this->request->data['Packaging']['pack_id'];
			$productioncardid = $this->request->data['Packaging']['production_card_id'];
			$actual = $this->request->data['Packaging']['actual'];
			$note = $this->request->data['Packaging']['note'];
			$std = $this->request->data['Packaging']['std'];
			$data = array('pack_id' => $productid,
			'production_card_id' => $productioncardid,
			'std' => $std,
			'actual' => $actual,
			'note' =>$note,
			'modified_date' => $today, 'modified_by' => $user);
			if ($this->Packaging->save($data)) {
				$this->Session->setFlash(__('The packaging has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packaging could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Packaging.' . $this->Packaging->primaryKey => $id));
			$this->request->data = $this->Packaging->find('first', $options);
		}
		$packs = $this->Packaging->Pack->Find('list');
		$this->set(compact('packs'));
		$productionCards = $this->Packaging->ProductionCard->Find('list', array('fields' =>array('id', 'code')));
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
		$this->Packaging->id = $id;
		if (!$this->Packaging->exists()) {
			throw new NotFoundException(__('Invalid packaging'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Packaging->delete()) {
			$this->Session->setFlash(__('The packaging has been deleted.'));
		} else {
			$this->Session->setFlash(__('The packaging could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
