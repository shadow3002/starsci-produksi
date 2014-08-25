<?php
App::uses('Formulation', 'Model');

/**
 * Formulation Test Case
 *
 */
class FormulationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.formulation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Formulation = ClassRegistry::init('Formulation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Formulation);

		parent::tearDown();
	}

}
