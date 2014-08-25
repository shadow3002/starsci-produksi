<?php
App::uses('GroupMenu', 'Model');

/**
 * GroupMenu Test Case
 *
 */
class GroupMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_menu',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupMenu = ClassRegistry::init('GroupMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupMenu);

		parent::tearDown();
	}

}
