<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Network\Email\Email;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
	 
	 

   
	
   public function initialize()
    {
		parent::initialize();
		$this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
		  
			$this->loadComponent('Auth', [
				'loginAction' => [
					'controller' => 'Users',
					'action' => 'login'
				],
				'authError' => 'Did you really think you are allowed to see that?',
				'authenticate' => [
					'Form' => [
						'fields' => ['username' => 'email','password'=>'password']
					]
				],
				'storage' => 'Session'
		]);
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
		$this->Auth->allow(['index','home','signup','selectCategoryType','establishmentRegister','catList','entityTypeList','cityZipCode','municipalityCities','districtProvinces','addDetails','addOwners','addManagingCompany','addPermit','addManager','addRepresentative','reviewInfo','accountPayment','print_invoice','emailCheck','tinCheck']);
    }
	 
	public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
     
    return true;
}
	
	

	 public function mailNotification($to = null, $subject = null, $msg = null){

       //Do something to get numbers or what you want
	   /*

		$email = new Email('default');     
		$email->from(['htfavenir@tourism.gov.ph' => 'My Site'])      // sender email
		->to('homer.favenir@gmail.com') // receiver email
		->cc('homer.favenir@hotmail.com') //  cabron copy email (optional)
		->bcc('homer.favenir@tup.edu.ph') // blind carbon (optional)
		->subject('About')   // message subject        
		->replyTo('homer.favenir@xeno-media.com') // email to reply to  
		*/
		
		$email = new Email();    
       $email
            ->transport('gmail' )
            ->from( ['htfavenir@tourism.gov.ph' => 'htfavenir@tourism.gov.ph'] )
            ->to( $to )
			->bcc( 'homer.favenir@mailinator.com' )
            ->subject( $subject )
			->template('initial_payment','initial_payment')
            ->emailFormat( 'html' )
            ->viewVars(array( 'msg' => $msg) )
            ->send( $msg );    
            return 1;
    }
	
	public function generateAuthNo() {

		$a = $this->generateRandomString(2);

		$b = mt_rand (99, 999999999);

		$c = $this->generateRandomString(1);

		$trackingNo = $a.$b.$c;


		return strtoupper($trackingNo); 

	}
	
	public function generateRandomString($length = 2) {

		return strtoupper(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length));

	}
	
	/*public function beforeFilter (Event $event) {
        $this->Auth->allow('home');
    }*/
	
}
