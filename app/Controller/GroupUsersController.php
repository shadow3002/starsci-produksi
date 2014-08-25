<?php
App::uses('AppController', 'Controller');
/**
 * GroupUsers Controller
 *
 * @property GroupUser $GroupUser
 * @property PaginatorComponent $Paginator
 */
class GroupUsersController extends AppController {

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
		$this->GroupUser->recursive = 0;
		$this->set('groupUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupUser->exists($id)) {
			throw new NotFoundException(__('Invalid group user'));
		}
		$options = array('conditions' => array('GroupUser.' . $this->GroupUser->primaryKey => $id));
		$this->set('groupUser', $this->GroupUser->find('first', $options));
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
			$this->GroupUser->create();
			$name = $this->request->data['GroupUser']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
			if ($this->GroupUser->save($data)) {
				$this->Session->setFlash(__('The group user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group user could not be saved. Please, try again.'));
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
	$this->GroupUser->id = $id;
		if (!$this->GroupUser->exists($id)) {
			throw new NotFoundException(__('Invalid group user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['GroupUser']['name'];
			$data = array('name' => $name, 'updatee_date' => $today,'update_by' => $user);
			if ($this->GroupUser->save($data)) {
				$this->Session->setFlash(__('The group user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupUser.' . $this->GroupUser->primaryKey => $id));
			$this->request->data = $this->GroupUser->find('first', $options);
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
		$this->GroupUser->id = $id;
		if (!$this->GroupUser->exists()) {
			throw new NotFoundException(__('Invalid group user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroupUser->delete()) {
			$this->Session->setFlash(__('The group user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
