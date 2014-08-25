<?php
/**
 * ProductionReportFixture
 *
 */
class ProductionReportFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'no_kp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'lot_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'standart_quantity' => array('type' => 'integer', 'null' => false, 'default' => null),
		'actual_quantity' => array('type' => 'integer', 'null' => false, 'default' => null),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'create_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qc_passed_qty' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qc_rejected_qty' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'no_kp' => 'Lorem ipsum dolor ',
			'product_id' => 1,
			'lot_number' => 'Lorem ipsum dolor ',
			'standart_quantity' => 1,
			'actual_quantity' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'create_date' => 1403615998,
			'create_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:19:58',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'product_category_id' => 1,
			'qc_passed_qty' => 1,
			'qc_rejected_qty' => 1
		),
	);

}
