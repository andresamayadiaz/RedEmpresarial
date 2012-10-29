<?php echo $this->Form->create('Encuesta', array('class' => 'well'));?>
    	<legend>Datos Generales</legend>
    	
    	<div class="row-fluid span9">
	        <div class="span3">
		         <label>Folio</label>
		         <input name="data[Encuesta][Folio]" type="text" placeholder="Folio">
	        </div>
	        <div class="span3">
		         <label>Repetir Folio</label>
		         <input name="data[Encuesta][Refolio]" type="text" placeholder="Folio">
	        </div>
        </div><!--/row-->
    	
    	<div class="row-fluid span9">
	        <div class="span3">
		         <label>Nombre(s)</label>
		         <input name="data[Encuesta][nombre]" type="text" placeholder="Nombre(s)">
	        </div>
	        <div class="span3">
		         <label>Apellido Paterno</label>
		         <input name="data[Encuesta][apepaterno]" type="text" placeholder="Apellido Paterno">
	        </div>
	        <div class="span3">
		         <label>Apellido Materno</label>
		         <input name="data[Encuesta][apematerno]" type="text" placeholder="Apellido Materno">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Nombre del negocio</label>
		         <input name="data[Encuesta][nombrenegocio]" type="text" class="input-xxlarge" placeholder="Nombre Negocio">
	        </div>
	        <div class="span3">
		         <label>Giro del negocio</label>
		         <input name="data[Encuesta][gironegocio]" type="text" placeholder="Giro Negocio">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span9">
		         <label>Calle</label>
		         <input name="data[Encuesta][calle]" type="text" class="input-xxlarge" placeholder="Calle">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span9">
		         <label>Entre Calles</label>
		         <input name="data[Encuesta][entrecalles]" type="text" class="input-xxlarge" placeholder="Entre Calles">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span3">
		         <label>Numero</label>
		         <input name="data[Encuesta][numero]" type="text" placeholder="Numero">
	        </div>
	        <div class="span3">
		         <label>Interior / Exterior / Edificio</label>
		         <input name="data[Encuesta][interior]" type="text" placeholder="Interior / Edificio">
	        </div>
	        <div class="span3">
		         <label>Telefono(s)</label>
		         <input name="data[Encuesta][telefono]" type="text" placeholder="Telefono(s)">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span3">
		         <label>Colonia</label>
		         <input name="data[Encuesta][colonia]" type="text" placeholder="Colonia">
	        </div>
	        <div class="span3">
		         <label>Correo Electronico</label>
		         <input name="data[Encuesta][email]" type="text" placeholder="Correo Electronico">
	        </div>
	        <div class="span3">
		         <label>Pagina Web</label>
		         <input name="data[Encuesta][pweb]" type="text" placeholder="Pagina Web">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Puesto</label>
		         <?php echo $this->Form->input('puesto',array('options'=>$puestos,'class'=>'input-xlarge', 'div' => false,'label'=>false));?>
		         <input name="data[Encuesta][otropuesto]" type="text" placeholder="Otro, Especifique">
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
				<input type="radio" name="data[Encuesta][tipoempresa]" id="optionsRadios1" value="Moral" checked>
				Moral
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][tipoempresa]" id="optionsRadios2" value="Fisica">
				Fisica
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][tipoempresa]" id="optionsRadios2" value="Otro">
				Otro, especifique
				</label>
				<input name="data[Encuesta][tipoempresaotro]" type="text" placeholder="Especifique">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>2.- Este establecimiento es:</label>
		         <label class="radio">
				<input type="radio" name="data[Encuesta][estabes]" id="optionsRadios1" value="Unico" checked>
				Unico
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][estabes]" id="optionsRadios2" value="Sucursal">
				Sucursal
				</label>
	        </div>
        </div><!--/row-->

        <div class="row-fluid span9">
	        <div class="span6">
		         <label>3.- ¿Cuál de las siguientes opciones describe mejor la actividad de este establecimiento?</label>
		         <label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios1" value="option1" checked>
				1) Comercio de Mercancías
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				2) Manufactura
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				3) Preparación de Alimentos
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				4) Servicios
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				5)Transporte de Personas y/o Bienes
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				6) Construcción
				</label>
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				7) Crédito o Ahorro
				</label>
				
				<label class="radio">
				<input type="radio" name="data[Encuesta][actividad]" id="optionsRadios2" value="option2">
				8) Otras Actividades, especifique
				</label>
				<input name="data[Encuesta][actividadotro]" type="text" placeholder="Especifique">
	        </div>
        </div><!--/row-->
        
        <legend>Cuestionario General</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>4.- ¿Pertenece su empresa a alguna Cámara de la Entidad?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][camara]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][camara]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>5.- Si contesto positivo, ¿A que Cámara pertenece?</label>
		         <input name="data[Encuesta][camarasi]" type="text" class="input-xlarge" placeholder="Type something…">
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>6.- Si pertenece a una Cámara, ¿A recibido algún curso / taller / servicio / apoyo de la misma?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][camararecibido]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][camararecibido]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->

        <legend>Cuestionario De Servicios Gratuitos</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>7.- ¿Le gustaría recibir de forma gratuita apoyo en gestiones de Créditos?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][creditos]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][creditos]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>8.- ¿Le gustaría recibir de forma gratuita apoyo en Enlaces de Negocios?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][enlaces]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][enlaces]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>9.- ¿Le gustaría recibir de forma gratuita apoyo en Becas de Estudio para el personal que labora en tu empresa?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][becasestudio]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][becasestudio]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>10.- ¿Le gustaría recibir de forma gratuita apoyo con Bases de Datos de interés? (Estudios de Mercado)</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][basesdatos]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][basesdatos]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>11.- ¿Le gustaría recibir de forma gratuita servicio Juridíco?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][juridico]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][juridico]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>12.- ¿Le gustaría recibir de forma gratuita servicio de Ventanilla Única?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][ventanillaunica]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][ventanillaunica]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>13.- ¿Le gustaría recibir de forma gratuita servicio del Censo Empresarial? (Pertenecer a la base de datos del unidades económicas del Municipio)</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][censo]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][censo]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>14.- ¿Le gustaría recibir de forma gratuita cursos (Téorico / Empresarial ) de Belleza?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][belleza]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][belleza]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>15.- ¿Le gustaría recibir de forma gratuita cursos (Téorico / Empresarial ) de Diseño de Modas (Alta Costura)?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][modas]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][modas]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>16.- ¿Le gustaría recibir de forma gratuita cursos de Desarrollo de Aplicaciones Móviles?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][appmoviles]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][appmoviles]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>17.- ¿Le gustaría recibir de forma gratuita acceso a Salas de Juntas para tu empresa?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][salajuntas]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][salajuntas]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>18.- ¿Le gustaría recibir de forma gratuita cursos de Ingles para el personal que labora en tu empresa?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][cursoingles]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][cursoingles]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>19.- ¿Le gustaría aparecer de forma gratuita en la Revista Electrónica del Municipio? (revista digital para promocion de programas y empresas)</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][revista]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][revista]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>20.- ¿Le gustaría recibir de forma gratuita los servicio y apoyos para Economias de Escala? (union de varios compradores para recibir costros preferenciales de un proveedor)</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][econoescala]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][econoescala]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>21.- ¿Le gustaría recibir de forma gratuita apoyo para Desarrollo de Proveedores?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][desproveedores]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][desproveedores]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>22.- ¿Le gustaría recibir de forma gratuita cursos y apoyo para Distintivo M y Distintivo H?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][distintivos]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][distintivos]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <legend>Cuestionario de Servicios con Costo de Recuperación</legend>
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>23.- ¿Le gustaría recibir asesoría de Facturación Electrónica?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][felectronica]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][felectronica]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>24.- ¿Le gustaría recibir asesoría en Exportación?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][exportacion]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][exportacion]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>25.- ¿Le gustaría recibir asesoría en Contabilidad?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][contabilidad]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][contabilidad]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>26.- ¿Le gustaría recibir asesoría y apoyo con Estudios de Mercado para tu Inversión?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][estudiosmercado]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][estudiosmercado]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>27.- ¿Le gustaría recibir asesoría y apoyo bajo el programa Incubadora de Negocios?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][incubadora]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][incubadora]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>28.- ¿Le gustaría recibir asesoría y apoyo en Diseño de Páginas Web?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][dispagweb]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][dispagweb]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>29.- ¿Le gustaría recibir asesoría y apoyo en Hosting y Dominio en un Servidor?</label>
		         <label class="radio inline">
				<input type="radio" name="data[Encuesta][hosting]" id="optionsRadios1" value="Si" checked>
				Sí
				</label>
				<label class="radio inline">
				<input type="radio" name="data[Encuesta][hosting]" id="optionsRadios2" value="No">
				No
				</label>
	        </div>
        </div><!--/row-->
        
        <legend>Observaciones</legend>
        <div class="row-fluid span9">
	        <div class="span6">
		         <label>Observaciones</label>
		         <textarea name="data[Encuesta][observaciones]" rows="4" class="input-xxlarge"></textarea>
	        </div>
        </div><!--/row-->
        
        <div class="row-fluid span9">
        	<button class="btn btn-primary pull-right" type="submit">Guardar</button>
        </div>
        
    	</form>