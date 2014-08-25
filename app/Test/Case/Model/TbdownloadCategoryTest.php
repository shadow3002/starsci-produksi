<?php
App::uses('TbdownloadCategory', 'Model');

/**
 * TbdownloadCategory Test Case
 *
 */
class TbdownloadCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbdownload_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TbdownloadCategory = ClassRegistry::init('TbdownloadCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TbdownloadCategory);

		parent::tearDown();
	}

}
