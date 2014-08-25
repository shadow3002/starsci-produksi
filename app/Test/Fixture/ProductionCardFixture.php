<?php
/**
 * ProductionCardFixture
 *
 */
class ProductionCardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'standard_batch' => array('type' => 'integer', 'null' => false, 'default' => null),
		'lot_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'production_status_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'production_time' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nitrogen' => array('type' => 'integer', 'null' => false, 'default' => null),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reactor_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'code' => 'Lorem ipsum dolor sit amet',
			'product_name' => 'Lorem ipsum dolor sit amet',
			'standard_batch' => 1,
			'lot_no' => 'Lorem ipsum dolor sit amet',
			'production_status_id' => 1,
			'production_time' => 1,
			'nitrogen' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'reactor_id' => 1,
			'create_date' => 1403615890,
			'create_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:18:10',
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
