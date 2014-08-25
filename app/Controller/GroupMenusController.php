<?php
App::uses('AppController', 'Controller');
/**
 * GroupMenus Controller
 *
 * @property GroupMenu $GroupMenu
 * @property PaginatorComponent $Paginator
 */
class GroupMenusController extends AppController {

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
		$this->GroupMenu->recursive = 1;
		$this->set('groupMenus', $this->paginate("GroupMenu"));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupMenu->exists($id)) {
			throw new NotFoundException(__('Invalid group menu'));
		}
		$options = array('conditions' => array('GroupMenu.' . $this->GroupMenu->primaryKey => $id));
		$this->set('groupMenu', $this->GroupMenu->find('first', $options));
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
			$this->GroupMenu->create();
			$this->request->data['GroupMenu']['create_date'] = $today;
			$this->request->data['GroupMenu']['create_by'] = $user;
			
			$menu_category_id = $this->request->data['GroupMenu']['menu_category_id'];
			$group_user_id = $this->request->data['GroupMenu']['group_user_id'];
			$menu_id = $this->request->data['GroupMenu']['menu_id'];
			$menu_id_db = $this->GroupMenu->query('select menu_id from group_menus A where menu_category_id = '.$menu_category_id.' AND group_user_id = '.$group_user_id.' AND menu_id =  '.$menu_id.' ');
			foreach ($menu_id_db as $checking):
			$checkmenu = $checking['A']['menu_id'];
			endforeach;
			if($checkmenu == $menu_id){
			$this->Session->setFlash(__('This user has already given the access to this menu'));
			}
			else{
				if ($this->GroupMenu->save($this->request->data)) {
					$this->Session->setFlash(__('The group menu has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The group menu could not be saved. Please, try again.'));
				}	
			}
		}
		$menuCategories = $this->GroupMenu->MenuCategory->find('list');
		$this->set(compact('menuCategories'));
		$menus = $this->GroupMenu->MenuCategory->Menu->find('list');
		$this->set(compact('menus'));
		$groupUsers = $this->GroupMenu->GroupUser->find('list');
		$this->set(compact('groupUsers'));
		//$query = $this->GroupMenu->query('select * from users A INNER JOIN group_users B ON A.group_user_id = B.id INNER JOIN group_menus C ON C.group_user_id = B.id INNER JOIN menu_categories D ON D.id = C.menu_category_id INNER JOIN menus E ON E.menu_category_id = D.id');
		//$this->set(compact('query'));
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
		$this->GroupMenu->id = $id;
		if (!$this->GroupMenu->exists($id)) {
			throw new NotFoundException(__('Invalid group menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$menucategory = $this->request->data['GroupMenu']['menu_category_id'];
			$groupuser = $this->request->data['GroupMenu']['group_user_id'];
			$menu = $this->request->data['GroupMenu']['menu_id'];
			$data = array('menu_category_id' => $menucategory, 'group_user_id' => $groupuser, 'menu_id' => $menu, 'update_date' => $today,'update_by' => $user);
			if ($this->GroupMenu->save($data)) {
				$this->Session->setFlash(__('The group menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupMenu.' . $this->GroupMenu->primaryKey => $id));
			$this->request->data = $this->GroupMenu->find('first', $options);
		}
		$menus = $this->GroupMenu->MenuCategory->Menu->find('list');
		$this->set(compact('menus'));
		$groupUsers = $this->GroupMenu->GroupUser->find('list');
		$this->set(compact('groupUsers'));
		$menuCategories = $this->GroupMenu->MenuCategory->find('list');
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
		$this->GroupMenu->id = $id;
		if (!$this->GroupMenu->exists()) {
			throw new NotFoundException(__('Invalid group menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroupMenu->delete()) {
			$this->Session->setFlash(__('The group menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
