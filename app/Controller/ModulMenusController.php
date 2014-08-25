<?php
App::uses('AppController', 'Controller');
/**
 * ModulMenus Controller
 *
 * @property ModulMenu $ModulMenu
 * @property PaginatorComponent $Paginator
 */
class ModulMenusController extends AppController {

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
		$this->ModulMenu->recursive = 0;
		$this->set('modulMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ModulMenu->exists($id)) {
			throw new NotFoundException(__('Invalid modul menu'));
		}
		$options = array('conditions' => array('ModulMenu.' . $this->ModulMenu->primaryKey => $id));
		$this->set('modulMenu', $this->ModulMenu->find('first', $options));
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
			$this->ModulMenu->create();
			$name = $this->request->data['ModulMenu']['name'];
			$data = array('name' => $name, 'create_date' => $today,'create_by' => $user);
			if ($this->ModulMenu->save($data)) {
				$this->Session->setFlash(__('The modul menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modul menu could not be saved. Please, try again.'));
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
		$this->ModulMenu->id = $id;
		if (!$this->ModulMenu->exists($id)) {
			throw new NotFoundException(__('Invalid modul menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['ModulMenu']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->ModulMenu->save($data)) {
				$this->Session->setFlash(__('The modul menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modul menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ModulMenu.' . $this->ModulMenu->primaryKey => $id));
			$this->request->data = $this->ModulMenu->find('first', $options);
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
		$this->ModulMenu->id = $id;
		if (!$this->ModulMenu->exists()) {
			throw new NotFoundException(__('Invalid modul menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ModulMenu->delete()) {
			$this->Session->setFlash(__('The modul menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modul menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
