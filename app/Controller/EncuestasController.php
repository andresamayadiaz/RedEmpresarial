<?php
App::uses('AppController', 'Controller');
/**
 * Encuestas Controller
 *
 * @property Encuesta $Encuesta
 */
class EncuestasController extends AppController {


	public function indexsearch(){
	 
		 if($this->request->is('post')){
			 $this->redirect(array('controller' => 'encuestas', 'action' => 'index', 'folio' => $this->request->data['Encuesta']['id']));
		 }
		 
	 }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$conditions = array();
		
		if(isset($this->request->params['named']['folio'])){
					if(!empty($this->request->params['named']['folio'])){
						$conditions['Encuesta.folio'] = $this->request->params['named']['folio'];
					}
				
				}
				
		$this->Encuesta->recursive = -1;
		$this->set('encuestas', $this->paginate('Encuesta', $conditions));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Encuesta->id = $id;
		if (!$this->Encuesta->exists()) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		$this->set('encuesta', $this->Encuesta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if($this->request->data['Encuesta']['folio']!=$this->request->data['Encuesta']['refolio']){
				$this->Session->setFlash(__('Los Folios no Coinciden.'),'flash_error');
			}else {
			
				$this->Encuesta->create();
				if ($this->Encuesta->save($this->request->data)) {
					$this->Session->setFlash(__('La Encuesta se ha guardado con exito'),'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Imposible guardar la encuesta.'),'flash_error');
					print_r($this->Encuesta->validationErrors);
				}
			
			}
			print_r($this->request->data);
		}
		$puestos = $this->Encuesta->Puesto->find('list');
		$this->set(compact('puestos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Encuesta->id = $id;
		if (!$this->Encuesta->exists()) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Encuesta->save($this->request->data)) {
				$this->Session->setFlash(__('La Encuesta se ha Editado con exito'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Imposible guardar la encuesta, intente de nuevo'), 'flash_error');
			}
		} else {
			$this->request->data = $this->Encuesta->read(null, $id);
		}
		$puestos = $this->Encuesta->Puesto->find('list');
		$this->set(compact('puestos'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Encuesta->id = $id;
		if (!$this->Encuesta->exists()) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		if ($this->Encuesta->delete()) {
			$this->Session->setFlash(__('Encuesta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Encuesta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}*/
}
