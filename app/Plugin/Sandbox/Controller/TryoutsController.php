<?php
App::uses('SandboxAppController', 'Sandbox.Controller');

class TryoutsController extends SandboxAppController {

	public function beforeFilter() {
		parent::beforeFilter();

		$this->Auth->allow();
	}

	public function index() {
		$actions = $this->_getActions($this);

		$this->set(compact('actions'));
	}

	/**
	 * TryoutsController::fontawesome()
	 *
	 * @see http://fontawesome.io/
	 *
	 * @return void
	 */
	public function fontawesome() {
	}

	/**
	 * TryoutsController::fontello()
	 *
	 * @return void
	 */
	public function fontello() {
	}

}

