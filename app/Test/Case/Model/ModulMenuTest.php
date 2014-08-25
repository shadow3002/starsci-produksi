<?php
App::uses('ModulMenu', 'Model');

/**
 * ModulMenu Test Case
 *
 */
class ModulMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modul_menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ModulMenu = ClassRegistry::init('ModulMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ModulMenu);

		parent::tearDown();
	}

}
