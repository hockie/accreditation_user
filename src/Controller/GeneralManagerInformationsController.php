<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * GeneralManagerInformations Controller
 *
 * @property \App\Model\Table\GeneralManagerInformationsTable $GeneralManagerInformations
 *
 * @method \App\Model\Entity\GeneralManagerInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralManagerInformationsController extends AppController
{
	public function initialize(){
		parent::initialize();
		$this->loadModel('Nationalities');
	}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nationalities', 'Users']
        ];
        $generalManagerInformations = $this->paginate($this->GeneralManagerInformations);

        $this->set(compact('generalManagerInformations'));
    }

    /**
     * View method
     *
     * @param string|null $id General Manager Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalManagerInformation = $this->GeneralManagerInformations->get($id, [
            'contain' => ['Nationalities', 'Users', 'EstablishmentAccounts']
        ]);

        $this->set('generalManagerInformation', $generalManagerInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalManagerInformation = $this->GeneralManagerInformations->newEntity();
        if ($this->request->is('post')) {
            $generalManagerInformation = $this->GeneralManagerInformations->patchEntity($generalManagerInformation, $this->request->getData());
            if ($this->GeneralManagerInformations->save($generalManagerInformation)) {
                $this->Flash->success(__('The general manager information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general manager information could not be saved. Please, try again.'));
        }
        $nationalities = $this->GeneralManagerInformations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->GeneralManagerInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('generalManagerInformation', 'nationalities', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Manager Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalManagerInformation = $this->GeneralManagerInformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalManagerInformation = $this->GeneralManagerInformations->patchEntity($generalManagerInformation, $this->request->getData());
            if ($this->GeneralManagerInformations->save($generalManagerInformation)) {
                $this->Flash->success(__('The general manager information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general manager information could not be saved. Please, try again.'));
        }
        $nationalities = $this->GeneralManagerInformations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->GeneralManagerInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('generalManagerInformation', 'nationalities', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Manager Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalManagerInformation = $this->GeneralManagerInformations->get($id);
        if ($this->GeneralManagerInformations->delete($generalManagerInformation)) {
            $this->Flash->success(__('The general manager information has been deleted.'));
        } else {
            $this->Flash->error(__('The general manager information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	/**
     * custom Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addManager($estacc_id = null)
    {
		
		//request new session 
		//read session
		$this->sessionHouse($estacc_id);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccount = $establishmentAccountsTable->get($estacc_id);		
     
		
        $generalManagerInformation = $this->GeneralManagerInformations->newEntity();
		
        if ($this->request->is('post')) {
            $generalManagerInformation = $this->GeneralManagerInformations->patchEntity($generalManagerInformation, $this->request->getData());
            if ($this->GeneralManagerInformations->save($generalManagerInformation)) {
				
				//update establishment Accounts
				$establishmentAccount->general_manager_information_id = $generalManagerInformation['id'];
				$establishmentAccountsTable->save($establishmentAccount);				
				$session = $this->getRequest()->getSession();
				$session->write('proc7','checked'); //write new session	
				
                $this->Flash->success(__('The general manager information has been saved. Please continue to complete registration.'));

                return $this->redirect(['controller'=>'AuthorizedRepresentatives','action' => 'addRepresentative',$estacc_id]);
            }
            $this->Flash->error(__('The general manager information could not be saved. Please, try again.'));
        }
		
        $nationalities = $this->GeneralManagerInformations->Nationalities->find('list',['order'=>'name'])->toArray();
		$this->set('nationalities',$nationalities);
        $users = $this->GeneralManagerInformations->Users->find('list', ['limit' => 200]);
        $this->set(compact('generalManagerInformation', 'users'));
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
		
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','proc6','proc7','estacc_id'));
	}
}
