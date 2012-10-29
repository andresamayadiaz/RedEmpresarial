<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	
	function beforeFilter() {
	    parent::beforeFilter();
		
	    $this->Auth->allow('login','recuperarPass','add');
	   
	}
		
		
	
	function login(){
		
		if ($this->request->is('post')) {
			//Security::setHash('sha1');
	        if ($this->Auth->login()) {
	        	$this->Session->setFlash(__('<h4>Ok !</h4>Bienvenido(a) al Sistema.',true),'flash_success');
	            $this->redirect(array('action' => 'home')); 
				//$this->redirect($this->Auth->redirect());
	        }else{
	        	$this->Session->setFlash(__('<h4>Error !</h4>El Usuario — Password estan Incorrectos, Intentelo Nuevamente.',true),'flash_error');
	        } 
		}
		
	}
	
	function home(){
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
	
		//se redirecciona al home de cada tipo de usuario en caso de ser necesario
		 switch ($this->Auth->user('rol')){ 
        	
        	case '1': 
	            $this->redirect(array('action' => 'admin_home'));
	        	break;
			default :
             	$this->redirect(array('action' => 'profile'));            
        }
		
	}
	
	
	
	function admin_home(){
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
	}
	




    function recuperarPass(){
        
        	$this->autoRender = false;
       

	       if ($this->data['username']!='') {
	       		         
	        	$user= $this->User->find('first', array('conditions'=>array('User.username'=>$this->data['username'], 'User.status'=>1)));
	        	
				if($user['User']['id'] != '' ){
					
					$length= rand(6,9);
					$source = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$source .= '1234567890';
					
					if($length>0){
						$rstr = "";
						$source = str_split($source,1);
						for($i=1; $i<=$length; $i++){
							mt_srand((double)microtime() * 1000000);
							$num = mt_rand(1,count($source));
							$rstr .= $source[$num-1];
						}
				
					}
					
					$user['User']['password']= $this->Auth->password($rstr);
					
					if($this->User->save($user)){
						$this->loadModel('Config');
						$urlSistema  = $this->Config->obtener('urlSistema', 'http://localhost/users');
						
						//Enviar email**********************************************************************************************
							$email=$user['User']['email'];
							$ccEmail=array();
							$asunto=  ' Recuperacion de Contrase–a';
							$contenido = "Estimado usuario ".$user['User']['nombre'].",<br /><br />";
				            $contenido .= "Su nueva contrase–a es la siguiente: ".$rstr."<br /><br />";
				            $contenido .= "Podras Cambiarla entrando al sistema. <a href='".$urlSistema."'>Haz Click Aqu’</a> <br />";
				                               
							$enviarMail=$this->enviacorreo($email, $asunto, $contenido, $ccEmail);
							
						//***********************************************************************************************************
						
						if($enviarMail['exito']==1){
							$retorno=array('exito'=>1, 'msg'=>'Su nuevo Password se ha enviado a su email. ');
						}else{
							$retorno=array('exito'=>0, 'msg'=>'Su Password no pudo ser cambiado intentelo nuevamente.');
						}
						
						
					}else{
						$retorno=array('exito'=>0, 'msg'=>'Su Password no pudo ser cambiado intentelo nuevamente.');
					}
					
					//funcion de envio de emails
					
				}else{
					$retorno=array('exito'=>0, 'msg'=>'El Username no existe — esta desactivado.');
				}
	        	
			}else{
				$retorno=array('exito'=>0, 'msg'=>'Debe introducir un Username.');
			}
	        	
	        return json_encode($retorno);
        
        
        
    }
	
	
	
	
	
	
	
	function profile(){
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));

			
		$id= $this->Auth->user('id');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('<h4>Error !</h4>Usuario Invalido.',true),'flash_error');
	    	$this->redirect(array('action' => 'home'));   
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if($this->request->data['User']['pass1']!='' or $this->request->data['User']['pass2']!=''){
	              if($this->request->data['User']['pass1']==$this->request->data['User']['pass2']){
	                 $this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['pass1']);
	              }else{
	              		$this->Session->setFlash(__('<h4>Error !</h4>Los passwords no coinciden.',true),'flash_error');
	    				$this->redirect(array('action' => 'profile'));               
	              }
	         }


			//Validar que el email no este vacio*****************************************************
				if($this->request->data['User']['email']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Email.',true),'flash_error');
					return;
				}
	
			
			//Validar que el nombre no este vacio*****************************************************
				if($this->request->data['User']['nombre']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Nombre Completo del Usuario.',true),'flash_error');
					return;
				}
			
			
			if ($this->User->save($this->request->data)) {
				
				//Enviar email**********************************************************************************************
					$email=$this->request->data['User']['email'];
					$ccEmail=array();
					$asunto=  'Actualizacion de Datos de Usuario';
					$contenido = "Estimado usuario ".$this->request->data['User']['nombre'].",<br /><br />";
		            $contenido .= "Tus Datos de Usuario fueron actualizados correctamente.<br /><br />";
					if($this->request->data['User']['pass1']!='' or $this->request->data['User']['pass2']!=''){
						 $contenido .= "Tu nuevo Password es el siguiente: '' ".$this->request->data['User']['pass1']." ''.<br /><br />";
					}
		            $contenido .= "Puedes comprobar tus cambios. <a href='#'>Haz Click Aqui</a> para acceso al Sistema.<br /><br />";
		                               
					$enviarMail=$this->enviacorreo($email, $asunto, $contenido, $ccEmail);
					$msg='';
					if ($enviarMail['exito']==0){
						$msg='Pero fallo el envio de Correo con Error: '.$enviarMail['error'];
					}
				//***********************************************************************************************************
				
				$this->Session->setFlash(__('<h4>OK !</h4>Tus Datos han sido Guardados Correctamente.',true),'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<h4>Error !</h4>No se Guardaron tus Datos. Por favor intentalo nuevamente.',true),'flash_error');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
				
		
		
	}





	function testCorreo(){
		
		
		//Enviar email**********************************************************************************************
			$email='rolucio@gmail.com';
			$ccEmail=array();
			$asunto=  $this->Auth->user('username').' Test email';
			$contenido = "Estimado usuario ".$this->Auth->user('username').",<br /><br />";
            $contenido .= "Test E-mail<br /><br />";
            $contenido .= "<a href='#'>Haz Click Aqui</a> para acceso al sistema<br /><br />";
                               
			$enviarMail=$this->enviacorreo($email, $asunto, $contenido, $ccEmail);
			$msg='';
			if ($enviarMail['exito']==0){
				$msg='Pero fallo el envio de Correo con Error: '.$enviarMail['error'];
			}
		//***********************************************************************************************************
		print_r($enviarMail);
		
		echo '<br/>'.$msg;
		
	}





