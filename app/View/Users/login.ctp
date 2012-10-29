
<script>
			$('DOCUMENT').ready(function(){
				 $('#aceptar').attr('value',' Entrar ');
				 
				 
				 $('#recPass').click(function(){
				 	//$('#myPass').modal('hide');
				 					 	
					if($('#usernamePass').attr('value')!=''){
						
						$('#espere').css('display','inline');
						
					 	$.ajax({
							type:"POST",
							dataType:"JSON",
							url:"<?php echo $this->Html->base;  ?>/users/recuperarPass/",
							data:'data[username]='+$('#usernamePass').attr('value'), 
							success:function(datos){
								$('#espere').css('display','none');
								if (datos.exito=='1'){
									$('#myPass').modal('hide');
			                        alert(datos.msg);
								}else{
									alert(datos.msg);
			                    }
							}
						});
					}else{
						alert('Debe introducir un Username');
					};
				 	
				 	
				 });
				
				
				
				
				
			});
			
</script>	


<header class="jumbotron subhead" id="overview">
	<h1><?php echo $nombreSistema;?></h1>
	<p class="lead">Bienvenido al Sistema.</p>
	
</header>

<div class="row">
		
		
	    <div class="span10">

				<?php echo $this->Form->create('User', array('class' => 'well form-horizontal'));?>
						<fieldset>
					 		<legend><?php printf(__('Ingresa tus Datos', true)); ?></legend>
					 		
					 			<div class="control-group">
									<div class="controls">
					 					<?php echo $this->Form->input('username', array('label' => 'Username','style'=>'','class'=>'input-large')); ?>
					 				</div>
					 			</div>
					 			
					 			<div class="control-group">
									<div class="controls">
					        			<?php echo $this->Form->input('password',array('id' => 'password','style'=>'','class'=>'input-large'));?>
					        		</div>
					        	</div>
							
						</fieldset>
						
						
						
				<div class="form-actions">
					<?php 
					
					$options = array(
				
						     'name' => __('Aceptar', true),
						
						     'value'=> __('Aceptar', true),
						
						     'class' => 'btn btn-primary',
						
						     'id' => 'aceptar',
						
						     'div' => false
						
						     );
						
						     echo $this->Form->end($options);
					
					
					//echo $this->Form->end(__('Entrar', true));?>
					
					
					<div id="myPass" class="modal hide fade">
			        	<div class="modal-header">
			            	<button class="close" data-dismiss="modal">&times;</button>
			            	<h3><?php echo $nombreSistema;  ?></h3>
			            </div>
			            <div class="modal-body">
			            	<h4>Recuperar Contraseña</h4><br/>
			              	<p>Para recuperar tu contrase–a Introduce tu username y da click en "Recuperar Contraseña", tu nueva contrase–a se enviara a tu correo electronico y podras cambiarla una vez que acceses al sistema.</p>
							
			           		<h4>Username</h4>
			           		
								<div class="input-prepend">
									
						           		<span class="add-on">
											<i class="icon-user"></i>
										</span>
						            	<input id="usernamePass" class="input-large" type="text" maxlength="255" >
						            
						        </div>
						   
					       		<span id="espere" style="display:none;" class="label label-warning">Espere un momento...</span>
			            	<br/>
			           </div>
			           <div class="modal-footer">
			           		<a id="recPass" href="#" class="btn btn-primary"><i class="icon-ok icon-black"></i> Recuperar Contraseña</a>
			           		<a href="#" class="btn" data-dismiss="modal" ><i class="icon-remove icon-black"></i> Cerrar</a>
			           </div>
			        </div>
					
					<div align="right">
						<a data-toggle="modal" href="#myPass">Olvide mi contraseña ! ! !</a>
					</div>
					
				</div>
					

		</div>
		
		<div class="span2">
		</div>
</div>