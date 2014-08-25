<?php
App::uses('ProductionCard', 'Model');

/**
 * ProductionCard Test Case
 *
 */
class ProductionCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production_card'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductionCard = ClassRegistry::init('ProductionCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductionCard);

		parent::tearDown();
	}

}
