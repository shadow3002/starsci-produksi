<?php
App::uses('Coamaster', 'Model');

/**
 * Coamaster Test Case
 *
 */
class CoamasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coamaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coamaster = ClassRegistry::init('Coamaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coamaster);

		parent::tearDown();
	}

}
