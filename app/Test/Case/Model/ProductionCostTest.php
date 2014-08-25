<?php
App::uses('ProductionCost', 'Model');

/**
 * ProductionCost Test Case
 *
 */
class ProductionCostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_cost',
		'app.variable_cost',
		'app.fixed_cost'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionCost = ClassRegistry::init('ProductionCost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionCost);

		parent::tearDown();
	}

}
