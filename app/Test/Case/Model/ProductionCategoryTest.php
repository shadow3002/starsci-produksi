<?php
App::uses('ProductionCategory', 'Model');

/**
 * ProductionCategory Test Case
 *
 */
class ProductionCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionCategory = ClassRegistry::init('ProductionCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionCategory);

		parent::tearDown();
	}

}
