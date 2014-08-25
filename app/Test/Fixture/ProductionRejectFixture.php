<?php
/**
 * ProductionRejectFixture
 *
 */
class ProductionRejectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'production_report_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qc_passed_qty' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qc_rejected_qty' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'production_report_id' => 1,
			'product_id' => 1,
			'qc_passed_qty' => 1,
			'qc_rejected_qty' => 1,
			'create_date' => 1403615964,
			'create_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:19:24',
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
