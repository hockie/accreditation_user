<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	 
	public function initialize(){
		parent::initialize();
		$this->loadModel('Regions');
	}
	
	
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
		
		$regions = $this->Regions->find('list');
		$this->set(compact('regions'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
		
		$roles = ['administrator'=>'Administrator','counter'=>'Counter','evaluator'=>'Evaluator','inspector'=>'Inspector','chief'=>'Chief','director'=>'Director','releasing'=>'Releasing'];
        $this->set(compact('user','roles'));
    }
	
	 public function login(){
		if ($this->request->is('post')) {
			
			
				$user = $this->Auth->identify();
			
				if ($user) {
					$this->Auth->setUser($user);
					$this->Flash->success(__('Login Successful'));	
					return $this->redirect(['controller'=>'Pages','action'=>'dashboard']);
				}else{
					 $this->Flash->error(__('Username or password is incorrect'));	
					//return $this->redirect(['controller'=>'Pages','action'=>'dashboard']);
				}
					
						
						
			//var_dump($user);
			//die;
		}
		
	}
	
	 public function signup()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
	
	public function logout(){
		$this->Flash->success(__('Logout successfully'));
		return $this->redirect($this->Auth->logout());
		
	}

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
		
		$regions = $this->Regions->find('list');
		
        $roles = ['admin'=>'admin','cashier'=>'cashier','evaluator'=>'evaluator','inspector'=>'inspector','chief'=>'chief','director'=>'director','releasing'=>'releasing'];
        $this->set(compact('user','roles','regions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
