<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * EstablishmentAccounts Controller
 *
 * @property \App\Model\Table\EstablishmentAccountsTable $EstablishmentAccounts
 *
 * @method \App\Model\Entity\EstablishmentAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablishmentAccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EstablishmentDetails', 'OwnerInformations', 'ManagingCompanyInformations', 'GeneralManagerInformations', 'Capitalizations', 'AuthorizedRepresentatives', 'EntityTypes', 'EntityCategories', 'EntityCategoryTypes', 'MayorPermits', 'DtiPermits', 'SecPermits', 'CdaPermits']
        ];
        $establishmentAccounts = $this->paginate($this->EstablishmentAccounts);

        $this->set(compact('establishmentAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentAccount = $this->EstablishmentAccounts->get($id, [
            'contain' => ['EstablishmentDetails', 'OwnerInformations', 'ManagingCompanyInformations', 'GeneralManagerInformations', 'Capitalizations', 'AuthorizedRepresentatives', 'EntityTypes', 'EntityCategories', 'EntityCategoryTypes', 'MayorPermits', 'DtiPermits', 'SecPermits', 'CdaPermits']
        ]);

        $this->set('establishmentAccount', $establishmentAccount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentAccount = $this->EstablishmentAccounts->newEntity();
        if ($this->request->is('post')) {
            $establishmentAccount = $this->EstablishmentAccounts->patchEntity($establishmentAccount, $this->request->getData());
            if ($this->EstablishmentAccounts->save($establishmentAccount)) {
                $this->Flash->success(__('The establishment account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment account could not be saved. Please, try again.'));
        }
        $establishmentDetails = $this->EstablishmentAccounts->EstablishmentDetails->find('list', ['limit' => 200]);
        $ownerInformations = $this->EstablishmentAccounts->OwnerInformations->find('list', ['limit' => 200]);
        $managingCompanyInformations = $this->EstablishmentAccounts->ManagingCompanyInformations->find('list', ['limit' => 200]);
        $generalManagerInformations = $this->EstablishmentAccounts->GeneralManagerInformations->find('list', ['limit' => 200]);
        $capitalizations = $this->EstablishmentAccounts->Capitalizations->find('list', ['limit' => 200]);
        $authorizedRepresentatives = $this->EstablishmentAccounts->AuthorizedRepresentatives->find('list', ['limit' => 200]);
        $entityTypes = $this->EstablishmentAccounts->EntityTypes->find('list', ['limit' => 200]);
        $entityCategories = $this->EstablishmentAccounts->EntityCategories->find('list', ['limit' => 200]);
        $entityCategoryTypes = $this->EstablishmentAccounts->EntityCategoryTypes->find('list', ['limit' => 200]);
        $mayorPermits = $this->EstablishmentAccounts->MayorPermits->find('list', ['limit' => 200]);
        $dtiPermits = $this->EstablishmentAccounts->DtiPermits->find('list', ['limit' => 200]);
        $secPermits = $this->EstablishmentAccounts->SecPermits->find('list', ['limit' => 200]);
        $cdaPermits = $this->EstablishmentAccounts->CdaPermits->find('list', ['limit' => 200]);
        $this->set(compact('establishmentAccount', 'establishmentDetails', 'ownerInformations', 'managingCompanyInformations', 'generalManagerInformations', 'capitalizations', 'authorizedRepresentatives', 'entityTypes', 'entityCategories', 'entityCategoryTypes', 'mayorPermits', 'dtiPermits', 'secPermits', 'cdaPermits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentAccount = $this->EstablishmentAccounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentAccount = $this->EstablishmentAccounts->patchEntity($establishmentAccount, $this->request->getData());
            if ($this->EstablishmentAccounts->save($establishmentAccount)) {
                $this->Flash->success(__('The establishment account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment account could not be saved. Please, try again.'));
        }
        $establishmentDetails = $this->EstablishmentAccounts->EstablishmentDetails->find('list', ['limit' => 200]);
        $ownerInformations = $this->EstablishmentAccounts->OwnerInformations->find('list', ['limit' => 200]);
        $managingCompanyInformations = $this->EstablishmentAccounts->ManagingCompanyInformations->find('list', ['limit' => 200]);
        $generalManagerInformations = $this->EstablishmentAccounts->GeneralManagerInformations->find('list', ['limit' => 200]);
        $capitalizations = $this->EstablishmentAccounts->Capitalizations->find('list', ['limit' => 200]);
        $authorizedRepresentatives = $this->EstablishmentAccounts->AuthorizedRepresentatives->find('list', ['limit' => 200]);
        $entityTypes = $this->EstablishmentAccounts->EntityTypes->find('list', ['limit' => 200]);
        $entityCategories = $this->EstablishmentAccounts->EntityCategories->find('list', ['limit' => 200]);
        $entityCategoryTypes = $this->EstablishmentAccounts->EntityCategoryTypes->find('list', ['limit' => 200]);
        $mayorPermits = $this->EstablishmentAccounts->MayorPermits->find('list', ['limit' => 200]);
        $dtiPermits = $this->EstablishmentAccounts->DtiPermits->find('list', ['limit' => 200]);
        $secPermits = $this->EstablishmentAccounts->SecPermits->find('list', ['limit' => 200]);
        $cdaPermits = $this->EstablishmentAccounts->CdaPermits->find('list', ['limit' => 200]);
        $this->set(compact('establishmentAccount', 'establishmentDetails', 'ownerInformations', 'managingCompanyInformations', 'generalManagerInformations', 'capitalizations', 'authorizedRepresentatives', 'entityTypes', 'entityCategories', 'entityCategoryTypes', 'mayorPermits', 'dtiPermits', 'secPermits', 'cdaPermits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentAccount = $this->EstablishmentAccounts->get($id);
        if ($this->EstablishmentAccounts->delete($establishmentAccount)) {
            $this->Flash->success(__('The establishment account has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function establishmentRegister($entityCategoryType = null ,$entityCategories = null,$entityTypes = null)
	{
		$session = $this->request->getSession();
		
		if(is_null($entityCategoryType) || is_null($entityCategories) || is_null($entityTypes)){
			
			/*$entityCategoryType = $session->read('entityCategoryTypeId');
			$entityCategories = $session->read('entityCategoryId');
			$entityTypes = $session->read('entityTypeId');*/
			$estaccId = $session->read('estacc_id');
			if($estaccId==null){
			 $this->Flash->error(__('Please select Entity Category and Entity Types.'));
			 return $this->redirect(['controller'=>'EntityCategoryTypes','action' => 'select_category_type']);
			}
			 
		 }
		
		
		//Checked sessions
		//request new session 
		//$session = $this->request->session();
		$this->sessionHouse();		
		
		$establishmentAccount = $this->EstablishmentAccounts->newEntity();
		//set entity category type id, entity category, entity type
			$this->request->data['entity_category_type_id'] = $entityCategoryType;
			$this->request->data['entity_category_id'] = $entityCategories;
			$this->request->data['entity_types_id'] = $entityTypes;
			$this->request->data['auth_key'] = $this->generateAuthNo();
		//load account details
		$est_acc_id = $session->read('estacc_id');
		if(!empty($est_acc_id )){
			$establishmentAccount = $this->EstablishmentAccounts->get($est_acc_id, [
			'contain' => []
			]);
		}
		
				
		 if ($this->request->is(['patch', 'post', 'put'])) {
			
            $establishmentAccount = $this->EstablishmentAccounts->patchEntity($establishmentAccount, $this->request->getData());			
			$establishmentAccount->status = 'pending registration';
		
            if ($this->EstablishmentAccounts->save($establishmentAccount)) {
				//Process 2 SESSION
				//request new session
				//read session
				$session = $this->getRequest()->getSession();
				$session->write('proc2','checked'); //write new session	
				$session->write('estacc_id',$establishmentAccount['id']);
				
				
				$this->Flash->success(__('Establishment Account has been created. Please continue to complete the registration.'));

                return $this->redirect(['controller'=>'EstablishmentDetails','action' => 'add_details',$establishmentAccount['id']]);
            }
            $this->Flash->error(__('The establishment account could not be saved. Please, try again.'));
        }		
		
		$entityTypes = $this->EstablishmentAccounts->EntityTypes->find('list',[
			'order'=>['EntityTypes.name'=>'asc']
		]);
		
		$regions = $this->EstablishmentAccounts->EstablishmentDetails->Regions->find('list');
		$districtProvinces = $this->EstablishmentAccounts->EstablishmentDetails->DistrictProvinces->find('list');
		//$municipalityCities = $this->EstablishmentAccounts->EstablishmentDetails->DistrictProvinces->MunicipalityCities->find('list');
		$this->set(compact('entityTypes','establishmentAccount','regions','districtProvinces'));
		
		$establishmentDetails = $this->EstablishmentAccounts->EstablishmentDetails->find('list', ['limit' => 200]);
        $ownerInformations = $this->EstablishmentAccounts->OwnerInformations->find('list', ['limit' => 200]);
        $managingCompanyInformations = $this->EstablishmentAccounts->ManagingCompanyInformations->find('list', ['limit' => 200]);
        $generalManagerInformations = $this->EstablishmentAccounts->GeneralManagerInformations->find('list', ['limit' => 200]);
        $capitalizations = $this->EstablishmentAccounts->Capitalizations->find('list', ['limit' => 200]);
        $authorizedRepresentatives = $this->EstablishmentAccounts->AuthorizedRepresentatives->find('list', ['limit' => 200]);
        $entityTypes = $this->EstablishmentAccounts->EntityTypes->find('list', ['limit' => 200]);
        $entityCategories = $this->EstablishmentAccounts->EntityCategories->find('list', ['limit' => 200]);
        $entityCategoryTypes = $this->EstablishmentAccounts->EntityCategoryTypes->find('list', ['limit' => 200]);
        $this->set(compact('establishmentAccount', 'establishmentDetails', 'ownerInformations', 'managingCompanyInformations', 'generalManagerInformations', 'capitalizations', 'authorizedRepresentatives', 'entityTypes', 'entityCategories', 'entityCategoryTypes'));
		
		
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
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','estacc_id'));
	}
	
	public function emailCheck()
	{
		/*$this->autoRender = false;
		$this->viewBuilder()->layout('false');*/
		if ($this->request->is(['post'])) {
			$email =$this->request->data('email');                                                 
			$query = $this->EstablishmentAccounts->find()->select(['EstablishmentAccounts.id','EstablishmentAccounts.email'])->where(['EstablishmentAccounts.email '=>$email])->count();
			$this->set(compact('query'));		
		}		
	}
	
	public function tinCheck(){
		if ($this->request->is(['post'])) {
			$tin =$this->request->data('tin');                                                 
			$query = $this->EstablishmentAccounts->find()->select(['EstablishmentAccounts.id','EstablishmentAccounts.tin'])->where(['EstablishmentAccounts.tin '=>$tin])->count();
			$this->set(compact('query'));		
		}
	}
}
