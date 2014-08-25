<?php
App::uses('IkeaCategory', 'Model');

/**
 * IkeaCategory Test Case
 *
 */
class IkeaCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ikea_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IkeaCategory = ClassRegistry::init('IkeaCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IkeaCategory);

		parent::tearDown();
	}

}
