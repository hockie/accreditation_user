<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * EntityCategoryTypes Controller
 *
 * @property \App\Model\Table\EntityCategoryTypesTable $EntityCategoryTypes
 *
 * @method \App\Model\Entity\EntityCategoryType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntityCategoryTypesController extends AppController
{

public $components = array(
        'RequestHandler'
    );
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $entityCategoryTypes = $this->paginate($this->EntityCategoryTypes);

        $this->set(compact('entityCategoryTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Entity Category Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entityCategoryType = $this->EntityCategoryTypes->get($id, [
            'contain' => ['EntityCategories', 'EstablishmentAccounts']
        ]);

        $this->set('entityCategoryType', $entityCategoryType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entityCategoryType = $this->EntityCategoryTypes->newEntity();
        if ($this->request->is('post')) {
            $entityCategoryType = $this->EntityCategoryTypes->patchEntity($entityCategoryType, $this->request->getData());
            if ($this->EntityCategoryTypes->save($entityCategoryType)) {
                $this->Flash->success(__('The entity category type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity category type could not be saved. Please, try again.'));
        }
        $this->set(compact('entityCategoryType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entity Category Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entityCategoryType = $this->EntityCategoryTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entityCategoryType = $this->EntityCategoryTypes->patchEntity($entityCategoryType, $this->request->getData());
            if ($this->EntityCategoryTypes->save($entityCategoryType)) {
                $this->Flash->success(__('The entity category type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entity category type could not be saved. Please, try again.'));
        }
        $this->set(compact('entityCategoryType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entity Category Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entityCategoryType = $this->EntityCategoryTypes->get($id);
        if ($this->EntityCategoryTypes->delete($entityCategoryType)) {
            $this->Flash->success(__('The entity category type has been deleted.'));
        } else {
            $this->Flash->error(__('The entity category type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function selectCategoryType(){
		
		$entity_category_type_id = null;
		$entityCategoryType = $this->EntityCategoryTypes->newEntity();
		$entityCategoryTypes = $this->EntityCategoryTypes->find('list');
		$entity_type_id = null;
		
		$this->sessionHouse();
		
		
		if ($this->request->is(['patch', 'post', 'put'])) {
			
			//Process 1 SESSION
			//request new session 
			$session = $this->request->getSession();
			$session->write('proc1','checked'); //write new session			
			
			if($this->request->getData('entity_category_type_id') != null ){
				$entity_category_type_id = $this->request->getData('entity_category_type_id');
			}

			if($this->request->getData('entity_category_id') != null ){
				$entity_category_id = $this->request->getData('entity_category_id');
			}

			if($this->request->getData('entity_types_id') != null ){
				$entity_type_id = $this->request->getData('entity_types_id');
			}
			
			/*$entityCategories = $this->EntityCategoryTypes->EntityCategories->find('list',[
			'conditions' => ['EntityCategories.id'=> $entity_category_type_id]			
			]);*/
			
			$entityTypes = $this->EntityCategoryTypes->EntityCategories->EntityTypes->find('list',[
			'conditions' => ['EntityTypes.entity_category_id'=> $entity_category_id]			
			]);
			
			if(isset($entity_type_id)){
				$session = $this->getRequest()->getSession();
				$session->write('entityCategoryTypeId', $entity_category_type_id); 
				$session->write('entityCategoryId', $entity_category_id); 
				$session->write('entityTypeId', $entity_type_id);
				
												
					if($entity_category_type_id ==1){	//establishment					
					
						return $this->redirect(['controller'=>'EstablishmentAccounts','action'=>'establishment_register',$entity_category_type_id,$entity_category_id,$entity_type_id]);
						//return $this->redirect(['controller'=>'AccountIdentifiers','action'=>'add_account_identifier']);
					}
					if($entity_category_type_id ==2){ //front liner
					
						return $this->redirect(['controller'=>'EstablishmentAccounts','action'=>'frontliner_register']);
					}					
			}			
			
		 }else{
			 $entityCategories = null;
			 $entityTypes = null;
			 /*$_SESSION['proc1'] = null;
			 $_SESSION['entity_category_type_id'] = null;
			 $_SESSION['entity_category_id'] = null;
			 $_SESSION['entity_type_id'] = null;*/
		 }
				
		
		$this->set(compact('entityCategoryTypes','entityCategoryType','entityTypes','step'));		
		$this->set(compact('entity_category_type_id'));	
		
	}
	
	public function sessionHouse(){
		
		//read session
		$session = $this->getRequest()->getSession();
		
		//read session
		if($session->read('entityCategoryTypeId')){
			 $entityCategoryTypeId = $session->read('entityCategoryTypeId');
		}else{
			$entityCategoryTypeId = 0;
		}
		
		if($session->read('entityCategoryId')){
			 $entityCategoryId = $session->read('entityCategoryId');
		}else{
			$entityCategoryId = 0;
		}
		
        if($session->read('entityTypeId')){
			 $entityTypeId = $session->read('entityTypeId');
		}else{
			$entityTypeId = 0;
		}
		
		$this->set(compact('entityCategoryTypeId','entityCategoryId','entityTypeId'));
		
		if($session->read('proc1')){
			$proc1 = $session->read('proc1');
		}else{
			$proc1 = false;
		}
		if($session->read('proc2')){
			$proc2 = $session->read('proc2');
		}else{
			$proc2 = false;
		}
		if($session->read('proc3')){
			$proc3 = $session->read('proc3');
		}else{
			$proc3 = false;
		}
		if($session->read('proc4')){
			$proc4 = $session->read('proc4');
		}else{
			$proc4 = false;
		}
		if($session->read('proc5')){
			$proc5 = $session->read('proc5');
		}else{
			$proc5 = false;
		}
		
		
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','estacc_id'));
	}
	
	
	
}
