<?php
App::uses('AppController', 'Controller');
/**
 * Encuestas Controller
 *
 * @property Encuesta $Encuesta
 */
class EncuestasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Encuesta->recursive = 0;
		$this->set('encuestas', $this->paginate());
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
			/*
			$this->Encuesta->create();
			if ($this->Encuesta->save($this->request->data)) {
				$this->Session->setFlash(__('La Encuesta se ha guardado con exito'),'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Imposible guardar la encuesta.'),'flash_error');
			}
			*/
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
				$this->Session->setFlash(__('The encuesta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encuesta could not be saved. Please, try again.'));
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
