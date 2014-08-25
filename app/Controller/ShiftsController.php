<?php
App::uses('AppController', 'Controller');
/**
 * Shifts Controller
 *
 * @property Shift $Shift
 * @property PaginatorComponent $Paginator
 */
class ShiftsController extends AppController {

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
		$this->Shift->recursive = 0;
		$this->set('shifts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shift->exists($id)) {
			throw new NotFoundException(__('Invalid shift'));
		}
		$options = array('conditions' => array('Shift.' . $this->Shift->primaryKey => $id));
		$this->set('shift', $this->Shift->find('first', $options));
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
			$this->Shift->create();
			$code = $this->request->data['Shift']['code'];
			$note = $this->request->data['Shift']['note'];
			$data = array(
			'note' => $note,
			'code' => $code,
			'create_date' => $today,'create_by' => $user);
			if ($this->Shift->save($data)) {
				$this->Session->setFlash(__('The shift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.'));
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
		$this->Shift->id = $id;
		if (!$this->Shift->exists($id)) {
			throw new NotFoundException(__('Invalid shift'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$code = $this->request->data['Shift']['code'];
			$note = $this->request->data['Shift']['note'];
			$data = array(
			'note' => $note,
			'code' => $code,
			'modified_date' => $today,'modified_by' => $user);
			if ($this->Shift->save($data)) {
				$this->Session->setFlash(__('The shift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shift.' . $this->Shift->primaryKey => $id));
			$this->request->data = $this->Shift->find('first', $options);
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
		$this->Shift->id = $id;
		if (!$this->Shift->exists()) {
			throw new NotFoundException(__('Invalid shift'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shift->delete()) {
			$this->Session->setFlash(__('The shift has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shift could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
