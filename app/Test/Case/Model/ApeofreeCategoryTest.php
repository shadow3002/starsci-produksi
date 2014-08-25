<?php
App::uses('ApeofreeCategory', 'Model');

/**
 * ApeofreeCategory Test Case
 *
 */
class ApeofreeCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.apeofree_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApeofreeCategory = ClassRegistry::init('ApeofreeCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApeofreeCategory);

		parent::tearDown();
	}

}
