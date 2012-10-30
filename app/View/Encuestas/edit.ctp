<?php echo $this->Form->create('Encuesta', array('class' => 'well'));?>
    	<legend>Datos Generales</legend>
    	
    	<div class="row-fluid span9">
	        <div class="span3">
		         <label>Folio</label>
		         <!-- <input name="data[Encuesta][folio]" type="text" placeholder="Folio"> -->
		         <?php echo $this->Form->input('folio',array('readonly'=>'readonly', 'type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Folio'));?>
	        </div>
        </div><!--/row-->
    	
    	<div class="row-fluid span9">
	        <div class="span3">
		         <label>Nombre(s)</label>
		         <!-- <input name="data[Encuesta][nombre]" type="text" placeholder="Nombre(s)">-->
		         <?php echo $this->Form->input('nombre',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Nombre(s)'));?>
	        </div>
	        <div class="span3">
		         <label>Apellido Paterno</label>
		         <!-- <input name="data[Encuesta][apepaterno]" type="text" placeholder="Apellido Paterno"> -->
		         <?php echo $this->Form->input('apepaterno',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Apellido Paterno'));?>
	        </div>
	        <div class="span3">
		         <label>Apellido Materno</label>
		         <!-- <input name="data[Encuesta][apematerno]" type="text" placeholder="Apellido Materno"> -->
		         <?php echo $this->Form->input('apematerno',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Apellido Materno'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Nombre del negocio</label>
		         <!-- <input name="data[Encuesta][nombrenegocio]" type="text" class="input-xxlarge" placeholder="Nombre Negocio"> -->
		         <?php echo $this->Form->input('nombrenegocio',array('type'=>'text','label'=>false,'class'=>'input-xxlarge', 'div' => false, 'placeholder'=>'Nombre Negocio'));?>
	        </div>
	        <div class="span3">
		         <label>Giro del negocio</label>
		         <!-- <input name="data[Encuesta][gironegocio]" type="text" placeholder="Giro Negocio"> -->
		         <?php echo $this->Form->input('gironegocio',array('type'=>'text','label'=>false,'class'=>'Giro Negocio', 'div' => false, 'placeholder'=>'Giro Negocio'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span9">
		         <label>Calle</label>
		         <!-- <input name="data[Encuesta][calle]" type="text" class="input-xxlarge" placeholder="Calle"> -->
		         <?php echo $this->Form->input('calle',array('type'=>'text','label'=>false,'class'=>'input-xxlarge', 'div' => false, 'placeholder'=>'Calle'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span9">
		         <label>Entre Calles</label>
		         <!-- <input name="data[Encuesta][entrecalles]" type="text" class="input-xxlarge" placeholder="Entre Calles"> -->
		         <?php echo $this->Form->input('entrecalles',array('type'=>'text','label'=>false,'class'=>'input-xxlarge', 'div' => false, 'placeholder'=>'Entre Calles'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span3">
		         <label>Numero</label>
		         <!-- <input name="data[Encuesta][numero]" type="text" placeholder="Numero"> -->
		         <?php echo $this->Form->input('numero',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Numero'));?>
	        </div>
	        <div class="span3">
		         <label>Interior / Exterior / Edificio</label>
		         <!-- <input name="data[Encuesta][interior]" type="text" placeholder="Interior / Edificio"> -->
		         <?php echo $this->Form->input('interior',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Interior/Exterior/Edificio'));?>
	        </div>
	        <div class="span3">
		         <label>Telefono(s)</label>
		         <!-- <input name="data[Encuesta][telefono]" type="text" placeholder="Telefono(s)"> -->
		         <?php echo $this->Form->input('telefono',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Telefono(s)'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span3">
		         <label>Colonia</label>
		         <!-- <input name="data[Encuesta][colonia]" type="text" placeholder="Colonia"> -->
		         <?php echo $this->Form->input('colonia',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Colonia'));?>
	        </div>
	        <div class="span3">
		         <label>Correo Electronico</label>
		         <!-- <input name="data[Encuesta][email]" type="text" placeholder="Correo Electronico">-->
		         <?php echo $this->Form->input('email',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Correo Electronico'));?>
	        </div>
	        <div class="span3">
		         <label>Pagina Web</label>
		         <!-- <input name="data[Encuesta][pweb]" type="text" placeholder="Pagina Web"> -->
		         <?php echo $this->Form->input('pweb',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Pagina Web'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Puesto</label>
		         <?php echo $this->Form->input('puesto_id',array('options'=>$puestos,'class'=>'input-xlarge', 'div' => false,'label'=>false));?>
		         <!-- <input name="data[Encuesta][otropuesto]" type="text" placeholder="Otro, Especifique"> -->
		         <?php echo $this->Form->input('otropuesto',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Otro, Especifique'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
        	<button class="btn btn-primary pull-right" type="submit">Guardar</button>
        </div>

        <legend>Cuestionario Inicial</legend>
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>1.- ¿Que tipo de empresa es su negocio?</label>
		         <label class="radio">
				<!-- <input type="radio" name="data[Encuesta][tipoempresa]" id="optionsRadios1" value="Moral" checked> -->
				<?php echo $this->Form->radio('tipoempresa',array('Moral' => 'Moral', 'Fisica' => 'Fisica', 'Otro' => 'Otro'), array('legend' => false, 'div' => false));?>
				<!-- Moral
				</label>
				<label class="radio">
				<!-- <input type="radio" name="data[Encuesta][tipoempresa]" id="optionsRadios2" value="Fisica">-->
				Otro, especifique
				</label>
				<!-- <input name="data[Encuesta][tipoempresaotro]" type="text" placeholder="Especifique"> -->
				<?php echo $this->Form->input('tipoempresaotro',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Especifique'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>2.- Este establecimiento es:</label>
		         <label class="radio">
				<?php echo $this->Form->radio('estabes',array('Unico' => 'Unico', 'Sucursal' => 'Sucursal'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->

        <div class="row-fluid span9">
	        <div class="span6">
		         <label>3.- ¿Cuál de las siguientes opciones describe mejor la actividad de este establecimiento?</label>
		         <label class="radio">
		         <?php echo $this->Form->radio('actividad',array('1' => '1) Comercio de Mercancías', '2' => '2) Manufactura', '3' => '3) Preparación de Alimentos', '4' => '4) Servicios', '5'=>'5)Transporte de Personas y/o Bienes', '6'=>'6) Construcción', '7'=>'7) Crédito o Ahorro', '8'=>'8) Otras Actividades, especifique'), array('legend' => false, 'div' => false));?>
				</label>
				<input name="data[Encuesta][actividadotro]" type="text" placeholder="Especifique">
	        </div>
        </div><!--/row-->
        
        <legend>Cuestionario General</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>4.- ¿Pertenece su empresa a alguna Cámara de la Entidad?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('camara',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>5.- Si contesto positivo, ¿A que Cámara pertenece?</label>
		         <!-- <input name="data[Encuesta][camarasi]" type="text" class="input-xlarge" placeholder="Type something…">-->
		         <?php echo $this->Form->input('camarasi',array('type'=>'text','label'=>false,'class'=>'', 'div' => false, 'placeholder'=>'Especifique'));?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>6.- Si pertenece a una Cámara, ¿A recibido algún curso / taller / servicio / apoyo de la misma?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('camararecibido',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->

        <legend>Cuestionario De Servicios Gratuitos</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>7.- ¿Le gustaría recibir de forma gratuita apoyo en gestiones de Créditos?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('creditos',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>8.- ¿Le gustaría recibir de forma gratuita apoyo en Enlaces de Negocios?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('enlaces',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>9.- ¿Le gustaría recibir de forma gratuita apoyo en Becas de Estudio para el personal que labora en tu empresa?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('becasestudio',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>10.- ¿Le gustaría recibir de forma gratuita apoyo con Bases de Datos de interés? (Estudios de Mercado)</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('basesdatos',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>11.- ¿Le gustaría recibir de forma gratuita servicio Juridíco?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('juridico',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>12.- ¿Le gustaría recibir de forma gratuita servicio de Ventanilla Única?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('ventanillaunica',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>13.- ¿Le gustaría recibir de forma gratuita servicio del Censo Empresarial? (Pertenecer a la base de datos del unidades económicas del Municipio)</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('censo',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>14.- ¿Le gustaría recibir de forma gratuita cursos (Téorico / Empresarial ) de Belleza?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('belleza',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>15.- ¿Le gustaría recibir de forma gratuita cursos (Téorico / Empresarial ) de Diseño de Modas (Alta Costura)?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('modas',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>16.- ¿Le gustaría recibir de forma gratuita cursos de Desarrollo de Aplicaciones Móviles?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('appmoviles',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>17.- ¿Le gustaría recibir de forma gratuita acceso a Salas de Juntas para tu empresa?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('salajuntas',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>18.- ¿Le gustaría recibir de forma gratuita cursos de Ingles para el personal que labora en tu empresa?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('cursoingles',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>19.- ¿Le gustaría aparecer de forma gratuita en la Revista Electrónica del Municipio? (revista digital para promocion de programas y empresas)</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('revista',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>20.- ¿Le gustaría recibir de forma gratuita los servicio y apoyos para Economias de Escala? (union de varios compradores para recibir costros preferenciales de un proveedor)</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('econoescala',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>21.- ¿Le gustaría recibir de forma gratuita apoyo para Desarrollo de Proveedores?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('desproveedores',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>22.- ¿Le gustaría recibir de forma gratuita cursos y apoyo para Distintivo M y Distintivo H?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('distintivos',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <legend>Cuestionario de Servicios con Costo de Recuperación</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>23.- ¿Le gustaría recibir asesoría de Facturación Electrónica?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('felectronica',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>24.- ¿Le gustaría recibir asesoría en Exportación?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('exportacion',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>25.- ¿Le gustaría recibir asesoría en Contabilidad?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('contabilidad',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>26.- ¿Le gustaría recibir asesoría y apoyo con Estudios de Mercado para tu Inversión?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('estudiosmercado',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>27.- ¿Le gustaría recibir asesoría y apoyo bajo el programa Incubadora de Negocios?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('incubadora',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>28.- ¿Le gustaría recibir asesoría y apoyo en Diseño de Páginas Web?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('dispagweb',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>29.- ¿Le gustaría recibir asesoría y apoyo en Hosting y Dominio en un Servidor?</label>
		         <label class="radio inline">
				<?php echo $this->Form->radio('hosting',array('Si' => 'Si', 'No' => 'No'), array('legend' => false, 'div' => false));?>
				</label>
	        </div>
        </div><!--/row-->
        
        <legend>Observaciones</legend>
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Observaciones</label>
		         <!-- <textarea name="data[Encuesta][observaciones]" rows="4" class="input-xxlarge"></textarea> -->
		         <?php echo $this->Form->textarea('observaciones', array('class'=>'input-xxlarge')); ?>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
        	<button class="btn btn-primary pull-right" type="submit">Guardar</button>
        </div>
        
    	</form>