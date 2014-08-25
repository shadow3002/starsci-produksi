<?php
App::uses('TdsCategory', 'Model');

/**
 * TdsCategory Test Case
 *
 */
class TdsCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tds_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TdsCategory = ClassRegistry::init('TdsCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TdsCategory);

		parent::tearDown();
	}

}
