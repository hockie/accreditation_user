<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EntityCategories Controller
 *
 * @property \App\Model\Table\EntityCategoriesTable $EntityCategories
 *
 * @method \App\Model\Entity\EntityCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntityCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EntityCategoryTypes']
        ];
        $entityCategories = $this->paginate($this->EntityCategories);

        $this->set(compact('entityCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Entity Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entityCategory = $this->EntityCategories->get($id, [
            'contain' => ['EntityCategoryTypes', 'EntityTypes']
        ]);

        $this->set('entityCategory', $entityCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entityCategory = $this->EntityCategories->newEntity();
        if ($this->request->is('post')) {
            $entityCategory = $this->EntityCategories->patchEntity($entityCategory, $this->request->getData());
            if ($this->EntityCategories->save($entityCategory)) {
                $this->Flash->success(__('The entity category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity category could not be saved. Please, try again.'));
        }
        $entityCategoryTypes = $this->EntityCategories->EntityCategoryTypes->find('list', ['limit' => 200]);
        $this->set(compact('entityCategory', 'entityCategoryTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entity Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entityCategory = $this->EntityCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entityCategory = $this->EntityCategories->patchEntity($entityCategory, $this->request->getData());
            if ($this->EntityCategories->save($entityCategory)) {
                $this->Flash->success(__('The entity category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity category could not be saved. Please, try again.'));
        }
        $entityCategoryTypes = $this->EntityCategories->EntityCategoryTypes->find('list', ['limit' => 200]);
        $this->set(compact('entityCategory', 'entityCategoryTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entity Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entityCategory = $this->EntityCategories->get($id);
        if ($this->EntityCategories->delete($entityCategory)) {
            $this->Flash->success(__('The entity category has been deleted.'));
        } else {
            $this->Flash->error(__('The entity category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function catList($id = null){
		if ($this->request->is('get')) {
		
			$entityCategories = $this->EntityCategories->find()->select(['EntityCategories.id','EntityCategories.name'])->where(['EntityCategories.entity_category_type_id'=>$id]);			
			
			$this->set(compact('entityCategories'));
		 
		 }
	}
}
