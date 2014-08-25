<?php
App::uses('ProductionSchedule', 'Model');

/**
 * ProductionSchedule Test Case
 *
 */
class ProductionScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionSchedule = ClassRegistry::init('ProductionSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionSchedule);

		parent::tearDown();
	}

}
