<?php
App::uses('VariableCostCategory', 'Model');

/**
 * VariableCostCategory Test Case
 *
 */
class VariableCostCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.variable_cost_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VariableCostCategory = ClassRegistry::init('VariableCostCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VariableCostCategory);

		parent::tearDown();
	}

}
