<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccountIdentifiers Controller
 *
 * @property \App\Model\Table\AccountIdentifiersTable $AccountIdentifiers
 *
 * @method \App\Model\Entity\AccountIdentifier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountIdentifiersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accountIdentifiers = $this->paginate($this->AccountIdentifiers);

        $this->set(compact('accountIdentifiers'));
    }

    /**
     * View method
     *
     * @param string|null $id Account Identifier id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountIdentifier = $this->AccountIdentifiers->get($id, [
            'contain' => ['EstablishmentAccounts']
        ]);

        $this->set('accountIdentifier', $accountIdentifier);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountIdentifier = $this->AccountIdentifiers->newEntity();
        if ($this->request->is('post')) {
            $accountIdentifier = $this->AccountIdentifiers->patchEntity($accountIdentifier, $this->request->getData());
            if ($this->AccountIdentifiers->save($accountIdentifier)) {
                $this->Flash->success(__('The account identifier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account identifier could not be saved. Please, try again.'));
        }
        $this->set(compact('accountIdentifier'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Identifier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountIdentifier = $this->AccountIdentifiers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountIdentifier = $this->AccountIdentifiers->patchEntity($accountIdentifier, $this->request->getData());
            if ($this->AccountIdentifiers->save($accountIdentifier)) {
                $this->Flash->success(__('The account identifier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account identifier could not be saved. Please, try again.'));
        }
        $this->set(compact('accountIdentifier'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Identifier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountIdentifier = $this->AccountIdentifiers->get($id);
        if ($this->AccountIdentifiers->delete($accountIdentifier)) {
            $this->Flash->success(__('The account identifier has been deleted.'));
        } else {
            $this->Flash->error(__('The account identifier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addAccountIdentifier(){
		$_SESSION['proc1'] = "checked";		
		 $accountIdentifier = $this->AccountIdentifiers->newEntity();
        if ($this->request->is('post')) {
            $accountIdentifier = $this->AccountIdentifiers->patchEntity($accountIdentifier, $this->request->getData());
            if ($this->AccountIdentifiers->save($accountIdentifier)) {
                $this->Flash->success(__('The account identifier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account identifier could not be saved. Please, try again.'));
        }
        $this->set(compact('accountIdentifier'));
	}
}
