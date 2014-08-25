<?php
App::uses('ProductionReport', 'Model');

/**
 * ProductionReport Test Case
 *
 */
class ProductionReportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_report'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionReport = ClassRegistry::init('ProductionReport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionReport);

		parent::tearDown();
	}

}
