<?php
App::uses('GroupUser', 'Model');

/**
 * GroupUser Test Case
 *
 */
class GroupUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupUser = ClassRegistry::init('GroupUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupUser);

		parent::tearDown();
	}

}
