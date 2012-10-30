<?php
App::uses('AppController', 'Controller');
/**
 * Encuestas Controller
 *
 * @property Encuesta $Encuesta
 */
class EncuestasController extends AppController {


	public function imprimir($id = null){
		$this->Encuesta->recursive = 0;
		$this->Encuesta->id = $id;
		if (!$this->Encuesta->exists()) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		//$this->layout = 'pdf';
		$encuesta = $this->Encuesta->find('first', array(
			'conditions' => array('Encuesta.id'=>$id),
			'recursive' => -1
		));
		//$this->set('encuesta', $this->Encuesta->read(null, $id));
		
		App::import('Vendor', 'ReciboPdf');
		//App::import('Vendor', 'tcpdf/tcpdf');
		$pdf = new ReciboPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$background_color = array(255, 255, 255);
		$pdf -> background_color = $background_color;
		
		$pdf -> SetCreator(PDF_CREATOR);
		$pdf -> SetAuthor('Red Empresarial');
		$pdf -> SetTitle('Recibo Red Empresarial');
		$pdf -> SetSubject('Recibo Red Empresarial');
		$pdf -> SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$pdf -> setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		$pdf -> AddPage();
		
		$pdf->setJPEGQuality(75);
		$pdf->Image('/var/www/redempresarial/app/webroot/img/recibo.png', 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
		
		$x = 5;
		$y = 40;
		$renglon = 16;
		
		// Lugar y Fecha
		$pdf -> Text($x, $y, $encuesta['Encuesta']['created']);
		$y += $renglon;
		// Nombre o Razon Social
		$pdf -> Text($x, $y, $encuesta['Encuesta']['nombrenegocio']);
		$y += $renglon;
		// Nombre del Censado
		$pdf -> Text($x, $y, $encuesta['Encuesta']['nombre'].' '.$encuesta['Encuesta']['apepaterno'].' '.$encuesta['Encuesta']['apematerno']);
		$y += $renglon;
		// RFC Empresa
		$pdf -> Text($x, $y, "");
		$y += $renglon;
		// Curp
		$pdf -> Text($x, $y, "");
		// EMail
		$pdf -> Text($x+98, $y, $encuesta['Encuesta']['email']);
		$y += $renglon;
		// Telefono
		$pdf -> Text($x, $y, $encuesta['Encuesta']['telefono']);
		// Fax
		$pdf -> Text($x+98, $y, "");
		$y += $renglon;
		// Organismo Intermedio
		$pdf -> Text($x, $y, "");
		$y += $renglon;
		// Folio del proyecto
		$pdf -> Text($x, $y, "");
		$y += $renglon;
		// Nombre del Proyecto
		$pdf -> Text($x, $y, "");
		$y += $renglon;
		// Catego
		$pdf -> Text($x, $y, "");
		$y += $renglon;
		// Concepto de Apoyo
		$pdf -> Text($x, $y, "");
		
		$pdf -> Output('Recibo_'.$encuesta['Encuesta']['folio'].'.pdf', 'D');
		
		$this -> autoRender = false;
		$this -> response -> type('pdf');
		
		
	}

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
