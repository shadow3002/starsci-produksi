<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->Paginator->paginate());
	}
	
	public function menu(){
	}

	
	public function getByCategory() {
		$category_id = $this->request->data['GroupMenu']['menu_category_id'];
 
		$menus = $this->Menu->find('list', array(
			'conditions' => array('Menu.menu_category_id' => $category_id),
			'recursive' => -1
			));
 
		$this->set('menus',$menus);
		$this->layout = 'ajax';
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
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
			$this->Menu->create();
			$name = $this->request->data['Menu']['name'];
			$url = $this->request->data['Menu']['url'];
			$controller = $this->request->data['Menu']['controller'];
			$action = $this->request->data['Menu']['action'];
			$menu_category_id = $this->request->data['Menu']['menu_category_id'];
			$data = array('name' => $name,'url' => $url,'controller' => $controller,'menu_category_id' => $menu_category_id,'action' => $action, 'create_date' => $today,'create_by' => $user);
			if ($this->Menu->save($data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		}
		$menuCategories = $this->Menu->MenuCategory->find('list');
		$this->set(compact('menuCategories'));
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
		$this->Menu->id = $id;
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
		$name = $this->request->data['Menu']['name'];
		$url = $this->request->data['Menu']['url'];
		$controller = $this->request->data['Menu']['controller'];
		$action = $this->request->data['Menu']['action'];
		$menu_category_id = $this->request->data['Menu']['menu_category_id'];
		$data = array('name' => $name,'url' => $url,'controller' => $controller,'menu_category_id' => $menu_category_id ,'action' => $action, 'update_date' => $today,'update_by' => $user);
			
			if ($this->Menu->save($data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
		}
		
		$menuCategories = $this->Menu->MenuCategory->find('list');
		$this->set(compact('menuCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
