<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * SecPermits Controller
 *
 * @property \App\Model\Table\SecPermitsTable $SecPermits
 *
 * @method \App\Model\Entity\SecPermit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SecPermitsController extends AppController
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
        $secPermits = $this->paginate($this->SecPermits);

        $this->set(compact('secPermits'));
    }

    /**
     * View method
     *
     * @param string|null $id Sec Permit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secPermit = $this->SecPermits->get($id, [
            'contain' => ['Users', 'EstablishmentAccounts']
        ]);

        $this->set('secPermit', $secPermit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secPermit = $this->SecPermits->newEntity();
        if ($this->request->is('post')) {
            $secPermit = $this->SecPermits->patchEntity($secPermit, $this->request->getData());
            if ($this->SecPermits->save($secPermit)) {
                $this->Flash->success(__('The sec permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sec permit could not be saved. Please, try again.'));
        }
        $users = $this->SecPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('secPermit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sec Permit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secPermit = $this->SecPermits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secPermit = $this->SecPermits->patchEntity($secPermit, $this->request->getData());
            if ($this->SecPermits->save($secPermit)) {
                $this->Flash->success(__('The sec permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sec permit could not be saved. Please, try again.'));
        }
        $users = $this->SecPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('secPermit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sec Permit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secPermit = $this->SecPermits->get($id);
        if ($this->SecPermits->delete($secPermit)) {
            $this->Flash->success(__('The sec permit has been deleted.'));
        } else {
            $this->Flash->error(__('The sec permit could not be deleted. Please, try again.'));
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
        $secPermit = $this->SecPermits->newEntity();
		
        if ($this->request->is('post')) {
            $secPermit = $this->SecPermits->patchEntity($secPermit, $this->request->getData());
            if ($this->SecPermits->save($secPermit)) {
				
				//update establishment Accounts
				$establishmentAccount->sec_permit_id = $secPermit['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc6','checked'); //write new session	
				
                $this->Flash->success(__('The SEC Permit has been saved. Please continue to complete registration.'));

				//$typeoforg = $establishmentAccount['type_of_org'];
				//$this->permitRoute($typeoforg,$estacc_id);
				return $this->redirect(['controller'=>'GeneralManagerInformations','action' => 'addManager',$estacc_id]);
            }
            $this->Flash->error(__('The SEC Permit could not be saved. Please, try again.'));
        }
      //  $establishments = $this->SecPermits->Establishments->find('list', ['limit' => 200]);
        $users = $this->SecPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('secPermit', 'users'));
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
