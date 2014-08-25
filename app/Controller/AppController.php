<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $helpers = array('Html', 'Form', 'Session', 'Time');
	public $components = array(
		'Session',
		'RequestHandler',
		'Auth'=>array(
		'loginRedirect'=>array('controller'=>'menus', 'action'=>'menu'),
		'logoutRedirect'=>array('controller'=>'users', 'action'=>'login'),
		'authError'=>"You cant access that page",
		'authorize'=>array('Controller')
	)
	);
		public function isAuthorized($user){
			return true;
		}
		
		public function beforeRender(){
		$this->set('logged_in', $this->Auth->loggedIn());
		$this->set('current_user', $this->Auth->user());
		$catch = $this->Auth->user(array('group_user_id'));
		$this->set('catch', $catch);
		$catchuser = $this->Auth->user(array('username'));
		$tiga = ClassRegistry::init('MenuCategories')->query("select distinct F.name from users A INNER JOIN group_users B ON A.group_user_id = B.id INNER JOIN group_menus C ON C.group_user_id = B.id INNER JOIN menu_categories D ON D.id = C.menu_category_id INNER JOIN menus E ON E.menu_category_id = D.id INNER JOIN modul_menus F ON F.id = D.modul_menu_id where C.group_user_id = '".$catch."' and C.menu_id = E.id order by C.menu_category_id");
		$this->set('modulmenu', $tiga);
		$satu = ClassRegistry::init('GroupMenu')->query("select distinct D.name, F.name from users A INNER JOIN group_users B ON A.group_user_id = B.id INNER JOIN group_menus C ON C.group_user_id = B.id INNER JOIN menu_categories D ON D.id = C.menu_category_id INNER JOIN menus E ON E.menu_category_id = D.id INNER JOIN modul_menus F ON F.id = D.modul_menu_id where C.group_user_id = '".$catch."' and F.id = D.modul_menu_id and C.menu_id = E.id order by C.menu_category_id");
		$this->set('menuuser', $satu);
		$dua = ClassRegistry::init('GroupMenu')->query("select * from users A INNER JOIN group_users B ON A.group_user_id = B.id INNER JOIN group_menus C ON C.group_user_id = B.id INNER JOIN menu_categories D ON D.id = C.menu_category_id INNER JOIN menus E ON E.menu_category_id = D.id where C.group_user_id = '".$catch."'and A.username = '".$catchuser."' and C.menu_id = E.id order by C.menu_category_id");
		$this->set('subsmenu', $dua);
		/*
		$this->loadModel('GroupMenu');
		$this->GroupMenu->Behaviors->attach('Containable');
		$tiga = $this->GroupMenu->find('all', array(
			'contain'=>array(
				'MenuCategory'=>array('Menu'),
				'GroupUser'=>array('User'),
			),
			'conditions'=>array('GroupMenu.group_user_id'=> $catch)
			
		));
		$this->set('submenus', $tiga);
		*/
			$now = new DateTime();
			$today = $now->format("Y-m-d H:i:s");
		$this->Session->write('today',$today);

		}
		
		public function beforeFilter(){
		$this->Auth->allow('login');
		
		}
}
