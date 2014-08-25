<?php
App::uses('AppModel', 'Model');
/**
 * ProductionCost Model
 *
 * @property VariableCost $VariableCost
 * @property FixedCost $FixedCost
 */
class ProductionCost extends AppModel {

		 public $actsAs = array('Search.Searchable');
		 public $filterArgs = array(
		 array('name' =>'year', 'type' => 'query', 'method' =>'cetak'),
		 array('name' =>'month', 'type' => 'query', 'method' =>'cetak'));
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'amount' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'month' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'note' => array(
			'notEmpty' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	
	public function cetak($data = array()){
		if(!empty($data['year']) && ($data['month'])){
		$cond = array(
		'AND' =>array(
		'ProductionCost.year =' => $data['year']),
		'ProductionCost.month =' => $data['month']
		);
		return $cond;
		}
		}
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'VariableCost' => array(
			'className' => 'VariableCost',
			'foreignKey' => 'variable_cost_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
