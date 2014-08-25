<?php
App::uses('AppController', 'Controller');
/**
 * Tdses Controller
 *
 * @property Tdse $Tdse
 * @property PaginatorComponent $Paginator
 */
class TdsesController extends AppController {

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
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Tdse->parseCriteria($this->Prg->parsedParams()));
        $this->set('tdses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tdse->exists($id)) {
			throw new NotFoundException(__('Invalid tdse'));
		}
		$options = array('conditions' => array('Tdse.' . $this->Tdse->primaryKey => $id));
		$this->set('tdse', $this->Tdse->find('first', $options));
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
			$this->Tdse->create();
			$name = $this->request->data['Tdse']['name'];
			$namafiledoc = $this->request->data['Tdse']['namafiledoc'];
			$namafilepdf = $this->request->data['Tdse']['namafilepdf'];
			$tds_category_id = $this->request->data['Tdse']['tds_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'tds_category_id' => $tds_category_id, 'create_date' => $today,'create_by' => $user);
			if ($this->Tdse->save($data)) {
				$this->Session->setFlash(__('The tdse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tdse could not be saved. Please, try again.'));
			}
		}
		
		$tdsCategories = $this->Tdse->TdsCategory->find('list');
		$this->set(compact('tdsCategories'));
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
			$this->Tdse->id = $id;
		if (!$this->Tdse->exists($id)) {
			throw new NotFoundException(__('Invalid tdse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['Tdse']['name'];
			$tds_category_id = $this->request->data['Tdse']['tds_category_id'];
			$namafiledoc = $this->request->data['Tdse']['namafiledoc'];
			$namafilepdf = $this->request->data['Tdse']['namafilepdf'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'tds_category_id' => $tds_category_id, 'update_date' => $today,'update_by' => $user);
			if ($this->Tdse->save($data)) {
				$this->Session->setFlash(__('The tdse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tdse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tdse.' . $this->Tdse->primaryKey => $id));
			$this->request->data = $this->Tdse->find('first', $options);
		}
		
		$tdsCategories = $this->Tdse->TdsCategory->find('list');
		$this->set(compact('tdsCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tdse->id = $id;
		if (!$this->Tdse->exists()) {
			throw new NotFoundException(__('Invalid tdse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tdse->delete()) {
			$this->Session->setFlash(__('The tdse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tdse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
