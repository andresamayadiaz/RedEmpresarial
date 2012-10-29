<?php
App::uses('AppController', 'Controller');
/**
 * Puestos Controller
 *
 * @property Puesto $Puesto
 */
class PuestosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Puesto->recursive = 0;
		$this->set('puestos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Puesto->id = $id;
		if (!$this->Puesto->exists()) {
			throw new NotFoundException(__('Invalid puesto'));
		}
		$this->set('puesto', $this->Puesto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Puesto->create();
			if ($this->Puesto->save($this->request->data)) {
				$this->Session->setFlash(__('The puesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The puesto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Puesto->id = $id;
		if (!$this->Puesto->exists()) {
			throw new NotFoundException(__('Invalid puesto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Puesto->save($this->request->data)) {
				$this->Session->setFlash(__('The puesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The puesto could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Puesto->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Puesto->id = $id;
		if (!$this->Puesto->exists()) {
			throw new NotFoundException(__('Invalid puesto'));
		}
		if ($this->Puesto->delete()) {
			$this->Session->setFlash(__('Puesto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Puesto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
