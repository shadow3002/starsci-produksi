<?php
App::uses('AppController', 'Controller');
/**
 * ProductionStatuses Controller
 *
 * @property ProductionStatus $ProductionStatus
 * @property PaginatorComponent $Paginator
 */
class ProductionStatusesController extends AppController {

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
		$this->ProductionStatus->recursive = 0;
		$this->set('productionStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductionStatus->exists($id)) {
			throw new NotFoundException(__('Invalid production status'));
		}
		$options = array('conditions' => array('ProductionStatus.' . $this->ProductionStatus->primaryKey => $id));
		$this->set('productionStatus', $this->ProductionStatus->find('first', $options));
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
			$this->ProductionStatus->create();
			$name = $this->request->data['ProductionStatus']['name'];
			$note = $this->request->data['ProductionStatus']['note'];
			$data = array('name' => $name, 'note' => $note, 'create_date' => $today,'create_by' => $user);
			if ($this->ProductionStatus->save($data)) {
				$this->Session->setFlash(__('The production status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production status could not be saved. Please, try again.'));
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
		$this->ProductionStatus->id = $id;
		if (!$this->ProductionStatus->exists($id)) {
			throw new NotFoundException(__('Invalid production status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['ProductionStatus']['name'];
			$note = $this->request->data['ProductionStatus']['note'];
			$data = array('name' => $name, 'note' => $note, 'modified_date' => $today,'modified_by' => $user);
	
			if ($this->ProductionStatus->save($data)) {
				$this->Session->setFlash(__('The production status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductionStatus.' . $this->ProductionStatus->primaryKey => $id));
			$this->request->data = $this->ProductionStatus->find('first', $options);
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
		$this->ProductionStatus->id = $id;
		if (!$this->ProductionStatus->exists()) {
			throw new NotFoundException(__('Invalid production status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductionStatus->delete()) {
			$this->Session->setFlash(__('The production status has been deleted.'));
		} else {
			$this->Session->setFlash(__('The production status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
