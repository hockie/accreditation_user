<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DistrictProvinces Controller
 *
 * @property \App\Model\Table\DistrictProvincesTable $DistrictProvinces
 *
 * @method \App\Model\Entity\DistrictProvince[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistrictProvincesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions']
        ];
        $districtProvinces = $this->paginate($this->DistrictProvinces);

        $this->set(compact('districtProvinces'));
    }

    /**
     * View method
     *
     * @param string|null $id District Province id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $districtProvince = $this->DistrictProvinces->get($id, [
            'contain' => ['Regions', 'EstablishmentDetails', 'OwnerInformations']
        ]);

        $this->set('districtProvince', $districtProvince);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $districtProvince = $this->DistrictProvinces->newEntity();
        if ($this->request->is('post')) {
            $districtProvince = $this->DistrictProvinces->patchEntity($districtProvince, $this->request->getData());
            if ($this->DistrictProvinces->save($districtProvince)) {
                $this->Flash->success(__('The district province has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district province could not be saved. Please, try again.'));
        }
        $regions = $this->DistrictProvinces->Regions->find('list', ['limit' => 200]);
        $this->set(compact('districtProvince', 'regions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id District Province id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $districtProvince = $this->DistrictProvinces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $districtProvince = $this->DistrictProvinces->patchEntity($districtProvince, $this->request->getData());
            if ($this->DistrictProvinces->save($districtProvince)) {
                $this->Flash->success(__('The district province has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district province could not be saved. Please, try again.'));
        }
        $regions = $this->DistrictProvinces->Regions->find('list', ['limit' => 200]);
        $this->set(compact('districtProvince', 'regions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id District Province id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $districtProvince = $this->DistrictProvinces->get($id);
        if ($this->DistrictProvinces->delete($districtProvince)) {
            $this->Flash->success(__('The district province has been deleted.'));
        } else {
            $this->Flash->error(__('The district province could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
