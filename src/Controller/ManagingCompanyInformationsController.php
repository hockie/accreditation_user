<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * ManagingCompanyInformations Controller
 *
 * @property \App\Model\Table\ManagingCompanyInformationsTable $ManagingCompanyInformations
 *
 * @method \App\Model\Entity\ManagingCompanyInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ManagingCompanyInformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'ZipCodes', 'Users']
        ];
        $managingCompanyInformations = $this->paginate($this->ManagingCompanyInformations);

        $this->set(compact('managingCompanyInformations'));
    }

    /**
     * View method
     *
     * @param string|null $id Managing Company Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $managingCompanyInformation = $this->ManagingCompanyInformations->get($id, [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'ZipCodes', 'Users', 'EstablishmentAccounts']
        ]);

        $this->set('managingCompanyInformation', $managingCompanyInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $managingCompanyInformation = $this->ManagingCompanyInformations->newEntity();
        if ($this->request->is('post')) {
            $managingCompanyInformation = $this->ManagingCompanyInformations->patchEntity($managingCompanyInformation, $this->request->getData());
            if ($this->ManagingCompanyInformations->save($managingCompanyInformation)) {
                $this->Flash->success(__('The managing company information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The managing company information could not be saved. Please, try again.'));
        }
        $regions = $this->ManagingCompanyInformations->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->ManagingCompanyInformations->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->ManagingCompanyInformations->MunicipalityCities->find('list', ['limit' => 200]);
        $zipCodes = $this->ManagingCompanyInformations->ZipCodes->find('list', ['limit' => 200]);
        $users = $this->ManagingCompanyInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('managingCompanyInformation', 'regions', 'districtProvinces', 'municipalityCities', 'zipCodes', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Managing Company Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $managingCompanyInformation = $this->ManagingCompanyInformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $managingCompanyInformation = $this->ManagingCompanyInformations->patchEntity($managingCompanyInformation, $this->request->getData());
            if ($this->ManagingCompanyInformations->save($managingCompanyInformation)) {
                $this->Flash->success(__('The managing company information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The managing company information could not be saved. Please, try again.'));
        }
        $regions = $this->ManagingCompanyInformations->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->ManagingCompanyInformations->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->ManagingCompanyInformations->MunicipalityCities->find('list', ['limit' => 200]);
        $zipCodes = $this->ManagingCompanyInformations->ZipCodes->find('list', ['limit' => 200]);
        $users = $this->ManagingCompanyInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('managingCompanyInformation', 'regions', 'districtProvinces', 'municipalityCities', 'zipCodes', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Managing Company Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $managingCompanyInformation = $this->ManagingCompanyInformations->get($id);
        if ($this->ManagingCompanyInformations->delete($managingCompanyInformation)) {
            $this->Flash->success(__('The managing company information has been deleted.'));
        } else {
            $this->Flash->error(__('The managing company information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addManagingCompany($estacc_id = null)
    {
		//request new session 
		//read session
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);
		
        $managingCompanyInformation = $this->ManagingCompanyInformations->newEntity();
       if ($this->request->is('post')) {
            $managingCompanyInformation = $this->ManagingCompanyInformations->patchEntity($managingCompanyInformation, $this->request->getData());
            if ($this->ManagingCompanyInformations->save($managingCompanyInformation)) {
				
				//update establishment Accounts
				$establishmentAccount->managing_company_information_id = $managingCompanyInformation['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc5','checked'); //write new session	
				
                $this->Flash->success(__('The managing company information has been saved. Please continue to complete registration.'));
				
                return $this->redirect(['controller'=>'MayorPermits','action' => 'addPermit',$estacc_id]);
            }
			$this->Flash->error(__('The managing companys information could not be saved. Please, try again.'));
		//	debug($this->Issue->validationErrors);
			//debug($managingCompanyInformation->errors());
           
        }
		
        $regions = $this->ManagingCompanyInformations->Regions->find('list', ['limit' => 200]);
       // $districtProvinces = $this->ManagingCompanyInformations->DistrictProvinces->find('list', ['limit' => 200]);
      //  $municipalityCities = $this->ManagingCompanyInformations->MunicipalityCities->find('list', ['limit' => 200]);
     //   $zipCodes = $this->ManagingCompanyInformations->ZipCodes->find('list', ['limit' => 200]);
        $users = $this->ManagingCompanyInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('managingCompanyInformation', 'regions',  'users'));
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
	
	
}
