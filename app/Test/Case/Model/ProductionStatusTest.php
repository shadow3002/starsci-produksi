<?php
App::uses('ProductionStatus', 'Model');

/**
 * ProductionStatus Test Case
 *
 */
class ProductionStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionStatus = ClassRegistry::init('ProductionStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionStatus);

		parent::tearDown();
	}

}
