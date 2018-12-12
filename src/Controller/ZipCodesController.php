<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ZipCodes Controller
 *
 * @property \App\Model\Table\ZipCodesTable $ZipCodes
 *
 * @method \App\Model\Entity\ZipCode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZipCodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MunicipalityCities', 'DistrictProvinces', 'Regions']
        ];
        $zipCodes = $this->paginate($this->ZipCodes);

        $this->set(compact('zipCodes'));
    }

    /**
     * View method
     *
     * @param string|null $id Zip Code id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zipCode = $this->ZipCodes->get($id, [
            'contain' => ['MunicipalityCities', 'DistrictProvinces', 'Regions', 'EstablishmentDetails']
        ]);

        $this->set('zipCode', $zipCode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zipCode = $this->ZipCodes->newEntity();
        if ($this->request->is('post')) {
            $zipCode = $this->ZipCodes->patchEntity($zipCode, $this->request->getData());
            if ($this->ZipCodes->save($zipCode)) {
                $this->Flash->success(__('The zip code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zip code could not be saved. Please, try again.'));
        }
        $municipalityCities = $this->ZipCodes->MunicipalityCities->find('list', ['limit' => 200]);
        $districtProvinces = $this->ZipCodes->DistrictProvinces->find('list', ['limit' => 200]);
        $regions = $this->ZipCodes->Regions->find('list', ['limit' => 200]);
        $this->set(compact('zipCode', 'municipalityCities', 'districtProvinces', 'regions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zip Code id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zipCode = $this->ZipCodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zipCode = $this->ZipCodes->patchEntity($zipCode, $this->request->getData());
            if ($this->ZipCodes->save($zipCode)) {
                $this->Flash->success(__('The zip code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zip code could not be saved. Please, try again.'));
        }
        $municipalityCities = $this->ZipCodes->MunicipalityCities->find('list', ['limit' => 200]);
        $districtProvinces = $this->ZipCodes->DistrictProvinces->find('list', ['limit' => 200]);
        $regions = $this->ZipCodes->Regions->find('list', ['limit' => 200]);
        $this->set(compact('zipCode', 'municipalityCities', 'districtProvinces', 'regions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zip Code id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zipCode = $this->ZipCodes->get($id);
        if ($this->ZipCodes->delete($zipCode)) {
            $this->Flash->success(__('The zip code has been deleted.'));
        } else {
            $this->Flash->error(__('The zip code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function cityZipCode(){
		if ($this->request->is(['post'])) {
			$municipality_city_id =$this->request->data('municipality_city_id');                                                 
			$zipCodes = $this->ZipCodes->find()->select(['ZipCodes.id','ZipCodes.zip_code'])->where(['ZipCodes.municipality_city_id '=>$municipality_city_id]);
			$this->set(compact('zipCodes'));		
		}		
	}
}
