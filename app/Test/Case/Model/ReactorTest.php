<?php
App::uses('Reactor', 'Model');

/**
 * Reactor Test Case
 *
 */
class ReactorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reactor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reactor = ClassRegistry::init('Reactor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reactor);

		parent::tearDown();
	}

}
