<?php
App::uses('AppController', 'Controller');
/**
 * Packs Controller
 *
 * @property Pack $Pack
 * @property PaginatorComponent $Paginator
 */
class PacksController extends AppController {

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
		$this->Pack->recursive = 0;
		$this->set('packs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pack->exists($id)) {
			throw new NotFoundException(__('Invalid pack'));
		}
		$options = array('conditions' => array('Pack.' . $this->Pack->primaryKey => $id));
		$this->set('pack', $this->Pack->find('first', $options));
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
			$this->Pack->create();
			$packagingcode = $this->request->data['Pack']['packaging_code'];
			$name = $this->request->data['Pack']['name'];
			$data = array('packaging_code' => $packagingcode,
			'name' => $name,
			'create_date' => $today, 'create_by' => $user);
			if ($this->Pack->save($data)) {
				$this->Session->setFlash(__('The pack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pack could not be saved. Please, try again.'));
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
		$this->Pack->id = $id;
		if (!$this->Pack->exists($id)) {
			throw new NotFoundException(__('Invalid pack'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$packagingcode = $this->request->data['Pack']['packaging_code'];
			$name = $this->request->data['Pack']['name'];
			$data = array('packaging_code' => $packagingcode,
			'name' => $name,
			'modified_date' => $today, 'modified_by' => $user);
			if ($this->Pack->save($data)) {
				$this->Session->setFlash(__('The pack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pack could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pack.' . $this->Pack->primaryKey => $id));
			$this->request->data = $this->Pack->find('first', $options);
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
		$this->Pack->id = $id;
		if (!$this->Pack->exists()) {
			throw new NotFoundException(__('Invalid pack'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pack->delete()) {
			$this->Session->setFlash(__('The pack has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pack could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
