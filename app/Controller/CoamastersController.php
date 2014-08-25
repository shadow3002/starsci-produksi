<?php
App::uses('AppController', 'Controller');
/**
 * Coamasters Controller
 *
 * @property Coamaster $Coamaster
 * @property PaginatorComponent $Paginator
 */
class CoamastersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');
	public $presetVars = true;

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->Prg->commonProcess();
        $this->Paginator->settings = array('limit' =>15, 'conditions' => $this->Coamaster->parseCriteria($this->Prg->parsedParams()));
        $this->set('coamasters', $this->Paginator->paginate());
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$now = new DateTime();
		$today = $now->format("d-m-Y");
		$this->set('today', $today);
		if (!$this->Coamaster->exists($id)) {
			throw new NotFoundException(__('Invalid coamaster'));
		}
		$options = array(
		'conditions' => array(
		'Printcoa.' . $this->Coamaster->Printcoa->primaryKey => $id));
		$this->set('printcoa', $this->Coamaster->Printcoa->find('first', $options));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$user = $this->Session->read('pengguna');
		$today = $this->Session->read('today');
		if ($this->request->is('post')) {
			$this->Coamaster->create();
			$this->request->data['Coamaster']['create_date'] = $today;
			$this->request->data['Coamaster']['create_by'] = $user;
			$this->Coamaster->save($this->request->data);
			$this->request->data['Printcoa']['nocoa'] = $this->request->data['Coamaster']['nocoa'];
			$this->request->data['Printcoa']['namaproduk'] = $this->request->data['Coamaster']['namaproduk'];
			$this->request->data['Printcoa']['lotno'] = $this->request->data['Coamaster']['lotno'];
			$this->request->data['Printcoa']['tanggaltes'] = $this->request->data['Coamaster']['tanggaltes'];
			$this->request->data['Printcoa']['create_by'] = $this->request->data['Coamaster']['create_by'];
			$this->request->data['Printcoa']['create_date'] = $this->request->data['Coamaster']['create_date'];
		if($this->request->data['Coamaster']['appearance'] == 1){
			$this->request->data['Printcoa']['appunit'] = $this->request->data['Coamaster']['appunit'];
			$this->request->data['Printcoa']['appreq'] = $this->request->data['Coamaster']['appreq'];
			$this->request->data['Printcoa']['appresults'] = $this->request->data['Coamaster']['appresults'];
			$this->request->data['Printcoa']['appket'] = $this->request->data['Coamaster']['appket'];
		}
		if($this->request->data['Coamaster']['productcolour'] == 1){
			$this->request->data['Printcoa']['produkunit'] = $this->request->data['Coamaster']['produkunit'];
			$this->request->data['Printcoa']['produkreq'] = $this->request->data['Coamaster']['produkreq'];
			$this->request->data['Printcoa']['produkresults'] = $this->request->data['Coamaster']['produkresults'];
			$this->request->data['Printcoa']['produkket'] = $this->request->data['Coamaster']['produkket'];
		}
		if($this->request->data['Coamaster']['refactionindex'] == 1){
			$this->request->data['Printcoa']['refracunit'] = $this->request->data['Coamaster']['refracunit'];
			$this->request->data['Printcoa']['refracreq'] = $this->request->data['Coamaster']['refracreq'];
			$this->request->data['Printcoa']['refracresults'] = $this->request->data['Coamaster']['refracresults'];
			$this->request->data['Printcoa']['refracket'] = $this->request->data['Coamaster']['refracket'];
		}
		if($this->request->data['Coamaster']['phofproduct'] == 1){
			$this->request->data['Printcoa']['phunit'] = $this->request->data['Coamaster']['phunit'];
			$this->request->data['Printcoa']['phreq'] = $this->request->data['Coamaster']['phreq'];
			$this->request->data['Printcoa']['phresults'] = $this->request->data['Coamaster']['phresults'];
			$this->request->data['Printcoa']['phket'] = $this->request->data['Coamaster']['phket'];
		}
		if($this->request->data['Coamaster']['totalsolidcontent'] == 1){
			$this->request->data['Printcoa']['tscunit'] = $this->request->data['Coamaster']['tscunit'];
			$this->request->data['Printcoa']['tscreq'] = $this->request->data['Coamaster']['tscreq'];
			$this->request->data['Printcoa']['tscresults'] = $this->request->data['Coamaster']['tscresults'];
			$this->request->data['Printcoa']['tscket'] = $this->request->data['Coamaster']['tscket'];
		}
		if($this->request->data['Coamaster']['freeformaldehidecontent'] == 1){
			$this->request->data['Printcoa']['freeunit'] = $this->request->data['Coamaster']['freeunit'];
			$this->request->data['Printcoa']['freereq'] = $this->request->data['Coamaster']['freereq'];
			$this->request->data['Printcoa']['freeresults'] = $this->request->data['Coamaster']['freeresults'];
			$this->request->data['Printcoa']['freeket'] = $this->request->data['Coamaster']['freeket'];
		}
		if($this->request->data['Coamaster']['triazinecontent'] == 1){
			$this->request->data['Printcoa']['triziunit'] = $this->request->data['Coamaster']['triziunit'];
			$this->request->data['Printcoa']['trizireq'] = $this->request->data['Coamaster']['trizireq'];
			$this->request->data['Printcoa']['triziresults'] = $this->request->data['Coamaster']['triziresults'];
			$this->request->data['Printcoa']['triziket'] = $this->request->data['Coamaster']['triziket'];
		}
		if($this->request->data['Coamaster']['viscosity'] == 1){
			$this->request->data['Printcoa']['viscounit'] = $this->request->data['Coamaster']['viscounit'];
			$this->request->data['Printcoa']['viscoreq'] = $this->request->data['Coamaster']['viscoreq'];
			$this->request->data['Printcoa']['viscoresults'] = $this->request->data['Coamaster']['viscoresults'];
			$this->request->data['Printcoa']['viscoket'] = $this->request->data['Coamaster']['viscoket'];
		}
		if($this->request->data['Coamaster']['solubilityinwater'] == 1){
			$this->request->data['Printcoa']['solunit'] = $this->request->data['Coamaster']['solunit'];
			$this->request->data['Printcoa']['solreq'] = $this->request->data['Coamaster']['solreq'];
			$this->request->data['Printcoa']['solresults'] = $this->request->data['Coamaster']['solresults'];
			$this->request->data['Printcoa']['solket'] = $this->request->data['Coamaster']['solket'];
		}
		if($this->request->data['Coamaster']['solubilityinwater'] == 1){
			$this->request->data['Printcoa']['solunit'] = $this->request->data['Coamaster']['solunit'];
			$this->request->data['Printcoa']['solreq'] = $this->request->data['Coamaster']['solreq'];
			$this->request->data['Printcoa']['solresults'] = $this->request->data['Coamaster']['solresults'];
			$this->request->data['Printcoa']['solket'] = $this->request->data['Coamaster']['solket'];
		}
		if($this->request->data['Coamaster']['density'] == 1){
			$this->request->data['Printcoa']['densiunit'] = $this->request->data['Coamaster']['densiunit'];
			$this->request->data['Printcoa']['densireq'] = $this->request->data['Coamaster']['densireq'];
			$this->request->data['Printcoa']['densiresults'] = $this->request->data['Coamaster']['densiresults'];
			$this->request->data['Printcoa']['densiket'] = $this->request->data['Coamaster']['densiket'];
		}
		if($this->request->data['Coamaster']['tambahan1'] == 1){
			$this->request->data['Printcoa']['namatmbh1'] = $this->request->data['Coamaster']['namatmbh1'];
			$this->request->data['Printcoa']['methodtmbh1'] = $this->request->data['Coamaster']['methodtmbh1'];
			$this->request->data['Printcoa']['tmbh1unit'] = $this->request->data['Coamaster']['tmbh1unit'];
			$this->request->data['Printcoa']['tmbh1req'] = $this->request->data['Coamaster']['tmbh1req'];
			$this->request->data['Printcoa']['tmbh1results'] = $this->request->data['Coamaster']['tmbh1results'];
			$this->request->data['Printcoa']['tmbh1ket'] = $this->request->data['Coamaster']['tmbh1ket'];
		}
		if($this->request->data['Coamaster']['tambahan1'] == 1){
			$this->request->data['Printcoa']['namatmbh1'] = $this->request->data['Coamaster']['namatmbh1'];
			$this->request->data['Printcoa']['methodtmbh1'] = $this->request->data['Coamaster']['methodtmbh1'];
			$this->request->data['Printcoa']['tmbh1unit'] = $this->request->data['Coamaster']['tmbh1unit'];
			$this->request->data['Printcoa']['tmbh1req'] = $this->request->data['Coamaster']['tmbh1req'];
			$this->request->data['Printcoa']['tmbh1results'] = $this->request->data['Coamaster']['tmbh1results'];
			$this->request->data['Printcoa']['tmbh1ket'] = $this->request->data['Coamaster']['tmbh1ket'];
		}
		if($this->request->data['Coamaster']['tambahan2'] == 1){
			$this->request->data['Printcoa']['namatmbh2'] = $this->request->data['Coamaster']['namatmbh2'];
			$this->request->data['Printcoa']['methodtmbh2'] = $this->request->data['Coamaster']['methodtmbh2'];
			$this->request->data['Printcoa']['tmbh2unit'] = $this->request->data['Coamaster']['tmbh2unit'];
			$this->request->data['Printcoa']['tmbh2req'] = $this->request->data['Coamaster']['tmbh2req'];
			$this->request->data['Printcoa']['tmbh2results'] = $this->request->data['Coamaster']['tmbh2results'];
			$this->request->data['Printcoa']['tmbh2ket'] = $this->request->data['Coamaster']['tmbh2ket'];
		}
		if ($this->Coamaster->Printcoa->save($this->request->data['Printcoa'])) {
				return $this->redirect(array('action' => 'index'));
				$this->Session->setFlash(__('The coamaster has been saved.'));
			} else {
				$this->Session->setFlash(__('The coamaster could not be saved. Please, try again.'));
			}
		
		}
		
		$printcoas = $this->Coamaster->Printcoa->find('all');
		$this->set(compact('printcoas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id= null) {
		$user = $this->Session->read('pengguna');
		$today = $this->Session->read('today');
		$this->Coamaster->id = $id;
		$this->Coamaster->Printcoa->id= $id;
		if (!$this->Coamaster->exists($id)) {
			throw new NotFoundException(__('Invalid coamaster'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Coamaster']['update_date'] = $today;
			$this->request->data['Coamaster']['update_by'] = $user;
				$this->Coamaster->save($this->request->data);
			$this->request->data['Printcoa']['nocoa'] = $this->request->data['Coamaster']['nocoa'];
			$this->request->data['Printcoa']['namaproduk'] = $this->request->data['Coamaster']['namaproduk'];
			$this->request->data['Printcoa']['lotno'] = $this->request->data['Coamaster']['lotno'];
			$this->request->data['Printcoa']['tanggaltes'] = $this->request->data['Coamaster']['tanggaltes'];
			$this->request->data['Printcoa']['update_by'] = $user;
			$this->request->data['Printcoa']['update_date'] = $today;
		
		if($this->request->data['Coamaster']['appearance'] == 1){
			$this->request->data['Printcoa']['appunit'] = $this->request->data['Coamaster']['appunit'];
			$this->request->data['Printcoa']['appreq'] = $this->request->data['Coamaster']['appreq'];
			$this->request->data['Printcoa']['appresults'] = $this->request->data['Coamaster']['appresults'];
			$this->request->data['Printcoa']['appket'] = $this->request->data['Coamaster']['appket'];
		}
		elseif($this->request->data['Coamaster']['productcolour'] == 1){
			$this->request->data['Printcoa']['produkunit'] = $this->request->data['Coamaster']['produkunit'];
			$this->request->data['Printcoa']['produkreq'] = $this->request->data['Coamaster']['produkreq'];
			$this->request->data['Printcoa']['produkresults'] = $this->request->data['Coamaster']['produkresults'];
			$this->request->data['Printcoa']['produkket'] = $this->request->data['Coamaster']['produkket'];
		}
		elseif($this->request->data['Coamaster']['refactionindex'] == 1){
			$this->request->data['Printcoa']['refracunit'] = $this->request->data['Coamaster']['refracunit'];
			$this->request->data['Printcoa']['refracreq'] = $this->request->data['Coamaster']['refracreq'];
			$this->request->data['Printcoa']['refracresults'] = $this->request->data['Coamaster']['refracresults'];
			$this->request->data['Printcoa']['refracket'] = $this->request->data['Coamaster']['refracket'];
		}
		elseif($this->request->data['Coamaster']['phofproduct'] == 1){
			$this->request->data['Printcoa']['phunit'] = $this->request->data['Coamaster']['phunit'];
			$this->request->data['Printcoa']['phreq'] = $this->request->data['Coamaster']['phreq'];
			$this->request->data['Printcoa']['phresults'] = $this->request->data['Coamaster']['phresults'];
			$this->request->data['Printcoa']['phket'] = $this->request->data['Coamaster']['phket'];
		}
		elseif($this->request->data['Coamaster']['totalsolidcontent'] == 1){
			$this->request->data['Printcoa']['tscunit'] = $this->request->data['Coamaster']['tscunit'];
			$this->request->data['Printcoa']['tscreq'] = $this->request->data['Coamaster']['tscreq'];
			$this->request->data['Printcoa']['tscresults'] = $this->request->data['Coamaster']['tscresults'];
			$this->request->data['Printcoa']['tscket'] = $this->request->data['Coamaster']['tscket'];
		}
		elseif($this->request->data['Coamaster']['freeformaldehidecontent'] == 1){
			$this->request->data['Printcoa']['freeunit'] = $this->request->data['Coamaster']['freeunit'];
			$this->request->data['Printcoa']['freereq'] = $this->request->data['Coamaster']['freereq'];
			$this->request->data['Printcoa']['freeresults'] = $this->request->data['Coamaster']['freeresults'];
			$this->request->data['Printcoa']['freeket'] = $this->request->data['Coamaster']['freeket'];
		}
		elseif($this->request->data['Coamaster']['triazinecontent'] == 1){
			$this->request->data['Printcoa']['triziunit'] = $this->request->data['Coamaster']['triziunit'];
			$this->request->data['Printcoa']['trizireq'] = $this->request->data['Coamaster']['trizireq'];
			$this->request->data['Printcoa']['triziresults'] = $this->request->data['Coamaster']['triziresults'];
			$this->request->data['Printcoa']['triziket'] = $this->request->data['Coamaster']['triziket'];
		}
		elseif($this->request->data['Coamaster']['viscosity'] == 1){
			$this->request->data['Printcoa']['viscounit'] = $this->request->data['Coamaster']['viscounit'];
			$this->request->data['Printcoa']['viscoreq'] = $this->request->data['Coamaster']['viscoreq'];
			$this->request->data['Printcoa']['viscoresults'] = $this->request->data['Coamaster']['viscoresults'];
			$this->request->data['Printcoa']['viscoket'] = $this->request->data['Coamaster']['viscoket'];
		}
		elseif($this->request->data['Coamaster']['solubilityinwater'] == 1){
			$this->request->data['Printcoa']['solunit'] = $this->request->data['Coamaster']['solunit'];
			$this->request->data['Printcoa']['solreq'] = $this->request->data['Coamaster']['solreq'];
			$this->request->data['Printcoa']['solresults'] = $this->request->data['Coamaster']['solresults'];
			$this->request->data['Printcoa']['solket'] = $this->request->data['Coamaster']['solket'];
		}
		elseif($this->request->data['Coamaster']['solubilityinwater'] == 1){
			$this->request->data['Printcoa']['solunit'] = $this->request->data['Coamaster']['solunit'];
			$this->request->data['Printcoa']['solreq'] = $this->request->data['Coamaster']['solreq'];
			$this->request->data['Printcoa']['solresults'] = $this->request->data['Coamaster']['solresults'];
			$this->request->data['Printcoa']['solket'] = $this->request->data['Coamaster']['solket'];
		}
		elseif($this->request->data['Coamaster']['density'] == 1){
			$this->request->data['Printcoa']['densiunit'] = $this->request->data['Coamaster']['densiunit'];
			$this->request->data['Printcoa']['densireq'] = $this->request->data['Coamaster']['densireq'];
			$this->request->data['Printcoa']['densiresults'] = $this->request->data['Coamaster']['densiresults'];
			$this->request->data['Printcoa']['densiket'] = $this->request->data['Coamaster']['densiket'];
		}
		elseif($this->request->data['Coamaster']['tambahan1'] == 1){
			$this->request->data['Printcoa']['namatmbh1'] = $this->request->data['Coamaster']['namatmbh1'];
			$this->request->data['Printcoa']['methodtmbh1'] = $this->request->data['Coamaster']['methodtmbh1'];
			$this->request->data['Printcoa']['tmbh1unit'] = $this->request->data['Coamaster']['tmbh1unit'];
			$this->request->data['Printcoa']['tmbh1req'] = $this->request->data['Coamaster']['tmbh1req'];
			$this->request->data['Printcoa']['tmbh1results'] = $this->request->data['Coamaster']['tmbh1results'];
			$this->request->data['Printcoa']['tmbh1ket'] = $this->request->data['Coamaster']['tmbh1ket'];
		}
		elseif($this->request->data['Coamaster']['tambahan2'] == 1){
			$this->request->data['Printcoa']['namatmbh2'] = $this->request->data['Coamaster']['namatmbh2'];
			$this->request->data['Printcoa']['methodtmbh2'] = $this->request->data['Coamaster']['methodtmbh2'];
			$this->request->data['Printcoa']['tmbh2unit'] = $this->request->data['Coamaster']['tmbh2unit'];
			$this->request->data['Printcoa']['tmbh2req'] = $this->request->data['Coamaster']['tmbh2req'];
			$this->request->data['Printcoa']['tmbh2results'] = $this->request->data['Coamaster']['tmbh2results'];
			$this->request->data['Printcoa']['tmbh2ket'] = $this->request->data['Coamaster']['tmbh2ket'];
		}
			if ($this->Coamaster->Printcoa->save($this->request->data['Printcoa'])) {
				$this->Session->setFlash(__('The coamaster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coamaster could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coamaster.' . $this->Coamaster->primaryKey => $id));
			$this->request->data = $this->Coamaster->find('first', $options);
		}
		
		$printcoas = $this->Coamaster->Printcoa->find('all');
		$this->set(compact('printcoas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Coamaster->id = $id;
		if (!$this->Coamaster->exists()) {
			throw new NotFoundException(__('Invalid coamaster'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coamaster->delete()) {
			$this->Session->setFlash(__('The coamaster has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coamaster could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
