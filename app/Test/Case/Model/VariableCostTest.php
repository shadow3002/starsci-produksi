<?php
App::uses('VariableCost', 'Model');

/**
 * VariableCost Test Case
 *
 */
class VariableCostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.variable_cost',
		'app.production_cost',
		'app.fixed_cost'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VariableCost = ClassRegistry::init('VariableCost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VariableCost);

		parent::tearDown();
	}

}
