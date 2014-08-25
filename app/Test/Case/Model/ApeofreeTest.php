<?php
App::uses('Apeofree', 'Model');

/**
 * Apeofree Test Case
 *
 */
class ApeofreeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.apeofree'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Apeofree = ClassRegistry::init('Apeofree');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Apeofree);

		parent::tearDown();
	}

}
