<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * OwnerInformations Controller
 *
 * @property \App\Model\Table\OwnerInformationsTable $OwnerInformations
 *
 * @method \App\Model\Entity\OwnerInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OwnerInformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'Nationalities', 'Users', 'ZipCodes']
        ];
        $ownerInformations = $this->paginate($this->OwnerInformations);

        $this->set(compact('ownerInformations'));
    }

    /**
     * View method
     *
     * @param string|null $id Owner Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownerInformation = $this->OwnerInformations->get($id, [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'Nationalities', 'Users', 'ZipCodes', 'EstablishmentAccounts']
        ]);

        $this->set('ownerInformation', $ownerInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerInformation = $this->OwnerInformations->newEntity();
        if ($this->request->is('post')) {
            $ownerInformation = $this->OwnerInformations->patchEntity($ownerInformation, $this->request->getData());
            if ($this->OwnerInformations->save($ownerInformation)) {
                $this->Flash->success(__('The owner information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner information could not be saved. Please, try again.'));
        }
        $regions = $this->OwnerInformations->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->OwnerInformations->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->OwnerInformations->MunicipalityCities->find('list', ['limit' => 200]);
        $nationalities = $this->OwnerInformations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->OwnerInformations->Users->find('list', ['limit' => 200]);
        $zipCodes = $this->OwnerInformations->ZipCodes->find('list', ['limit' => 200]);
        $this->set(compact('ownerInformation', 'regions', 'districtProvinces', 'municipalityCities', 'nationalities', 'users', 'zipCodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerInformation = $this->OwnerInformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownerInformation = $this->OwnerInformations->patchEntity($ownerInformation, $this->request->getData());
            if ($this->OwnerInformations->save($ownerInformation)) {
                $this->Flash->success(__('The owner information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The owner information could not be saved. Please, try again.'));
        }
        $regions = $this->OwnerInformations->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->OwnerInformations->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->OwnerInformations->MunicipalityCities->find('list', ['limit' => 200]);
        $nationalities = $this->OwnerInformations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->OwnerInformations->Users->find('list', ['limit' => 200]);
        $zipCodes = $this->OwnerInformations->ZipCodes->find('list', ['limit' => 200]);
        $this->set(compact('ownerInformation', 'regions', 'districtProvinces', 'municipalityCities', 'nationalities', 'users', 'zipCodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownerInformation = $this->OwnerInformations->get($id);
        if ($this->OwnerInformations->delete($ownerInformation)) {
            $this->Flash->success(__('The owner information has been deleted.'));
        } else {
            $this->Flash->error(__('The owner information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addOwners( $estacc_id = null)
    {
		//request new session 
		//read session
		
		$this->sessionHouse($estacc_id);
		
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);
		
        $ownerInformation = $this->OwnerInformations->newEntity();
        if ($this->request->is('post')) {
            $ownerInformation = $this->OwnerInformations->patchEntity($ownerInformation, $this->request->getData());
            if ($this->OwnerInformations->save($ownerInformation)) {
			
				$session = $this->getRequest()->getSession();
				//update establishment Accounts
				$establishmentAccount->owner_information_id = $ownerInformation['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				
				$session->write('proc4','checked'); //write new session	
				
                $this->Flash->success(__('The owner information has been saved. Please continue to complete the registration.'));

                return $this->redirect(['controller'=>'ManagingCompanyInformations','action' => 'addManagingCompany',$estacc_id]);
            }
            $this->Flash->error(__('The owner information could not be saved. Please, try again.'));
        }
        $regions = $this->OwnerInformations->Regions->find('list', ['limit' => 200]);
       // $districtProvinces = $this->OwnerInformations->DistrictProvinces->find('list', ['limit' => 200]);
       // $municipalityCities = $this->OwnerInformations->MunicipalityCities->find('list', ['limit' => 200]);
        $zipCodes = $this->OwnerInformations->ZipCodes->find('list', ['limit' => 200]);
        $nationalities = $this->OwnerInformations->Nationalities->find('list', ['limit' => 200,'order'=>'name' ]);
        $this->set(compact('ownerInformation', 'regions', 'districtProvinces', 'municipalityCities', 'nationalities', 'establishments', 'users','zipCodes'));
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
	
	public function owners($id = null){
		
		
	}
}
