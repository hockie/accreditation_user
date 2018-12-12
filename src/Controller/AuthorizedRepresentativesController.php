<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * AuthorizedRepresentatives Controller
 *
 * @property \App\Model\Table\AuthorizedRepresentativesTable $AuthorizedRepresentatives
 *
 * @method \App\Model\Entity\AuthorizedRepresentative[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorizedRepresentativesController extends AppController
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
        $authorizedRepresentatives = $this->paginate($this->AuthorizedRepresentatives);

        $this->set(compact('authorizedRepresentatives'));
    }

    /**
     * View method
     *
     * @param string|null $id Authorized Representative id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorizedRepresentative = $this->AuthorizedRepresentatives->get($id, [
            'contain' => ['Users', 'EstablishmentAccounts']
        ]);

        $this->set('authorizedRepresentative', $authorizedRepresentative);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorizedRepresentative = $this->AuthorizedRepresentatives->newEntity();
        if ($this->request->is('post')) {
            $authorizedRepresentative = $this->AuthorizedRepresentatives->patchEntity($authorizedRepresentative, $this->request->getData());
            if ($this->AuthorizedRepresentatives->save($authorizedRepresentative)) {
                $this->Flash->success(__('The authorized representative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized representative could not be saved. Please, try again.'));
        }
        $users = $this->AuthorizedRepresentatives->Users->find('list', ['limit' => 200]);
        $this->set(compact('authorizedRepresentative', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authorized Representative id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorizedRepresentative = $this->AuthorizedRepresentatives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorizedRepresentative = $this->AuthorizedRepresentatives->patchEntity($authorizedRepresentative, $this->request->getData());
            if ($this->AuthorizedRepresentatives->save($authorizedRepresentative)) {
                $this->Flash->success(__('The authorized representative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized representative could not be saved. Please, try again.'));
        }
        $users = $this->AuthorizedRepresentatives->Users->find('list', ['limit' => 200]);
        $this->set(compact('authorizedRepresentative', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authorized Representative id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorizedRepresentative = $this->AuthorizedRepresentatives->get($id);
        if ($this->AuthorizedRepresentatives->delete($authorizedRepresentative)) {
            $this->Flash->success(__('The authorized representative has been deleted.'));
        } else {
            $this->Flash->error(__('The authorized representative could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addRepresentative($estacc_id = null)
    {
			//request new session 
		//read session
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);		
		
        $authorizedRepresentative = $this->AuthorizedRepresentatives->newEntity();
        if ($this->request->is('post')) {
            $authorizedRepresentative = $this->AuthorizedRepresentatives->patchEntity($authorizedRepresentative, $this->request->getData());
            if ($this->AuthorizedRepresentatives->save($authorizedRepresentative)) {
				
				//update establishment Accounts
				$establishmentAccount->authorized_representative_id = $authorizedRepresentative['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc8','checked'); //write new session	
				
                $this->Flash->success(__('The Authorized Representative has been saved. Please continue to complete registration.'));

                return $this->redirect(['controller'=>'Pages','action' => 'review_info',$estacc_id]);
            }
            $this->Flash->error(__('The authorized representative could not be saved. Please, try again.'));
        }
        $users = $this->AuthorizedRepresentatives->Users->find('list', ['limit' => 200]);
        $this->set(compact('authorizedRepresentative', 'users'));
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
}
