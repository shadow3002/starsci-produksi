<?php
/**
 * ProductionCostFixture
 *
 */
class ProductionCostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'amount' => array('type' => 'integer', 'null' => false, 'default' => null),
		'month' => array('type' => 'integer', 'null' => false, 'default' => null),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'variable_cost_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'fixed_cost_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'create_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'amount' => 1,
			'month' => 1,
			'year' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'variable_cost_id' => 1,
			'fixed_cost_id' => 1,
			'create_by' => 'Lorem ipsum dolor sit amet',
			'create_date' => 1403616649,
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:30:49'
		),
	);

}
