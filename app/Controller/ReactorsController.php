<?php
App::uses('AppController', 'Controller');
/**
 * Reactors Controller
 *
 * @property Reactor $Reactor
 * @property PaginatorComponent $Paginator
 */
class ReactorsController extends AppController {

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
		$this->Reactor->recursive = 0;
		$this->set('reactors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reactor->exists($id)) {
			throw new NotFoundException(__('Invalid reactor'));
		}
		$options = array('conditions' => array('Reactor.' . $this->Reactor->primaryKey => $id));
		$this->set('reactor', $this->Reactor->find('first', $options));
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
			$this->Reactor->create();
			$name = $this->request->data['Reactor']['name'];
			$note = $this->request->data['Reactor']['note'];
			$data = array('name' => $name, 'note' => $note, 'create_date' => $today,'create_by' => $user);
			if ($this->Reactor->save($data)) {
				$this->Session->setFlash(__('The reactor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reactor could not be saved. Please, try again.'));
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
		$this->Reactor->id = $id;
		if (!$this->Reactor->exists($id)) {
			throw new NotFoundException(__('Invalid reactor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['Reactor']['name'];
			$note = $this->request->data['Reactor']['note'];
			$data = array('name' => $name, 'note' => $note, 'modified_date' => $today,'modified_by' => $user);

			if ($this->Reactor->save($data)) {
				$this->Session->setFlash(__('The reactor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reactor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reactor.' . $this->Reactor->primaryKey => $id));
			$this->request->data = $this->Reactor->find('first', $options);
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
		$this->Reactor->id = $id;
		if (!$this->Reactor->exists()) {
			throw new NotFoundException(__('Invalid reactor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reactor->delete()) {
			$this->Session->setFlash(__('The reactor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reactor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
