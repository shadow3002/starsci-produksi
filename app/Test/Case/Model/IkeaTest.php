<?php
App::uses('Ikea', 'Model');

/**
 * Ikea Test Case
 *
 */
class IkeaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ikea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ikea = ClassRegistry::init('Ikea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ikea);

		parent::tearDown();
	}

}