/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
			
		
		//condiciones para filtrado	
			$conditions = array();
			
			//filtro de usuarios buscando en el username y el nombre*****************************************************************************
				if(isset($this->request->params['named']['username'])){
					if(!empty($this->request->params['named']['username'])){
						$conditions['User.username LIKE']= '%'.$this->request->params['named']['username'].'%';
					}
				
				}

		
		//paginado
			$this->User->recursive = 0;
			//$this->paginate = array('limit' => 1);
			$this->set('users', $this->paginate('User',$conditions));
		
		
		
		//se envian los roles a la vista para pintarlos en un combo
			$roles = array(ADMIN=>'Administrador', ENCUESTADOR=>'Encuestador');
			$this->set('roles', $roles);
			
		//se envian los status a la vista para pintarlos en un option
			$status= array(
						1=>'<span class="badge badge-success">Activo</span>',
						0=>'<span class="badge badge-important">Inactivo</span>');
			$this->set('status', $status);
			
			
		//se envian las opciones de status a la vista para pintarlos en un menu
			$statusOption= array(
						1=>'<i class="icon-ban-circle"></i> Desactivar',
						0=>'<i class="icon-check"></i> Activar');
			$this->set('statusOption', $statusOption);
	
	}




	public function indexsearch(){
	 
		 if($this->request->is('post')){
			 $this->redirect(array('controller' => 'users', 'action' => 'index', 'username' => $this->request->data['User']['username']));
		 }
		 
	 }





