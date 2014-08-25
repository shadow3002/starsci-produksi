<?php
App::uses('AppController', 'Controller');
/**
 * Tbdownloads Controller
 *
 * @property Tbdownload $Tbdownload
 * @property PaginatorComponent $Paginator
 */
class TbdownloadsController extends AppController {

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
 
	public function beforeFilter(){	
	$this->Auth->allow('index', 'view', 'edit');
	}
	
	public function index(){
        $this->Prg->commonProcess();
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Tbdownload->parseCriteria($this->Prg->parsedParams()));
        $this->set('tbdownloads', $this->Paginator->paginate());

	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tbdownload->exists($id)) {
			throw new NotFoundException(__('Invalid tbdownload'));
		}
		
		$options = array('conditions' => array('Tbdownload.' . $this->Tbdownload->primaryKey => $id));
		$this->set('tbdownload', $this->Tbdownload->find('first', $options));
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
			$this->Tbdownload->create();
			//debug($this->request->data);exit();
			$namaproduk = $this->request->data['Tbdownload']['namaproduk'];
			$category = $this->request->data['Tbdownload']['tbdownload_category_id'];
			$namafiledoc = $this->request->data['Tbdownload']['namafiledoc'];
			$namafilepdf = $this->request->data['Tbdownload']['namafilepdf'];
			$data = array('namaproduk' => $namaproduk,'tbdownload_category_id' => $category,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf, 'create_date' => $today,'create_by' => $user);
			if(!$data['namafiledoc']['name']){
				unset($data['namafiledoc']);
			}
			if ($this->Tbdownload->save($data)) {
				$this->Session->setFlash(__('The tbdownload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbdownload could not be saved. Please, try again.'));
			}
		
		}
		$tbdownloadCategories = $this->Tbdownload->TbdownloadCategory->find('list');
		$this->set(compact('tbdownloadCategories'));
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
			$this->Tbdownload->id = $id;
		if (!$this->Tbdownload->exists($id)) {
			throw new NotFoundException(__('Invalid tbdownload'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$namaproduk = $this->request->data['Tbdownload']['namaproduk'];
			$category = $this->request->data['Tbdownload']['tbdownload_category_id'];
			$namafiledoc = $this->request->data['Tbdownload']['namafiledoc'];
			$namafilepdf = $this->request->data['Tbdownload']['namafilepdf'];
			$data = array('namaproduk' => $namaproduk,'tbdownload_category_id' => $category,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf, 'update_date' => $today,'update_by' => $user);
					
		if(!$data['namafiledoc']['name']){
				unset($data['namafiledoc']);
			}
			if ($this->Tbdownload->save($data)) {
				$this->Session->setFlash(__('The tbdownload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbdownload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tbdownload.' . $this->Tbdownload->primaryKey => $id));
			$this->request->data = $this->Tbdownload->find('first', $options);
		}
		
		$tbdownloadCategories = $this->Tbdownload->TbdownloadCategory->find('list');
		$this->set(compact('tbdownloadCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tbdownload->id = $id;
		if (!$this->Tbdownload->exists()) {
			throw new NotFoundException(__('Invalid tbdownload'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tbdownload->delete()) {
			$this->Session->setFlash(__('The tbdownload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tbdownload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
