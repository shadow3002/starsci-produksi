<?php

App::uses('Controller', 'Controller');

class ErrorsController extends Controller {

    public function beforeFilter(){
    }

    public function not_found(){
        // your coding goes here.

    }

    public function missing_controller(){
	$this->layout = 'error';
	$this->view = 'missing_action';
    }

    public function missing_action(){
	$this->layout = 'error';
	$this->view = 'missing_action';
    }
}
?>