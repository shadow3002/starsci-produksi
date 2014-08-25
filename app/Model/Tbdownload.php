<?php
App::uses('AppModel', 'Model');
/**
 * Tbdownload Model
 *
 */
class Tbdownload extends AppModel {
	

/**
 * Validation rules
 *
 * @var array
 */
		 public $actsAs = array('Search.Searchable');
		 public $filterArgs = array(
		 array('name' =>'namaproduk', 'type' => 'query', 'method' =>'namaproduk'),
		 array('name' =>'category', 'type' => 'query', 'method' =>'namaproduk'));
	public $validate = array(
		'namaproduk' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category' => array(
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
		'update_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'update_by' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'namafilepdf' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'the document upload failed',
				'allowEmpty' => false,
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'processCoversUpload' => array(
			'rule' => array('processCoversUpload',
			'message' =>'Unable to process file document upload',
			),
			),
			'extension' =>array(
			'rule' => array('extension', array('pdf')),
			'message' =>'Please only upload file .pdf',
		),
		),
		'namafiledoc' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'the document upload failed',
				'allowEmpty' => false,
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'processCoverUpload' => array(
			'rule' => array('processCoverUpload',
			'message' =>'Unable to process file document upload',
			),
			),
			'extension' =>array(
			'rule' => array('extension', array('doc', 'docx')),
			'message' =>'Please only upload file .doc and .docx',
		),
		),
	);
	
	public function namaproduk($data = array()){
		if(!empty($data['category']) && ($data['namaproduk'])){
		$cond = array(
		'AND' =>array(
		'Tbdownload.namaproduk LIKE' => '%'.$data['namaproduk'].'%',
		'TbdownloadCategory.name LIKE' => '%'.$data['category'].'%'));
		return $cond;
		}
		else{
		if($data['namaproduk']){
		
		$cond = array(
		'OR' =>array(
		$this->alias. '.namaproduk LIKE' => '%'. $data['namaproduk'] .'%'));
		return $cond;
		}
		if($data['category']){
		
		$cond = array(
		'OR' =>array(
		'TbdownloadCategory.name LIKE' => '%'.$data['category'].'%'));
		return $cond;
		}
		}
	}
	public function processCoverUpload($check = array()){
		if(!is_uploaded_file($check['namafiledoc']['tmp_name'])){
			return false;
		}
		if(!move_uploaded_file($check['namafiledoc']['tmp_name'], WWW_ROOT. 'files'. '/' . 'uploads' . '/' . $check['namafiledoc']['name'])){
			return false;
		}
		'localhost'. $this->data[$this->alias]['namafiledoc'] = $check['namafiledoc']['name'];
		return true;
	}
	public function processCoversUpload($check = array()){
		if(!is_uploaded_file($check['namafilepdf']['tmp_name'])){
			return false;
		}
		if(!move_uploaded_file($check['namafilepdf']['tmp_name'], WWW_ROOT. 'files'. '/' . 'uploads' . '/' . $check['namafilepdf']['name'])){
			return false;
		}
		'localhost'. $this->data[$this->alias]['namafilepdf'] = $check['namafilepdf']['name'];
		return true;
	}
	
	public $belongsTo = array('TbdownloadCategory');
}
