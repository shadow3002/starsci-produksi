<?php
App::uses('SandboxAppController', 'Sandbox.Controller');

class JsExamplesController extends SandboxAppController {

	public function beforeFilter() {
		$this->Auth->allow();

		parent::beforeFilter();
	}

	public function index() {
		$actions = $this->_getActions($this);

		$this->set(compact('actions'));
	}

}
