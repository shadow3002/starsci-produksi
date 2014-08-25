<?php
App::uses('Formula', 'Model');

/**
 * Formula Test Case
 *
 */
class FormulaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.formula'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Formula = ClassRegistry::init('Formula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Formula);

		parent::tearDown();
	}

}
