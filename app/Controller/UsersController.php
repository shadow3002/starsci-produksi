<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');
	public $presetVars = true;
	var $helpers = array('Html', 'Form', 'Captcha');

/**
 * index method
 *
 * @return void
 */
			
	function captcha()    {
        $this->autoRender = false;
        $this->layout='ajax';
        if(!isset($this->Captcha))    { //if Component was not loaded throug $components array()
            $this->Captcha = $this->Components->load('Captcha', array(
		'captchaType'=>'image', 
		'jquerylib'=>true, 
		'modelName'=>'User', 
		'fieldName'=>'captcha'
            )); //load it
            }
        $this->Captcha->create();
    }
 
	public function login(){
	if($this->Auth->loggedIn()){
	$this->redirect($this->Auth->redirect());	
	}
    $this->Captcha = $this->Components->load('Captcha', array('captchaType'=>'image', 'jquerylib'=>true, 'modelName'=>'User', 'fieldName'=>'captcha')); //load it
	if(!empty($this->request->data))	{
			$this->User->setCaptcha($this->Captcha->getVerCode()); //getting from component and passing to model to make proper validation check
			$this->User->set($this->request->data);
	
	if($this->request->is('post')){
		if ($this->User->validates(array('fieldList' => array('captcha')))) {
			if($user = $this->Auth->login()){
				$this->Session->write('pengguna', $this->data['User']['username']);
						$this->redirect($this->Auth->redirect());					
			}
			else{
				$this->Session->setFlash('Your username/password combination was incorrect');
			
			}
		}
	}
	}
	
	}
	
	public function tbluser(){
		$this->Prg->commonProcess();
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->User->parseCriteria($this->Prg->parsedParams()));
        $this->set('users', $this->Paginator->paginate());

	
	}
	public function daftar(){
			$now = new DateTime();
			$today = $now->format("Y-m-d H:i:s");
			$user = $this->Session->read('pengguna');
			if ($this->request->is('post')) {
			$this->User->create();
			$first = $this->request->data['User']['first_name'];
			$last = $this->request->data['User']['last_name'];
			$username = $this->request->data['User']['username'];
			$password = $this->request->data['User']['password'];
			$group = $this->request->data['User']['group_user_id'];
			$pwconfirm = $this->request->data['User']['password_confirmation'];
			$email = $this->request->data['User']['email'];
			$phone = $this->request->data['User']['phone'];
			$alamat = $this->request->data['User']['alamat'];
			$saveas = array('password_confirmation' => $pwconfirm, 'first_name' => $first,'last_name' => $last,'username' => $username,'password' => $password,'group_user_id' => $group, 'create_date' => $today,'create_by' => $user,'email' => $email,'phone' => $phone,'alamat' => $alamat);			
			if ($this->User->save($saveas)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'tbluser'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groupUsers = $this->User->GroupUser->find('list');
		$this->set(compact('groupUsers'));
		//debug($groupUsers);exit;
	}
	 
//	public function isAuthorized($user){
//		if(in_array($this->action, array('edit', 'delete'))){
//			if($user['id'] != $this->request->params['pass'][0]){
//				return false;
//			}
//		}
//		return true;
//	}
	
		public function logout() {
		$this->redirect($this->Auth->logout());
		}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
			$this->User->id = $id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$first = $this->request->data['User']['first_name'];
			$last = $this->request->data['User']['last_name'];
			$username = $this->request->data['User']['username'];
			$password = $this->request->data['User']['password'];
			$group = $this->request->data['User']['group_user_id'];
			$pwconfirm = $this->request->data['User']['password_confirmation'];
			$saveas = array('password_confirmation' => $pwconfirm, 'first_name' => $first,'last_name' => $last,'username' => $username,'password' => $password,'group_user_id' => $group, 'update_date' => $today,'update_by' => $user);			
			if ($this->User->save($saveas)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'tbluser'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$groupUsers = $this->User->GroupUser->find('list');
		$this->set(compact('groupUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'tbluser'));
	}
	
	public function beforeFilter() {
    parent::beforeFilter();
	
	$this->Auth->allow('captcha');
	}
	}
