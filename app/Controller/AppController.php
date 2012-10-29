<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array('Auth','Session','Email');
	
	
	function beforeRender(){
		$this->loadModel('Config');
		
		$nombreSistema  = $this->Config->obtener('nombreSistema', 'Project Name');
		$this->set('nombreSistema', $nombreSistema);
		
		$footer_right  = $this->Config->obtener('footer_right', 'Bootstraps Project.');
		$this->set('footer_right', $footer_right);
		
		$footer_left  = $this->Config->obtener('footer_left', 'Captiva Company.');
		$this->set('footer_left', $footer_left);
		
		//$this->set('pathUrl',basename(ROOT));
	}	
	
	
	
	function logout(){
		
		$this->redirect($this->Auth->logout());
	}
	
	
	
	 /*Funcion de email*********************************************************************   */
     
     
     function enviacorreo($email, $asunto, $content, $cc=null) {
    			
			/*$this->autoRender = false;
			$this->loadModel('Config');//importas el modelo directamente para trabajar
					       		   
        		    $smtp = $this->Config->obtener('smtp','s041.panelboxmanager.com'); 
        		    $smtpport = $this->Config->obtener('smtpport','587 '); //'587';
        		    $smtpuser = $this->Config->obtener('smtpuser','info@safecargo.com.mx');  
        		    $smtppasswd = $this->Config->obtener('smtppasswd','SafeCargo123'); 
					
					$nombreSistema  = $this->Config->obtener('nombreSistema', 'Project Name');
        		                		    
                	 $this->Email->smtpOptions = array(
                    	 'port'=>$smtpport,
                    	 'timeout'=>'30',
                    	 'host' => $smtp,
                    	 'username'=>$smtpuser,
                    	 'password'=>$smtppasswd
                	 );
        				
                   $this->Email->delivery = 'smtp'; // siempre igual
                   $this->Email->layout = "html/default"; // depende del layout que se quiera, por lo general sera el mismo
                   $this->Email->sendAs = 'html'; // enviarlo siempre como html
                   $this->Email->from    = $nombreSistema."<".$smtpuser.">";
                   $this->Email->to      = $email;
				   if($cc!=null){
                   		$this->Email->cc = $cc;
                   }
                   $this->Email->subject = $asunto;
                   if($this->Email->send($content)){
                   		return array('exito'=>1,'error'=>'Ninguno');
									                                   	
                   	}else{
                   		return array('exito'=>0,'error'=>$this->Email->smtpError);
									                             		
                   	}*/
								
								
    	}



//validar acceso a la funcion
	function validaAcceso($rolesPermitidos){
		if (empty($rolesPermitidos)){
			$this->Session->setFlash(__('<h4>Error !</h4>Acceso no Permitido.',true),'flash_error');
			$this->redirect(array('controller'=>'users','action'=>'home'));
		}
		
		$rolActual=$this->Auth->user('rol');
		if(in_array($rolActual, $rolesPermitidos)){
			return TRUE;
		}else{
			$this->Session->setFlash(__('<h4>Error !</h4>Acceso no Permitido.'), 'flash_error');
			$this->redirect(array('controller'=>'users','action'=>'home'));
		}
		
		
	}


//validar acceso a la funcion
	function validaStatusUser($status=null){
		if ($status==null or $status!= ACTIVO){
			$this->Session->setFlash(__('<h4>Error !</h4>Tu usuario esta Desactivado, verificalo con tu Administrador.',true),'flash_error');
			$this->redirect($this->Auth->logout());
		}
		
		return TRUE;
		
	}    

}
