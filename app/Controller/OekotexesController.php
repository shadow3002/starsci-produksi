<?php
App::uses('AppController', 'Controller');
/**
 * Oekotexes Controller
 *
 * @property Oekotex $Oekotex
 * @property PaginatorComponent $Paginator
 */
class OekotexesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');
	public $presetVars = true;
/**
 * index method
 *
 * @return void
 */
	public function index() {
	
        $this->Prg->commonProcess();
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Oekotex->parseCriteria($this->Prg->parsedParams()));
        $this->set('oekotexes', $this->Paginator->paginate());
	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Oekotex->exists($id)) {
			throw new NotFoundException(__('Invalid oekotex'));
		}
		$options = array('conditions' => array('Oekotex.' . $this->Oekotex->primaryKey => $id));
		$this->set('oekotex', $this->Oekotex->find('first', $options));
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
			$this->Oekotex->create();
			$name = $this->request->data['Oekotex']['name'];
			$namafiledoc = $this->request->data['Oekotex']['namafiledoc'];
			$namafilepdf = $this->request->data['Oekotex']['namafilepdf'];
			$oekotex_category_id = $this->request->data['Oekotex']['oekotex_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'oekotex_category_id' => $oekotex_category_id, 'create_date' => $today,'create_by' => $user);
			if ($this->Oekotex->save($data)) {
				$this->Session->setFlash(__('The oekotex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oekotex could not be saved. Please, try again.'));
			}
		}
		$oekotexCategories = $this->Oekotex->OekotexCategory->find('list');
		$this->set(compact('oekotexCategories'));
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
			$this->Oekotex->id = $id;
		if (!$this->Oekotex->exists($id)) {
			throw new NotFoundException(__('Invalid oekotex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['Oekotex']['name'];
			$namafiledoc = $this->request->data['Oekotex']['namafiledoc'];
			$namafilepdf = $this->request->data['Oekotex']['namafilepdf'];
			$oekotex_category_id = $this->request->data['Oekotex']['oekotex_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'oekotex_category_id' => $oekotex_category_id, 'update_date' => $today,'update_by' => $user);
			if ($this->Oekotex->save($data)) {
				$this->Session->setFlash(__('The oekotex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oekotex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Oekotex.' . $this->Oekotex->primaryKey => $id));
			$this->request->data = $this->Oekotex->find('first', $options);
		}
		$oekotexCategories = $this->Oekotex->OekotexCategory->find('list');
		$this->set(compact('oekotexCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Oekotex->id = $id;
		if (!$this->Oekotex->exists()) {
			throw new NotFoundException(__('Invalid oekotex'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Oekotex->delete()) {
			$this->Session->setFlash(__('The oekotex has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oekotex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
