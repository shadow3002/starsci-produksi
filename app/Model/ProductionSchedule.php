<?php
App::uses('AppModel', 'Model');
/**
 * ProductionSchedule Model
 *
 */
class ProductionSchedule extends AppModel {


		 public $actsAs = array('Search.Searchable');
		 public $filterArgs = array(
		 array('name' =>'week', 'type' => 'query', 'method' =>'cetak'),
		 array('name' =>'month', 'type' => 'query', 'method' =>'cetak'),
		 array('name' =>'year', 'type' => 'query', 'method' =>'cetak'));	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'shift_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'week' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'reactor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lot_no' => array(
			'noteEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'note' => array(
			'noteEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'create_by' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified_by' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	
	public function cetak($data = array()){
		if(!empty($data['week']) && ($data['month']) && ($data['year'])){
		$cond = array(
		'AND' =>array(
		'ProductionSchedule.week =' => $data['week'],
		'(select substr(ProductionSchedule.create_date,6, 2) as month) =' => $data['month'],
		'(select substr(ProductionSchedule.create_date,1, 4) as year) =' => $data['year']));
		return $cond;
		}
		}
	
	
	
	public $belongsTo = array(
	'Shift' => array(
	'className' => 'Shift',
	'foreignKey' => 'shift_id'),
	'Product' => array(
	'className' => 'Product',
	'foreignKey' => 'product_id'),
	'Reactor' => array(
	'className' => 'Reactor',
	'foreignKey' => 'reactor_id')
	);
}