/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
		
		
		//VALIDAR que exista el usuario y enviar datos a la vista
			$this->User->id = $id;
			if (!$this->User->exists()) {
				$this->Session->setFlash(__('<h4>Error !</h4>Usuario Invalido',true),'flash_error');
				$this->redirect(array('action'=>'index'));
				//throw new NotFoundException(__('Usuario Invalido'));
			}
			$user=$this->User->read(null, $id);
			$this->set('user', $user);
		
		
		//se envian los roles a la vista para pintarlos en un combo
			$roles = array(ADMIN=>'Administrador');
			$this->set('roles', $roles);
			
		//se envian los status a la vista para pintarlos en un option
			$status= array(
						1=>'Activo',
						0=>'Inactivo');
			$this->set('status', $status);
			
			

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
					
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
			

		//se envian los roles a la vista para pintarlos en un combo
			$roles = array(ADMIN=>'Administrador', ENCUESTADOR=>'Encuestador');
			$this->set('roles', $roles);	
				
				
		
		
		
		if ($this->request->is('post')) {
						
		
			//Validar que el username no este vacio*****************************************************
				if($this->request->data['User']['username']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Username.',true),'flash_error');
					return;
				}
				
				
			//Validar que el username no tenga espacios*************************************************
				$espacios=substr_count($this->request->data['User']['username'], ' ');
				if($espacios>0){
					$this->Session->setFlash(__('<h4>Error !</h4>El Username no debe contener espacios.',true),'flash_error');
					return;
				}
				
				
			//Validar que no se repita el username*******************************************************
				$existe= $this->User->find('count',array('conditions'=>array('User.username'=>$this->request->data['User']['username'])));
				if($existe>0){
					$this->Session->setFlash(__('<h4>Error !</h4>El Usuario ya Existe, debe introducir un Username diferente.',true),'flash_error');
					return;
				}
			
				
			//Validar que el password no este vacio y que coincidan***************************************
				if($this->request->data['User']['pass1']=='' or $this->request->data['User']['pass2']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe Introducir el Password.',true),'flash_error');
		            return;
		         }else{
		         	  if($this->request->data['User']['pass1']==$this->request->data['User']['pass2']){
		                 $this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['pass1']);
		              }else{
		              		$this->Session->setFlash(__('<h4>Error !</h4>Los passwords no coinciden.',true),'flash_error');
		    				return;               
		              }
		         }
				 
				 
			//Validar que el email no este vacio*****************************************************
				if($this->request->data['User']['email']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Email.',true),'flash_error');
					return;
				}
	
			
			//Validar que el nombre no este vacio*****************************************************
				if($this->request->data['User']['nombre']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Nombre Completo del Usuario.',true),'flash_error');
					return;
				}
			 
			 
			 
			//$this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['password']);
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				
				//Enviar email**********************************************************************************************
					$email=$this->request->data['User']['email'];
					$ccEmail=array();
					$asunto=  'Alta de Usuario en el Sistema';
					$contenido = "Estimado usuario ".$this->request->data['User']['nombre'].",<br /><br />";
		            $contenido .= "Fuiste dado de alta en el Sistema con el Username: ''".$this->request->data['User']['username']."''. y el Password: ''".$this->request->data['User']['pass1']."''.<br /><br />";
		            $contenido .= "Puedes comprobar tus datos completos. <a href='#'>Haz Click Aqui</a> para acceso al Sistema.<br /><br />";
		                               
					$enviarMail=$this->enviacorreo($email, $asunto, $contenido, $ccEmail);
					$msg='';
					if ($enviarMail['exito']==0){
						$msg='Pero fallo el envio de Correo con Error: '.$enviarMail['error'];
					}
				//***********************************************************************************************************
								
				
				$this->Session->setFlash(__('<h4>OK !</h4>El Usuario ha sido Guardado Correctamente. '.$msg,true),'flash_success');
				$this->redirect(array('action' => 'index'));
				
							
			} else {
				$this->Session->setFlash(__('<h4>Error !</h4>El Usuario no pudo ser Guardado, Por favor intentelo nuevamente.',true),'flash_error');
			}
		}
		
	
		
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('<h4>Error !</h4>Usuario Invalido.',true),'flash_error');
			$this->redirect(array('action'=>'index'));
			//throw new NotFoundException(__('Usuario Invalido'));
		}
		
			
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
		
			
		//se envian los roles a la vista para pintarlos en un combo
			$roles = array(ADMIN=>'Administrador');
			$this->set('roles', $roles);	
				
							
			
		//se envian los status a la vista para pintarlos en un option
			$status= array(
						1=>'Activo',
						0=>'Inactivo');
			$this->set('status', $status);
			
							
		
		if ($this->request->is('post') || $this->request->is('put')) {
									
			//Validar que el email no este vacio*****************************************************
				if($this->request->data['User']['email']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Email, Por favor intentelo nuevamente.',true),'flash_error');
					return;
				}
	
			
			//Validar que el nombre no este vacio*****************************************************
				if($this->request->data['User']['nombre']==''){
					$this->Session->setFlash(__('<h4>Error !</h4>Debe introducir el Nombre Completo del Usuario, Por favor intentelo nuevamente.',true),'flash_error');
					return;
				}
				
				
			//Validar que los password coincidan********************************************************
				if($this->request->data['User']['pass1']!='' or $this->request->data['User']['pass2']!=''){
		              if($this->request->data['User']['pass1']==$this->request->data['User']['pass2']){
		                 $this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['pass1']);
		              }else{
		              		$this->Session->setFlash(__('<h4>Error !</h4>Los passwords no coinciden, Por favor intentelo nuevamente.',true),'flash_error');
		    				return;              
		              }
		         }
			
			
			//$this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['password']);
			//print_r($this->request->data);
			//return;
			if ($this->User->save($this->request->data)) {
				
				//Enviar email**********************************************************************************************
					$email=$this->request->data['User']['email'];
					$ccEmail=array();
					$asunto=  'Actualizacion de Datos de Usuario';
					$contenido = "Estimado usuario ".$this->request->data['User']['nombre'].",<br /><br />";
		            $contenido .= "Tus Datos de Usuario fueron actualizados correctamente.<br /><br />";
					if($this->request->data['User']['pass1']!='' or $this->request->data['User']['pass2']!=''){
						 $contenido .= "Tu nuevo Password es el siguiente: '' ".$this->request->data['User']['pass1']." ''.<br /><br />";
					}
		            $contenido .= "Puedes comprobar tus cambios. <a href='#'>Haz Click Aqui</a> para acceso al Sistema.<br /><br />";
		                               
					$enviarMail=$this->enviacorreo($email, $asunto, $contenido, $ccEmail);
					$msg='';
					if ($enviarMail['exito']==0){
						$msg='Pero fallo el envio de Correo con Error: '.$enviarMail['error'];
					}
				//***********************************************************************************************************
				
				
				$this->Session->setFlash(__('<h4>OK !</h4>El Usuario ha sido Guardado Correctamente.'.$msg,true),'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<h4>Error !</h4>El Usuario no pudo ser Guardado, Por favor intentelo nuevamente.',true),'flash_error');
			}
		} else {
			$user=$this->User->read(null, $id);
			$this->request->data = $user;
			
		}
		
		
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
		
		
		$this->Session->setFlash(__('<h4>Error !</h4>Por el momento no se pueden eliminar usuarios.',true),'flash_error');
		$this->redirect(array('action' => 'index'));
		
		
		if (!$this->request->is('post')) {
			$this->Session->setFlash(__('<h4>Error !</h4>Por el momento no se pueden eliminar usuarios.',true),'flash_error');
			$this->redirect(array('action' => 'index'));
		}
									
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash(__('<h4>Error !</h4>Usuario Invalido.',true),'flash_error');
			$this->redirect(array('action'=>'index'));
			//throw new NotFoundException(__('Usuario Invalido'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('<h4>OK !</h4>Usuario Eliminado Exitosamente.',true),'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('<h4>Error !</h4>El usuario no pudo ser Eliminado.',true),'flash_error');
		$this->redirect(array('action' => 'index'));
	}








	public function status($id = null) {
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
			
		
		//Validar que exista el usuario*************************************************************	
			$this->User->id = $id;
			if (!$this->User->exists()) {
				$this->Session->setFlash(__('<h4>Error !</h4>Usuario Invalido.',true),'flash_error');
				$this->redirect(array('action'=>'index'));
				//throw new NotFoundException(__('Usuario Invalido'));
			}
			
		
		//Buscar el status del usuario********************************************************************	
			$user=$this->User->find('first', array('conditions'=>array('User.id'=>$id),'recursive'=>-1));
			
					
			if(!empty($user)){
				if($user['User']['status']==1){
					$user['User']['status']=0;
				}else{
					$user['User']['status']=1;
				}
				
				if($this->User->save($user)){
					$this->Session->setFlash(__('<h4>OK !</h4>Se Cambio Correctamente el Status del Usuario: '.$user['User']['username'],true),'flash_success');
					$this->redirect(array('action'=>'index'));
				}else{
					$this->Session->setFlash(__('<h4>Error !</h4>No se pudo Cambiar el Status del usuario seleccionado. Por favor, Intentelo nuevamente.',true),'flash_error');
					$this->redirect(array('action'=>'index'));
				}
			}else{
				$this->Session->setFlash(__('<h4>Error !</h4>Usuario Incorrecto.',true),'flash_error');	
				$this->redirect(array('action'=>'index'));
			}
			
		
	}

}