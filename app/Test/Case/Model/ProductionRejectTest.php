<?php
App::uses('ProductionReject', 'Model');

/**
 * ProductionReject Test Case
 *
 */
class ProductionRejectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_reject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionReject = ClassRegistry::init('ProductionReject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionReject);

		parent::tearDown();
	}

}
