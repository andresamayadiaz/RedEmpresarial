<?php
App::uses('AppModel', 'Model');
/**
 * Config Model
 *
 */
class Config extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';
	
	
	
	
	
	
	function obtener($name = null, $default = null){
	
		if($name==null){
			return $default;
		}
		$valor = '';
		$valor = $this->find('first', array(
	        'fields'=>array('valor'),
			'conditions'=>array(
				'Config.nombre'=>$name
			)
		));
		
		if(isset($valor['Config']['valor'])){
			return $valor['Config']['valor'];
		}else {
			return $default;
		}
	
	}
	
	
}
