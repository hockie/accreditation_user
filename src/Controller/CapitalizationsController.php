<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Capitalizations Controller
 *
 * @property \App\Model\Table\CapitalizationsTable $Capitalizations
 *
 * @method \App\Model\Entity\Capitalization[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CapitalizationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Establishments', 'Nationalities', 'Users']
        ];
        $capitalizations = $this->paginate($this->Capitalizations);

        $this->set(compact('capitalizations'));
    }

    /**
     * View method
     *
     * @param string|null $id Capitalization id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $capitalization = $this->Capitalizations->get($id, [
            'contain' => ['Establishments', 'Nationalities', 'Users', 'EstablishmentAccounts']
        ]);

        $this->set('capitalization', $capitalization);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $capitalization = $this->Capitalizations->newEntity();
        if ($this->request->is('post')) {
            $capitalization = $this->Capitalizations->patchEntity($capitalization, $this->request->getData());
            if ($this->Capitalizations->save($capitalization)) {
                $this->Flash->success(__('The capitalization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The capitalization could not be saved. Please, try again.'));
        }
        $establishments = $this->Capitalizations->Establishments->find('list', ['limit' => 200]);
        $nationalities = $this->Capitalizations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->Capitalizations->Users->find('list', ['limit' => 200]);
        $this->set(compact('capitalization', 'establishments', 'nationalities', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Capitalization id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $capitalization = $this->Capitalizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $capitalization = $this->Capitalizations->patchEntity($capitalization, $this->request->getData());
            if ($this->Capitalizations->save($capitalization)) {
                $this->Flash->success(__('The capitalization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The capitalization could not be saved. Please, try again.'));
        }
        $establishments = $this->Capitalizations->Establishments->find('list', ['limit' => 200]);
        $nationalities = $this->Capitalizations->Nationalities->find('list', ['limit' => 200]);
        $users = $this->Capitalizations->Users->find('list', ['limit' => 200]);
        $this->set(compact('capitalization', 'establishments', 'nationalities', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Capitalization id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $capitalization = $this->Capitalizations->get($id);
        if ($this->Capitalizations->delete($capitalization)) {
            $this->Flash->success(__('The capitalization has been deleted.'));
        } else {
            $this->Flash->error(__('The capitalization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
