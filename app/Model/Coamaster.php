<?php
App::uses('AppModel', 'Model');
/**
 * Coamaster Model
 *
 */
class Coamaster extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	
		 public $actsAs = array('Search.Searchable');
		 public $filterArgs = array(
		 array('name' =>'nocoa', 'type' => 'query', 'method' =>'kode'),
		 array('name' =>'lotno', 'type' => 'query', 'method' =>'kode'));
		 
	public $validate = array(
		'tanggaltes' => array(
			'date' => array(
				'rule' => array('date'),
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
		'create_date' => array(
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
	
	
	public function kode($data = array()){
		if(!empty($data['nocoa']) && ($data['lotno'])){
		$cond = array(
		'AND' =>array(
		'Coamaster.nocoa LIKE' => '%'.$data['nocoa'].'%',
		'Coamaster.lotno LIKE' => '%'.$data['lotno'].'%'));
		return $cond;
		}
		else{
		if($data['nocoa']){
		
		$cond = array(
		'OR' =>array(
		'Coamaster.nocoa LIKE' => '%'.$data['nocoa'].'%'));
		return $cond;
		}
		if($data['lotno']){
		
		$cond = array(
		'OR' =>array(
		'Coamaster.lotno LIKE' => '%'.$data['lotno'].'%'));
		return $cond;
		}
		}
	}
	
	public $belongsTo = array(
		'Printcoa' => array(
			'className' => 'Printcoa',
			'foreignKey' => 'printcoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
