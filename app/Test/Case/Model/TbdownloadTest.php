<?php
App::uses('Tbdownload', 'Model');

/**
 * Tbdownload Test Case
 *
 */
class TbdownloadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbdownload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tbdownload = ClassRegistry::init('Tbdownload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tbdownload);

		parent::tearDown();
	}

}
