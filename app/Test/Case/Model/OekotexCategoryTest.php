<?php
App::uses('OekotexCategory', 'Model');

/**
 * OekotexCategory Test Case
 *
 */
class OekotexCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.oekotex_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OekotexCategory = ClassRegistry::init('OekotexCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OekotexCategory);

		parent::tearDown();
	}

}
