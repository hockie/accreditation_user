<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * MayorPermits Controller
 *
 * @property \App\Model\Table\MayorPermitsTable $MayorPermits
 *
 * @method \App\Model\Entity\MayorPermit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MayorPermitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $mayorPermits = $this->paginate($this->MayorPermits);

        $this->set(compact('mayorPermits'));
    }

    /**
     * View method
     *
     * @param string|null $id Mayor Permit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mayorPermit = $this->MayorPermits->get($id, [
            'contain' => ['Users', 'EstablishmentAccounts']
        ]);

        $this->set('mayorPermit', $mayorPermit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mayorPermit = $this->MayorPermits->newEntity();
        if ($this->request->is('post')) {
            $mayorPermit = $this->MayorPermits->patchEntity($mayorPermit, $this->request->getData());
            if ($this->MayorPermits->save($mayorPermit)) {
                $this->Flash->success(__('The mayor permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mayor permit could not be saved. Please, try again.'));
        }
        $users = $this->MayorPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('mayorPermit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mayor Permit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mayorPermit = $this->MayorPermits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mayorPermit = $this->MayorPermits->patchEntity($mayorPermit, $this->request->getData());
            if ($this->MayorPermits->save($mayorPermit)) {
                $this->Flash->success(__('The mayor permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mayor permit could not be saved. Please, try again.'));
        }
        $users = $this->MayorPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('mayorPermit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mayor Permit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mayorPermit = $this->MayorPermits->get($id);
        if ($this->MayorPermits->delete($mayorPermit)) {
            $this->Flash->success(__('The mayor permit has been deleted.'));
        } else {
            $this->Flash->error(__('The mayor permit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addPermit($estacc_id = null)
    {
		
		//request new session 
		//read session
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);		
        $mayorPermit = $this->MayorPermits->newEntity();
		
        if ($this->request->is('post')) {
            $mayorPermit = $this->MayorPermits->patchEntity($mayorPermit, $this->request->getData());
            if ($this->MayorPermits->save($mayorPermit)) {
				
				//update establishment Accounts
				$establishmentAccount->mayor_permit_id = $mayorPermit['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc6','checked'); //write new session	
				
				$typeoforg = $establishmentAccount['type_of_org'];
				
				$this->permitRoute($typeoforg,$estacc_id);				
            }else{
				$this->Flash->error(__('The mayor permit could not be saved. Please, try again.'));
			}
            
        }
      //  $establishments = $this->MayorPermits->Establishments->find('list', ['limit' => 200]);
        $users = $this->MayorPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('mayorPermit', 'users'));
    }
	
	public function permitRoute($typeoforg = null,$id = null){
		//1 single proprietor
		//2 Partnership
		//3 Corporation
		//4 Cooperative
		$this->Flash->success(__('The Mayor\'s Permit has been saved. Please continue to complete registration.'));
		if($typeoforg == 1){
			$this->redirect(['controller'=>'DtiPermits','action' => 'addPermit',$id]);
		}elseif($typeoforg == 2 || $typeoforg == 3){
			$this->redirect(['controller'=>'SecPermits','action' => 'addPermit',$id]);
		}elseif($typeoforg==4){
			$this->redirect(['controller'=>'CdaPermits','action' => 'addPermit',$id]);
		}else{
			$this->redirect(['controller'=>'MayorPermits','action' => 'addPermit',$id]);
		}
		
	}
	
	public function sessionHouse($id = null){
		
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
		
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','proc6','estacc_id'));
	}
}
