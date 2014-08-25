<?php
App::uses('AppController', 'Controller');
/**
 * TbdownloadCategories Controller
 *
 * @property TbdownloadCategory $TbdownloadCategory
 * @property PaginatorComponent $Paginator
 */
class TbdownloadCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TbdownloadCategory->recursive = 0;
		$this->set('tbdownloadCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TbdownloadCategory->exists($id)) {
			throw new NotFoundException(__('Invalid tbdownload category'));
		}
		$options = array('conditions' => array('TbdownloadCategory.' . $this->TbdownloadCategory->primaryKey => $id));
		$this->set('tbdownloadCategory', $this->TbdownloadCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TbdownloadCategory->create();
			if ($this->TbdownloadCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The tbdownload category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbdownload category could not be saved. Please, try again.'));
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
		$this->TbdownloadCategory->id = $id;
		if (!$this->TbdownloadCategory->exists($id)) {
			throw new NotFoundException(__('Invalid tbdownload category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['TbdownloadCategory']['name'];
			$data = array('name' => $name, 'update_date' => $today,'update_by' => $user);
			if ($this->TbdownloadCategory->save($data)) {
				$this->Session->setFlash(__('The tbdownload category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbdownload category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TbdownloadCategory.' . $this->TbdownloadCategory->primaryKey => $id));
			$this->request->data = $this->TbdownloadCategory->find('first', $options);
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
		$this->TbdownloadCategory->id = $id;
		if (!$this->TbdownloadCategory->exists()) {
			throw new NotFoundException(__('Invalid tbdownload category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TbdownloadCategory->delete()) {
			$this->Session->setFlash(__('The tbdownload category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tbdownload category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
