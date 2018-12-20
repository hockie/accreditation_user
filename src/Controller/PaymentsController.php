<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Payments Controller
 *
 * @property \App\Model\Table\PaymentsTable $Payments
 *
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentsController extends AppController
{
public function initialize(){
     parent::initialize();
     $this->loadModel('EstablishmentAccounts');
	 
	 
   }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		
        $this->paginate = [
            'contain' => ['EstablishmentAccounts', 'AccountTypes', 'Users']
        ];
		$status = $this->request->getQuery('status');
		$payments_status = $this->Payments->find('all')->where(['Payments.open_close'=>$status]);
		$payment_est_acc_id = $this->Payments->find()->select(['establishment_account_id'])->where(['Payments.open_close'=>$status]);
		
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentAccounts = $establishmentAccountsTable->find()->select(['id','establishment_detail_id'])->where(['id in '=>[$payment_est_acc_id]]);
		
		
		
        //$payments = $this->paginate($this->Payments);
		 $this->set(compact('establishment_accounts','establishmentAccounts'));
		$this->set('payments',$this->paginate($payments_status));
		
    }
	
	public function getEstablishmentName($array = null){
		
		
		
	}

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
	  public function pending()
    {
        $this->paginate = [
            'contain' => ['EstablishmentAccounts', 'AccountTypes', 'Users']
        ];
		$pending = $this->Payments->find()->where(['open_close'=>'open']);
      //  $payments = $this->paginate($pending);
		
        $this->set('payments',$this->paginate($pending));
    }
	
    public function view($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => ['EstablishmentAccounts', 'AccountTypes', 'Users']
        ]);

        $this->set('payment', $payment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payment = $this->Payments->newEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $establishmentAccounts = $this->Payments->EstablishmentAccounts->find('list', ['limit' => 200]);
        $accountTypes = $this->Payments->AccountTypes->find('list', ['limit' => 200]);
        $users = $this->Payments->Users->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'establishmentAccounts', 'accountTypes', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $establishmentAccounts = $this->Payments->EstablishmentAccounts->find('list', ['limit' => 200]);
        $accountTypes = $this->Payments->AccountTypes->find('list', ['limit' => 200]);
        $users = $this->Payments->Users->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'establishmentAccounts', 'accountTypes', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payments->get($id);
        if ($this->Payments->delete($payment)) {
            $this->Flash->success(__('The payment has been deleted.'));
        } else {
            $this->Flash->error(__('The payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function accountPayment($estacc_id = null)
    {
		
		$this->sessionHouse($estacc_id);
		
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentDetailsTable = TableRegistry::get('EstablishmentDetails');
		
		$establishment_account_id = $estacc_id; 
		$payment = $this->Payments->newEntity();
		$this->request->data['account_type_id'] = 3;
		$this->request->data['amount'] = 300;
		$this->request->data['description'] = 'Accreditation';
		$referenceNo = $this->generateAuthNo();// strtoupper(substr(md5(rand(1,10000)),0,10));
		$this->request->data['hash_key'] = $referenceNo;
		
		
		$establishmentAccount = $establishmentAccountsTable->get($establishment_account_id);
		$invoiceDetails = $this->EstablishmentAccounts->get($establishment_account_id);
		$address = $this->getAddress($establishment_account_id);
		$establishmentDetails = $establishmentDetailsTable->get($invoiceDetails['establishment_detail_id']);
		$this->request->data['invoice_no']= date_format($invoiceDetails['created'], 'Ymd') . '-' . $invoiceDetails['id'];
		
		
			
		
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
			$method = $this->request->getData('payment_method');
			
			
			if($method == "Over the Counter"){
				if ($this->Payments->save($payment)) {
					
					$session = $this->getRequest()->getSession();
					$session->write('proc9','checked'); //write new session
					
					$paymentDetails = $this->Payments->get($payment['id']);
					//email message
					$message = 'Dear Applicant, <br />';
					$message .= '<h3> Please see invoice details below. Print and present this invoice at the DOT Cashier. </h3>';
					$message .= '<p class="print"><strong>Invoice Date: </strong>'.$invoiceDetails['created'].'</p>';
					$message .= '<p class="print"><strong>Invoice Number: </strong>'. date_format($invoiceDetails['created'], 'Ymd') . '-' . $invoiceDetails['id'].'</p>';
					$message .= '<p class="print"><strong>Establishment Name: </strong>'. $establishmentDetails['establishment_name'] . '</p>';
					$message .= '<p class="print"><strong>Establishment Address : </strong>'. $address .'</p>';
					$message .= '<p class="print"><strong>TIN No : </strong>'. $establishmentAccount['tin']. '</p>';					
					$message .= '<p class="print"><strong>In partial payment for: </strong>'. $paymentDetails['description']. '</p>';
					$message .= '<h3><strong>REFERENCE NUMBER: </strong>'. strtoupper(substr($paymentDetails['hash_key'],0,15)).'</h3>';
					$message .= '<h3><strong>AMOUNT DUE: </strong> P'.$paymentDetails['amount'].'.00</h3>';
					
					$this->mailNotification($establishmentAccount['email'],'DOT-Establishment Registration',$message);
					
					$this->Flash->success(__('CONGRATULATIONS! The payment has been saved.'));
					return $this->redirect(['action' => 'print_invoice',$payment['id']]);
				}
				$this->Flash->error(__('The payment could not be saved. Please, try again.'));
				
			}else{
				$this->Flash->error(__($method . ' IS NOT AVAILABLE'));
				return $this->redirect(['action' => 'account-payment',$estacc_id]);		
			}
			$establishmentAccounts = $this->Payments->EstablishmentAccounts->find('list', ['limit' => 200]);
			$accountTypes = $this->Payments->AccountTypes->find('list', ['limit' => 200]);
			$users = $this->Payments->Users->find('list', ['limit' => 200]);
			$this->set(compact('payment', 'establishmentAccounts', 'accountTypes', 'users','method'));
				
        }	
			$this->set(compact('establishmentAccount',$establishmentAccount));
			$this->set('establishment_account_id',$establishment_account_id);
		
    }
	
	public function printInvoice($id = null){
		
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentDetailsTable = TableRegistry::get('EstablishmentDetails');
		
		$invoiceDetails = $this->Payments->get($id);
		$establishmentAccountId = $invoiceDetails['establishment_account_id'];
		$address = $this->getAddress($establishmentAccountId);
		$establishmentAccount = $establishmentAccountsTable->get($establishmentAccountId);
		
		$establishmentDetails = $establishmentDetailsTable->get($establishmentAccount['establishment_detail_id']);
		
		$this->set(compact('invoiceDetails','address','establishmentDetails','establishmentAccount'));
		
		$this->sessionHouse($id);
		
		$session = $this->getRequest()->getSession();
		$session->write('proc10','checked'); //write new session
				
	}
	
	public function getAddress($establishmentAccountId = null){
		$this->sessionHouse($establishmentAccountId);
		
		//get Estblishment Account Table by ID
		$establishmentAccountsTable = TableRegistry::get('EstablishmentAccounts');
		$establishmentDetailsTable = TableRegistry::get('EstablishmentDetails');
		$regionsTable = TableRegistry::get('Regions');
		$districtProvinceTable = TableRegistry::get('DistrictProvinces');
		$municipalityCityTable = TableRegistry::get('MunicipalityCities');
		$zipCodeTable = TableRegistry::get('ZipCodes');
		
		$establishmentAccount = $establishmentAccountsTable->get($establishmentAccountId);
		$establishmentDetails = $establishmentDetailsTable->get($establishmentAccount['establishment_detail_id']);
		$regions = $regionsTable->get($establishmentDetails['region_id']);
		$districtProvinces = $districtProvinceTable->get($establishmentDetails['district_province_id']);
		$municipalityCities = $municipalityCityTable->get($establishmentDetails['municipality_city_id']);
		$zipCodes = $zipCodeTable->get($establishmentDetails['zip_code_id']);
		
		//return $establishmentDetails['address'] . ',' . $municipalityCities['name'] . ', ' .  $districtProvinces['name']  . ', ' . $regions['name'] . ', ' . $zipCodes['name'];
		return $establishmentDetails['address'] . ', ' . $zipCodes['name'] . ', ' . $municipalityCities['name'] . ', ' .  $districtProvinces['name']  . ', ' . $regions['name'] . ', ' . $zipCodes['zip_code'];
		
	}
	
	public function sessionHouse($id = null){
		
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
		if($session->read('proc6')){
			$proc6 = $session->read('proc6');
		}else{
			$proc6 = false;
		}
		if($session->read('proc7')){
			$proc7 = $session->read('proc7');
		}else{
			$proc7 = false;
		}
		if($session->read('proc8')){
			$proc8 = $session->read('proc8');
		}else{
			$proc8 = false;
		}
		if($session->read('proc9')){
			$proc9 = $session->read('proc9');
		}else{
			$proc9 = false;
		}
		if($session->read('proc10')){
			$proc10 = $session->read('proc10');
		}else{
			$proc10 = false;
		}
		
		if($session->read('estacc_id')){
			$estacc_id = $session->read('estacc_id');
		}else{
			$estacc_id = $id;
		}
		
		$this->set(compact('proc1','proc2','proc3','proc4','proc5','proc6','proc7','proc8','proc9','proc10','estacc_id'));
	}
}
