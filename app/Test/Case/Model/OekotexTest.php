<?php
App::uses('Oekotex', 'Model');

/**
 * Oekotex Test Case
 *
 */
class OekotexTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.oekotex'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Oekotex = ClassRegistry::init('Oekotex');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oekotex);

		parent::tearDown();
	}

}
