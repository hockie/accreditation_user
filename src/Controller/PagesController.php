<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
//use Cake\ORM\TableRegistry;


/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
 public function initialize(){
     parent::initialize();
     $this->loadModel('Announcements');
	 $this->loadModel('DocumentTypes');
	 $this->loadModel('DownloadableFiles');
	 $this->loadModel('ZipCodes');
	 $this->loadModel('Regions');
	 $this->loadModel('DistrictProvinces');
	 $this->loadModel('MunicipalityCities');
	 $this->loadModel('Nationalities');
	 $this->loadModel('EstablishmentAccounts');
	 $this->loadModel('EstablishmentDetails');
	 $this->loadModel('OwnerInformations');
	 $this->loadModel('ManagingCompanyInformations');
	 $this->loadModel('MayorPermits');
	 $this->loadModel('SecPermits');
	 $this->loadModel('DtiPermits');
	 $this->loadModel('CdaPermits');
	 $this->loadModel('GeneralManagerInformations');
	 $this->loadModel('AuthorizedRepresentatives');
   }
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
	
	public function register($id = null){
		$regions = $this->Regions->find('list')->toArray();
		$this->set(compact('regions'));
		//$this->set('myid','selected');
		 
	
	}
	
	public function districtProvinces($id = null){
		
		if ($this->request->is('get')) {
		
			$districtProvinces = $this->DistrictProvinces->find()->select(['DistrictProvinces.id','DistrictProvinces.name'])->where(['DistrictProvinces.region_id'=>$id]);			
			
			$this->set(compact('districtProvinces'));
		 
		 }
		
	}
	
	public function municipalityCities($id = null){
		
		if ($this->request->is('get')) {
		
			$municipalityCities = $this->MunicipalityCities->find()->select(['MunicipalityCities.id','MunicipalityCities.name'])->where(['MunicipalityCities.district_province_id'=>$id]);			
			
			$this->set(compact('municipalityCities'));
		 
		 }
		
	}
	
	public function index(){
		//announcements
		$announcements = $this->Announcements->find()->toArray();
		$this->set('announcements', $announcements);
		
		//downloadable files
		$downloadableFiles = $this->DownloadableFiles->find('all')->where(['DownloadableFiles.document_type_id'=>1]);
		$this->set('downloadableFiles',$downloadableFiles);
		
		//rules and regulations
		$rulesRegulations = $this->DownloadableFiles->find('all')->where(['DownloadableFiles.document_type_id'=>2]);
		$this->set('rulesRegulations',$rulesRegulations);
		
		//DOT Circulars
		$dotCirculars = $this->DownloadableFiles->find('all')->where(['DownloadableFiles.document_type_id'=>3]);
		$this->set('dotCirculars',$dotCirculars);
		
		//Application Forms
		$appForms = $this->DownloadableFiles->find('all')->where(['DownloadableFiles.document_type_id'=>4]);
		$this->set('appForms',$appForms);

        //$this->set(compact('announcements'));
		$this->deleteSession();
	}
	
	public function deleteSession(){
         $mysession = $this->request->getSession();
		$mysession->destroy();
		//return $this->redirect(['controller'=>'Pages','action'=>'index']);
	}
	
	public function whatisdot(){
		
	}
	
	public function reviewInfo($estacc_id = null){
		
		
		$this->sessionHouse($estacc_id);
		
		$establishment_accounts = $this->EstablishmentAccounts->get($estacc_id);
		$establishment_details = $this->EstablishmentDetails->get($establishment_accounts['establishment_detail_id']);
		$municipality_cities = $this->MunicipalityCities->find('list')->toArray();
		$district_provinces = $this->DistrictProvinces->find('list')->toArray();
		$regions = $this->Regions->find('list')->toArray();
		$zip_codes = $this->ZipCodes->find('list')->toArray();
		$owner_informations = $this->OwnerInformations->get($establishment_accounts['owner_information_id']);
		$nationalities = $this->Nationalities->find('list')->toArray();
		$managing_company_informations = $this->ManagingCompanyInformations->get($establishment_accounts['managing_company_information_id']);
		$mayor_permits = $this->MayorPermits->get($establishment_accounts['mayor_permit_id']);
		$general_manager_informations = $this->GeneralManagerInformations->get($establishment_accounts['general_manager_information_id']);
		$authorized_representatives = $this->AuthorizedRepresentatives->get($establishment_accounts['authorized_representative_id']);
		
		if($establishment_accounts['sec_permit_id'] != null){
			$sec_permits = $this->SecPermits->get($establishment_accounts['sec_permit_id']);
		}else{
			$sec_permits = null;
		}
				
		if($establishment_accounts['dti_permit_id'] != null){
			$dti_permits = $this->DtiPermits->get($establishment_accounts['dti_permit_id']);
		}else{
			$dti_permits = null;
		}
		
		if($establishment_accounts['cda_permit_id'] != null){
			$cda_permits = $this->DtiPermits->get($establishment_accounts['cda_permit_id']);
		}else{
			$cda_permits = null;
		}
		
		
		
		$this->set(compact('establishment_accounts','establishment_details','municipality_cities','district_provinces','regions','zip_codes','owner_informations','nationalities','managing_company_informations','mayor_permits','sec_permits','dti_permits','cda_permits','general_manager_informations','authorized_representatives'));
		
		
		$org_type = [1=>'Single Proprietor',2=>'Partnership',3=>'Corporation',4=>'Cooperative'];
		$this->set('org_type',$org_type);
		
	}
	public function sessionHouse($id = null){
		
		//read session
		$session = $this->getRequest()->getSession();
		
		//read session
		if($session->read('entityCategoryTypeId')){
			 $entityCategoryTypeId = $session->read('entityCategoryTypeId');
		}else{
			$entityCategoryTypeId = 0;
		}
		
		if($session->read('entityCategoryId')){
			 $entityCategoryId = $session->read('entityCategoryId');
		}else{
			$entityCategoryId = 0;
		}
		
        if($session->read('entityTypeId')){
			 $entityTypeId = $session->read('entityTypeId');
		}else{
			$entityTypeId = 0;
		}
		
		$this->set(compact('entityCategoryTypeId','entityCategoryId','entityTypeId'));
		
		if($session->read('proc1')){
			$proc1 = $session->read('proc1');
		}else{
			$proc1 = false;
		}
		if($session->read('proc2')){
			$proc2 = $session->read('proc2');
		}else{
			$proc2 = false;
		}
		if($session->read('proc3')){
			$proc3 = $session->read('proc3');
		}else{
			$proc3 = false;
		}
		if($session->read('proc4')){
			$proc4 = $session->read('proc4');
		}else{
			$proc4 = false;
		}
		if($session->read('proc5')){
			$proc5 = $session->read('proc5');
		}else{
			$proc5 = false;
		}		
		if($session->read('proc6')){
			$proc6 = $session->read('proc6');
		}else{
			$proc6 = false;
		}		
		if($session->read('proc7')){
			$proc7 = $session->read('proc7');
		}else{
			$proc7 = false;
		}
		if($session->read('proc8')){
			$proc8 = $session->read('proc8');
		}else{
			$proc8 = false;
		}
		
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','proc6','proc7','proc8','estacc_id'));
	}
	
	public function termsConditions($id = null){
		
		
	}
	
	public function printInvoice( $id = null){
		
	}
	
	public function dashboard(){
		
	}
	
	public function home(){
		
	}
	
	
	
}
