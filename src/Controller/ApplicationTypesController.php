<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ApplicationTypes Controller
 *
 * @property \App\Model\Table\ApplicationTypesTable $ApplicationTypes
 *
 * @method \App\Model\Entity\ApplicationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $applicationTypes = $this->paginate($this->ApplicationTypes);

        $this->set(compact('applicationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Application Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicationType = $this->ApplicationTypes->get($id, [
            'contain' => ['EstablishmentAccounts']
        ]);

        $this->set('applicationType', $applicationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicationType = $this->ApplicationTypes->newEntity();
        if ($this->request->is('post')) {
            $applicationType = $this->ApplicationTypes->patchEntity($applicationType, $this->request->getData());
            if ($this->ApplicationTypes->save($applicationType)) {
                $this->Flash->success(__('The application type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application type could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Application Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $applicationType = $this->ApplicationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationType = $this->ApplicationTypes->patchEntity($applicationType, $this->request->getData());
            if ($this->ApplicationTypes->save($applicationType)) {
                $this->Flash->success(__('The application type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application type could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Application Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $applicationType = $this->ApplicationTypes->get($id);
        if ($this->ApplicationTypes->delete($applicationType)) {
            $this->Flash->success(__('The application type has been deleted.'));
        } else {
            $this->Flash->error(__('The application type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
