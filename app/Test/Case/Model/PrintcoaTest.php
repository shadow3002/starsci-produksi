<?php
App::uses('Printcoa', 'Model');

/**
 * Printcoa Test Case
 *
 */
class PrintcoaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.printcoa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Printcoa = ClassRegistry::init('Printcoa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Printcoa);

		parent::tearDown();
	}

}
