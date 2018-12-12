<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstablishmentAccount Controller
 *
 *
 * @method \App\Model\Entity\EstablishmentAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablishmentAccountController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $establishmentAccount = $this->paginate($this->EstablishmentAccount);

        $this->set(compact('establishmentAccount'));
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentAccount = $this->EstablishmentAccount->get($id, [
            'contain' => []
        ]);

        $this->set('establishmentAccount', $establishmentAccount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentAccount = $this->EstablishmentAccount->newEntity();
        if ($this->request->is('post')) {
            $establishmentAccount = $this->EstablishmentAccount->patchEntity($establishmentAccount, $this->request->getData());
            if ($this->EstablishmentAccount->save($establishmentAccount)) {
                $this->Flash->success(__('The establishment account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment account could not be saved. Please, try again.'));
        }
        $this->set(compact('establishmentAccount'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentAccount = $this->EstablishmentAccount->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentAccount = $this->EstablishmentAccount->patchEntity($establishmentAccount, $this->request->getData());
            if ($this->EstablishmentAccount->save($establishmentAccount)) {
                $this->Flash->success(__('The establishment account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment account could not be saved. Please, try again.'));
        }
        $this->set(compact('establishmentAccount'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentAccount = $this->EstablishmentAccount->get($id);
        if ($this->EstablishmentAccount->delete($establishmentAccount)) {
            $this->Flash->success(__('The establishment account has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
