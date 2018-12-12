<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OwnershipInformations Controller
 *
 *
 * @method \App\Model\Entity\OwnershipInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OwnershipInformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ownershipInformations = $this->paginate($this->OwnershipInformations);

        $this->set(compact('ownershipInformations'));
    }

    /**
     * View method
     *
     * @param string|null $id Ownership Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ownershipInformation = $this->OwnershipInformations->get($id, [
            'contain' => []
        ]);

        $this->set('ownershipInformation', $ownershipInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownershipInformation = $this->OwnershipInformations->newEntity();
        if ($this->request->is('post')) {
            $ownershipInformation = $this->OwnershipInformations->patchEntity($ownershipInformation, $this->request->getData());
            if ($this->OwnershipInformations->save($ownershipInformation)) {
                $this->Flash->success(__('The ownership information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ownership information could not be saved. Please, try again.'));
        }
        $this->set(compact('ownershipInformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ownership Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownershipInformation = $this->OwnershipInformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ownershipInformation = $this->OwnershipInformations->patchEntity($ownershipInformation, $this->request->getData());
            if ($this->OwnershipInformations->save($ownershipInformation)) {
                $this->Flash->success(__('The ownership information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ownership information could not be saved. Please, try again.'));
        }
        $this->set(compact('ownershipInformation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ownership Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ownershipInformation = $this->OwnershipInformations->get($id);
        if ($this->OwnershipInformations->delete($ownershipInformation)) {
            $this->Flash->success(__('The ownership information has been deleted.'));
        } else {
            $this->Flash->error(__('The ownership information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
