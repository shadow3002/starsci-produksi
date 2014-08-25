<?php
/**
 * ProductionScheduleFixture
 *
 */
class ProductionScheduleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'shift_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'week' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reactor_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'lot_no' => array('type' => 'integer', 'null' => false, 'default' => null),
		'note' => array('type' => 'integer', 'null' => false, 'default' => null),
		'create_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'create_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'shift_id' => 1,
			'product_id' => 1,
			'week' => 'Lorem ipsum dolor ',
			'reactor_id' => 1,
			'lot_no' => 1,
			'note' => 1,
			'create_date' => 1403616041,
			'create_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:20:41',
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
