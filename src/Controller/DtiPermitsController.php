<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * DtiPermits Controller
 *
 * @property \App\Model\Table\DtiPermitsTable $DtiPermits
 *
 * @method \App\Model\Entity\DtiPermit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtiPermitsController extends AppController
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
        $dtiPermits = $this->paginate($this->DtiPermits);

        $this->set(compact('dtiPermits'));
    }

    /**
     * View method
     *
     * @param string|null $id Dti Permit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtiPermit = $this->DtiPermits->get($id, [
            'contain' => ['Users', 'EstablishmentAccounts']
        ]);

        $this->set('dtiPermit', $dtiPermit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtiPermit = $this->DtiPermits->newEntity();
        if ($this->request->is('post')) {
            $dtiPermit = $this->DtiPermits->patchEntity($dtiPermit, $this->request->getData());
            if ($this->DtiPermits->save($dtiPermit)) {
                $this->Flash->success(__('The dti permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dti permit could not be saved. Please, try again.'));
        }
        $users = $this->DtiPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('dtiPermit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dti Permit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtiPermit = $this->DtiPermits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtiPermit = $this->DtiPermits->patchEntity($dtiPermit, $this->request->getData());
            if ($this->DtiPermits->save($dtiPermit)) {
                $this->Flash->success(__('The dti permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dti permit could not be saved. Please, try again.'));
        }
        $users = $this->DtiPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('dtiPermit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dti Permit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtiPermit = $this->DtiPermits->get($id);
        if ($this->DtiPermits->delete($dtiPermit)) {
            $this->Flash->success(__('The dti permit has been deleted.'));
        } else {
            $this->Flash->error(__('The dti permit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addPermit($estacc_id = null)
    {
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);
		
        $dtiPermit = $this->DtiPermits->newEntity();
        if ($this->request->is('post')) {
            $dtiPermit = $this->DtiPermits->patchEntity($dtiPermit, $this->request->getData());
            if ($this->DtiPermits->save($dtiPermit)) {
				
				//update establishment Accounts
				$establishmentAccount->managing_company_information_id = $mayorPermit['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc7','checked'); //write new session	
				
				
                $this->Flash->success(__('The dti permit has been saved. Please continue to complete registration.'));

                return $this->redirect(['controller'=>'GeneralManagerInformations','action' => 'addManager',$estacc_id]);
            }
            $this->Flash->error(__('The dti permit could not be saved. Please, try again.'));
        }
        $users = $this->DtiPermits->Users->find('list', ['limit' => 200]);
        $this->set(compact('dtiPermit', 'users'));
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
