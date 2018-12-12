<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EntityTypes Controller
 *
 * @property \App\Model\Table\EntityTypesTable $EntityTypes
 *
 * @method \App\Model\Entity\EntityType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntityTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EntityCategories']
        ];
        $entityTypes = $this->paginate($this->EntityTypes);

        $this->set(compact('entityTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Entity Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entityType = $this->EntityTypes->get($id, [
            'contain' => ['EntityCategories', 'EstablishmentAccounts']
        ]);

        $this->set('entityType', $entityType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entityType = $this->EntityTypes->newEntity();
        if ($this->request->is('post')) {
            $entityType = $this->EntityTypes->patchEntity($entityType, $this->request->getData());
            if ($this->EntityTypes->save($entityType)) {
                $this->Flash->success(__('The entity type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity type could not be saved. Please, try again.'));
        }
        $entityCategories = $this->EntityTypes->EntityCategories->find('list', ['limit' => 200]);
        $this->set(compact('entityType', 'entityCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entity Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entityType = $this->EntityTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entityType = $this->EntityTypes->patchEntity($entityType, $this->request->getData());
            if ($this->EntityTypes->save($entityType)) {
                $this->Flash->success(__('The entity type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity type could not be saved. Please, try again.'));
        }
        $entityCategories = $this->EntityTypes->EntityCategories->find('list', ['limit' => 200]);
        $this->set(compact('entityType', 'entityCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entity Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entityType = $this->EntityTypes->get($id);
        if ($this->EntityTypes->delete($entityType)) {
            $this->Flash->success(__('The entity type has been deleted.'));
        } else {
            $this->Flash->error(__('The entity type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function entityTypeList($id = null){
		
		if ($this->request->is('get')) {
		
			$entityTypes = $this->EntityTypes->find()->select(['EntityTypes.id','EntityTypes.name'])->where(['EntityTypes.entity_category_id'=>$id]);			
			
			$this->set(compact('entityTypes'));
		 
		 }
		 
	}
}
