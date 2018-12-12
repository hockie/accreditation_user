<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MunicipalityCities Controller
 *
 * @property \App\Model\Table\MunicipalityCitiesTable $MunicipalityCities
 *
 * @method \App\Model\Entity\MunicipalityCity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MunicipalityCitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DistrictProvinces']
        ];
        $municipalityCities = $this->paginate($this->MunicipalityCities);

        $this->set(compact('municipalityCities'));
    }

    /**
     * View method
     *
     * @param string|null $id Municipality City id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipalityCity = $this->MunicipalityCities->get($id, [
            'contain' => ['DistrictProvinces', 'EstablishmentDetails', 'OwnerInformations', 'ZipCodes']
        ]);

        $this->set('municipalityCity', $municipalityCity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipalityCity = $this->MunicipalityCities->newEntity();
        if ($this->request->is('post')) {
            $municipalityCity = $this->MunicipalityCities->patchEntity($municipalityCity, $this->request->getData());
            if ($this->MunicipalityCities->save($municipalityCity)) {
                $this->Flash->success(__('The municipality city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipality city could not be saved. Please, try again.'));
        }
        $districtProvinces = $this->MunicipalityCities->DistrictProvinces->find('list', ['limit' => 200]);
        $this->set(compact('municipalityCity', 'districtProvinces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipality City id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipalityCity = $this->MunicipalityCities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipalityCity = $this->MunicipalityCities->patchEntity($municipalityCity, $this->request->getData());
            if ($this->MunicipalityCities->save($municipalityCity)) {
                $this->Flash->success(__('The municipality city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipality city could not be saved. Please, try again.'));
        }
        $districtProvinces = $this->MunicipalityCities->DistrictProvinces->find('list', ['limit' => 200]);
        $this->set(compact('municipalityCity', 'districtProvinces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipality City id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipalityCity = $this->MunicipalityCities->get($id);
        if ($this->MunicipalityCities->delete($municipalityCity)) {
            $this->Flash->success(__('The municipality city has been deleted.'));
        } else {
            $this->Flash->error(__('The municipality city could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
