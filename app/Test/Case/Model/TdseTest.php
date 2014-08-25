<?php
App::uses('Tdse', 'Model');

/**
 * Tdse Test Case
 *
 */
class TdseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tdse'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tdse = ClassRegistry::init('Tdse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tdse);

		parent::tearDown();
	}

}
