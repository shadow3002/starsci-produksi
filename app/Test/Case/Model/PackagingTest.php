<?php
App::uses('Packaging', 'Model');

/**
 * Packaging Test Case
 *
 */
class PackagingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.packaging'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Packaging = ClassRegistry::init('Packaging');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Packaging);

		parent::tearDown();
	}

}
