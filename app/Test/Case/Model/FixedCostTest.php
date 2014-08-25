<?php
App::uses('FixedCost', 'Model');

/**
 * FixedCost Test Case
 *
 */
class FixedCostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fixed_cost',
		'app.production_cost'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FixedCost = ClassRegistry::init('FixedCost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FixedCost);

		parent::tearDown();
	}

}
