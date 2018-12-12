<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CdaPermits Controller
 *
 * @property \App\Model\Table\CdaPermitsTable $CdaPermits
 *
 * @method \App\Model\Entity\CdaPermit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CdaPermitsController extends AppController
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
        $cdaPermits = $this->paginate($this->CdaPermits);

        $this->set(compact('cdaPermits'));
    }

    /**
     * View method
     *
     * @param string|null $id Cda Permit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cdaPermit = $this->CdaPermits->get($id, [
            'contain' => ['Users', 'EstablishmentAccounts']
        ]);

        $this->set('cdaPermit', $cdaPermit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cdaPermit = $this->CdaPermits->newEntity();
        if ($this->request->is('post')) {
            $cdaPermit = $this->CdaPermits->patchEntity($cdaPermit, $this->request->getData());
            if ($this->CdaPermits->save($cdaPermit)) {
                $this->Flash->success(__('The cda permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cda permit could not be saved. Please, try again.'));
        }
        $users = $this->CdaPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('cdaPermit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cda Permit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cdaPermit = $this->CdaPermits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cdaPermit = $this->CdaPermits->patchEntity($cdaPermit, $this->request->getData());
            if ($this->CdaPermits->save($cdaPermit)) {
                $this->Flash->success(__('The cda permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cda permit could not be saved. Please, try again.'));
        }
        $users = $this->CdaPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('cdaPermit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cda Permit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cdaPermit = $this->CdaPermits->get($id);
        if ($this->CdaPermits->delete($cdaPermit)) {
            $this->Flash->success(__('The cda permit has been deleted.'));
        } else {
            $this->Flash->error(__('The cda permit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addPermit($estacc_id = null)
    {
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);
		
        $cdaPermit = $this->CdaPermits->newEntity();
        if ($this->request->is('post')) {
            $cdaPermit = $this->CdaPermits->patchEntity($cdaPermit, $this->request->getData());
            if ($this->CdaPermits->save($cdaPermit)) {
				
				//update establishment Accounts
				$establishmentAccount->managing_company_information_id = $mayorPermit['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc7','checked'); //write new session	
				
				
                $this->Flash->success(__('The CDA permit has been saved. Please continue to complete registration.'));

                return $this->redirect(['controller'=>'GeneralManagerInformations','action' => 'addManager',$estacc_id]);
            }
            $this->Flash->error(__('The CDA permit could not be saved. Please, try again.'));
        }
        $users = $this->CdaPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('cdaPermit', 'users'));
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
