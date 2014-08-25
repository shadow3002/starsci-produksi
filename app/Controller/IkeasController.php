<?php
App::uses('AppController', 'Controller');
/**
 * Ikeas Controller
 *
 * @property Ikea $Ikea
 * @property PaginatorComponent $Paginator
 */
class IkeasController extends AppController {

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
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Ikea->parseCriteria($this->Prg->parsedParams()));
        $this->set('ikeas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ikea->exists($id)) {
			throw new NotFoundException(__('Invalid ikea'));
		}
		$options = array('conditions' => array('Ikea.' . $this->Ikea->primaryKey => $id));
		$this->set('ikea', $this->Ikea->find('first', $options));
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
			$this->Ikea->create();
			$name = $this->request->data['Ikea']['name'];
			$namafiledoc = $this->request->data['Ikea']['namafiledoc'];
			$namafilepdf = $this->request->data['Ikea']['namafilepdf'];
			$ikea_category_id = $this->request->data['Ikea']['ikea_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'ikea_category_id' => $ikea_category_id, 'create_date' => $today,'create_by' => $user);
			if ($this->Ikea->save($data)) {
				$this->Session->setFlash(__('The ikea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ikea could not be saved. Please, try again.'));
			}
		}
		$ikeaCategories = $this->Ikea->IkeaCategory->find('list');
		$this->set(compact('ikeaCategories'));
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
			$this->Ikea->id = $id;
		if (!$this->Ikea->exists($id)) {
			throw new NotFoundException(__('Invalid ikea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$name = $this->request->data['Ikea']['name'];
			$namafiledoc = $this->request->data['Ikea']['namafiledoc'];
			$namafilepdf = $this->request->data['Ikea']['namafilepdf'];
			$ikea_category_id = $this->request->data['Ikea']['ikea_category_id'];
			$data = array('name' => $name,'namafiledoc' => $namafiledoc,'namafilepdf' => $namafilepdf,'ikea_category_id' => $ikea_category_id, 'update_date' => $today,'update_by' => $user);
			if ($this->Ikea->save($data)) {
				$this->Session->setFlash(__('The ikea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ikea could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ikea.' . $this->Ikea->primaryKey => $id));
			$this->request->data = $this->Ikea->find('first', $options);
		}
		
		$ikeaCategories = $this->Ikea->IkeaCategory->find('list');
		$this->set(compact('ikeaCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ikea->id = $id;
		if (!$this->Ikea->exists()) {
			throw new NotFoundException(__('Invalid ikea'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ikea->delete()) {
			$this->Session->setFlash(__('The ikea has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ikea could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
