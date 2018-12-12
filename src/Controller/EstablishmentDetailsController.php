<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * EstablishmentDetails Controller
 *
 * @property \App\Model\Table\EstablishmentDetailsTable $EstablishmentDetails
 *
 * @method \App\Model\Entity\EstablishmentDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablishmentDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'ZipCodes']
        ];
        $establishmentDetails = $this->paginate($this->EstablishmentDetails);

        $this->set(compact('establishmentDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentDetail = $this->EstablishmentDetails->get($id, [
            'contain' => ['Regions', 'DistrictProvinces', 'MunicipalityCities', 'ZipCodes', 'EstablishmentAccounts']
        ]);

        $this->set('establishmentDetail', $establishmentDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentDetail = $this->EstablishmentDetails->newEntity();
        if ($this->request->is('post')) {
            $establishmentDetail = $this->EstablishmentDetails->patchEntity($establishmentDetail, $this->request->getData());
            if ($this->EstablishmentDetails->save($establishmentDetail)) {
                $this->Flash->success(__('The establishment detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment detail could not be saved. Please, try again.'));
        }
        $regions = $this->EstablishmentDetails->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->EstablishmentDetails->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->EstablishmentDetails->MunicipalityCities->find('list', ['limit' => 200]);
        $zipCodes = $this->EstablishmentDetails->ZipCodes->find('list', ['limit' => 200]);
        $this->set(compact('establishmentDetail', 'regions', 'districtProvinces', 'municipalityCities', 'zipCodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentDetail = $this->EstablishmentDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentDetail = $this->EstablishmentDetails->patchEntity($establishmentDetail, $this->request->getData());
            if ($this->EstablishmentDetails->save($establishmentDetail)) {
                $this->Flash->success(__('The establishment detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment detail could not be saved. Please, try again.'));
        }
        $regions = $this->EstablishmentDetails->Regions->find('list', ['limit' => 200]);
        $districtProvinces = $this->EstablishmentDetails->DistrictProvinces->find('list', ['limit' => 200]);
        $municipalityCities = $this->EstablishmentDetails->MunicipalityCities->find('list', ['limit' => 200]);
        $zipCodes = $this->EstablishmentDetails->ZipCodes->find('list', ['limit' => 200]);
        $this->set(compact('establishmentDetail', 'regions', 'districtProvinces', 'municipalityCities', 'zipCodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentDetail = $this->EstablishmentDetails->get($id);
        if ($this->EstablishmentDetails->delete($establishmentDetail)) {
            $this->Flash->success(__('The establishment detail has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addDetails($estacc_id = null)
    {
		
		$this->sessionHouse($estacc_id);
		$session = $this->getRequest()->getSession();
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);
		
        $establishmentDetail = $this->EstablishmentDetails->newEntity();
        if ($this->request->is('post')) {
	
            $establishmentDetail = $this->EstablishmentDetails->patchEntity($establishmentDetail, $this->request->getData());
            if ($this->EstablishmentDetails->save($establishmentDetail)) {
				
				//update establishment Accounts
				$establishmentAccount->establishment_detail_id = $establishmentDetail['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				
				$session->write('proc3','checked'); //write new session	
				
                $this->Flash->success(__('The establishment details has been saved. Please continue to complete registration.'));

                return $this->redirect(['controller'=>'OwnerInformations','action' => 'add_owners',$estacc_id]);
            }
			
			
            $this->Flash->error(__('The establishment detail could not be saveds. Please, try again.|'.$establishmentDetail));
        }
        $regions = $this->EstablishmentDetails->Regions->find('list', ['limit' => 200]);
       // $districtProvinces = $this->EstablishmentDetails->DistrictProvinces->find('list', ['limit' => 200]);
       // $municipalityCities = $this->EstablishmentDetails->MunicipalityCities->find('list', ['limit' => 200]);
        //$zipCodes = $this->EstablishmentDetails->ZipCodes->find('list', ['limit' => 200]);
        $this->set(compact('establishmentDetail', 'regions' ));
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
