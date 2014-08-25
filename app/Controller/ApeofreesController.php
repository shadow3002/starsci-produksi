<?php
App::uses('AppController', 'Controller');
/**
 * Apeofrees Controller
 *
 * @property Apeofree $Apeofree
 * @property PaginatorComponent $Paginator
 */
class ApeofreesController extends AppController {

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
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Apeofree->parseCriteria($this->Prg->parsedParams()));
        $this->set('apeofrees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Apeofree->exists($id)) {
			throw new NotFoundException(__('Invalid apeofree'));
		}
		$options = array('conditions' => array('Apeofree.' . $this->Apeofree->primaryKey => $id));
		$this->set('apeofree', $this->Apeofree->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$user = $this->Session->read('pengguna');
		$today = $this->Session->read('today');
		if ($this->request->is('post')) {
			$this->Apeofree->create();
			$name = $this->request->data['Apeofree']['name'];
			$namafiledoc = $this->request->data['Apeofree']['namafiledoc'];
			$namafilepdf = $this->request->data['Apeofree']['namafilepdf'];
			$apeofree_category_id = $this->request->data['Apeofree']['apeofree_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'apeofree_category_id' => $apeofree_category_id, 'create_date' => $today,'create_by' => $user);
			if ($this->Apeofree->save($data)) {
				$this->Session->setFlash(__('The apeofree has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apeofree could not be saved. Please, try again.'));
			}
		}
		
		$apeofreeCategories = $this->Apeofree->ApeofreeCategory->find('list');
		$this->set(compact('apeofreeCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$user = $this->Session->read('pengguna');
		$today = $this->Session->read('today');
			$this->Apeofree->id = $id;
		if (!$this->Apeofree->exists($id)) {
			throw new NotFoundException(__('Invalid apeofree'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['Apeofree']['name'];
			$namafiledoc = $this->request->data['Apeofree']['namafiledoc'];
			$namafilepdf = $this->request->data['Apeofree']['namafilepdf'];
			$apeofree_category_id = $this->request->data['Apeofree']['apeofree_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'apeofree_category_id' => $apeofree_category_id, 'update_date' => $today,'update_by' => $user);
			
			if ($this->Apeofree->save($data)) {
				$this->Session->setFlash(__('The apeofree has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apeofree could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Apeofree.' . $this->Apeofree->primaryKey => $id));
			$this->request->data = $this->Apeofree->find('first', $options);
		}
		
		$apeofreeCategories = $this->Apeofree->ApeofreeCategory->find('list');
		$this->set(compact('apeofreeCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Apeofree->id = $id;
		if (!$this->Apeofree->exists()) {
			throw new NotFoundException(__('Invalid apeofree'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Apeofree->delete()) {
			$this->Session->setFlash(__('The apeofree has been deleted.'));
		} else {
			$this->Session->setFlash(__('The apeofree could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
