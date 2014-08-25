<?php
App::uses('AppController', 'Controller');
/**
 * Printcoas Controller
 *
 * @property Printcoa $Printcoa
 * @property PaginatorComponent $Paginator
 */
class PrintcoasController extends AppController {

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
		$this->Printcoa->recursive = 0;
		$this->set('printcoas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Printcoa->exists($id)) {
			throw new NotFoundException(__('Invalid printcoa'));
		}
		$options = array('conditions' => array('Printcoa.' . $this->Printcoa->primaryKey => $id));
		$this->set('printcoa', $this->Printcoa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Printcoa->create();
			if ($this->Printcoa->save($this->request->data)) {
				$this->Session->setFlash(__('The printcoa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The printcoa could not be saved. Please, try again.'));
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
		if (!$this->Printcoa->exists($id)) {
			throw new NotFoundException(__('Invalid printcoa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Printcoa->save($this->request->data)) {
				$this->Session->setFlash(__('The printcoa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The printcoa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Printcoa.' . $this->Printcoa->primaryKey => $id));
			$this->request->data = $this->Printcoa->find('first', $options);
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
		$this->Printcoa->id = $id;
		if (!$this->Printcoa->exists()) {
			throw new NotFoundException(__('Invalid printcoa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Printcoa->delete()) {
			$this->Session->setFlash(__('The printcoa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The printcoa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
