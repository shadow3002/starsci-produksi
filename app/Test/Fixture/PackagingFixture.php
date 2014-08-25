<?php
/**
 * PackagingFixture
 *
 */
class PackagingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'production_card_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'std' => array('type' => 'integer', 'null' => false, 'default' => null),
		'actual' => array('type' => 'integer', 'null' => false, 'default' => null),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'product_id' => 1,
			'production_card_id' => 1,
			'std' => 1,
			'actual' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'create_by' => 'Lorem ipsum dolor sit amet',
			'create_date' => 1403615849,
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2014-06-24 20:17:29'
		),
	);

}
