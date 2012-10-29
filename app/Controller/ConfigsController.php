<?php
App::uses('AppController', 'Controller');
/**
 * Configs Controller
 *
 * @property Config $Config
 */
class ConfigsController extends AppController {


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
			
		
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
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
			
		
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			$this->Session->setFlash(__('<h4>Error !</h4>Configuracion Invalida.',true),'flash_error');
			$this->redirect(array('action'=>'index'));
			//throw new NotFoundException(__('Configuracion Invalida.'));
		}
		$this->set('config', $this->Config->read(null, $id));
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
			
			
		if ($this->request->is('post')) {
			
			//Validar que el nombre no este vacio****************************************************
				if(empty($this->request->data['Config']['nombre'])){
					$this->Session->setFlash(__('<h4>Error !</h4>El Nombre no puede estar vacio.',true),'flash_error');
					return;
				}
				
			
			//Validar que no se repita el nombre*******************************************************
				$existe= $this->Config->find('count',array('conditions'=>array('Config.nombre'=>$this->request->data['Config']['nombre'])));
				if($existe>0){
					$this->Session->setFlash(__('<h4>Error !</h4>El Nombre de la configuracion ya Existe, debe introducir un Nombre diferente.',true),'flash_error');
					return;
				}
				
			
			//Validar que el valor no este vacio****************************************************
				if(empty($this->request->data['Config']['valor'])){
					$this->Session->setFlash(__('<h4>Error !</h4>El Valor no puede estar vacio.',true),'flash_error');
					return;
				}
				
				
			//Validar que la descripcion no este vacia****************************************************
				if(empty($this->request->data['Config']['descripcion'])){
					$this->Session->setFlash(__('<h4>Error !</h4>La Descripcion no puede estar vacia.',true),'flash_error');
					return;
				}
				
			
			$this->Config->create();
			if ($this->Config->save($this->request->data)) {
				$this->Session->setFlash(__('<h4>Ok !</h4>La Configuracion ha sido Guardada con Exito.',true),'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<h4>Error !</h4>La Configuracion no pudo ser Guardada. Por favor, intentelo nuevamente.',true),'flash_error');
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
		
		//fucion valida el status del usuario que este activo
			$this->validaStatusUser($this->Auth->user('status'));
			
		//funcion validar acceso
			$this->validaAcceso(array(ADMIN));
			
			
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			$this->Session->setFlash(__('<h4>Error !</h4>Configuracion Invalida.',true),'flash_error');
			$this->redirect(array('action'=>'index'));
			//throw new NotFoundException(__('Configuracion Invalida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//Validar que el valor no este vacio****************************************************
				if(empty($this->request->data['Config']['valor'])){
					$this->Session->setFlash(__('<h4>Error !</h4>El Valor no puede estar vacio.',true),'flash_error');
					$this->redirect(array('action'=>'edit',$id));
				}
				
				
			//Validar que la descripcion no este vacia****************************************************
				if(empty($this->request->data['Config']['descripcion'])){
					$this->Session->setFlash(__('<h4>Error !</h4>La Descripcion no puede estar vacia.',true),'flash_error');
					$this->redirect(array('action'=>'edit',$id));
				}
				
			
			if ($this->Config->save($this->request->data)) {
				$this->Session->setFlash(__('<h4>Ok !</h4>La Configuracion ha sido Guardada con Exito.',true),'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<h4>Error !</h4>La Configuracion no pudo ser Guardada. Por favor, intentelo nuevamente.',true),'flash_error');
			}
		} else {
			$this->request->data = $this->Config->read(null, $id);
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
			
			
		$this->Session->setFlash(__('<h4>Error !</h4>No se puede Eliminar Configuraciones.',true),'flash_error');	
		$this->redirect(array('action' => 'index'));
		
			
		/*if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Configuracion Invalida'));
		}
		if ($this->Config->delete()) {
			$this->Session->setFlash(__('Config deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Config was not deleted'));
		$this->redirect(array('action' => 'index'));*/
	}
}