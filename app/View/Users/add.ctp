



<script>
			$('DOCUMENT').ready(function(){
				 $('#aceptar').attr('value',' Aceptar ');
				
				
				
				
				$('#UserAddForm').validate({
					rules: {
				    	'data[User][nombre]': "required",
				    	'data[User][username]': "required",
				    	'data[User][pass1]': "required",
				    	'data[User][pass2]': {
				    		required: true,
				    		equalTo: '#UserPass1'
				    	},
				    	'data[User][email]': {
				        	email: true,
				        	required: true
				        },
				        'data[User][rol]': {
				    		required: true,
      						min: 1
				    	}
				    },
					messages: {
						'data[User][nombre]': "<?php echo __('El campo Nombre es Obligatorio'); ?>",
				    	'data[User][username]': "<?php echo __('El campo Username es Obligatorio'); ?>",
				    	'data[User][pass1]': "<?php echo __('El campo Password es Obligatorio'); ?>",
				    	'data[User][pass2]': {
				    		required: "<?php echo __('El campo Confirmar Password es Obligatorio'); ?>",
				    		equalTo: "<?php echo __('Los Password deben de ser iguales'); ?>"
				    	},
				    	'data[User][email]': {
							required: "<?php echo __('El campo Email es Obligatorio'); ?>",
							email: "<?php echo __('Debe Introducir una direccion de Email Valida (example@email.com)'); ?>"
						},
				    	'data[User][rol]': {
				    		required: "<?php echo __('El campo Rol es Obligatorio'); ?>",
      						min: "<?php echo __('Debe Seleccionar una Opcion Valida'); ?>"
				    	}
					},
				    highlight: function(label) {
				    	$(label).closest('.control-group').addClass('error');
				    	$(label).closest('.control-group').removeClass('success');
				    },
				    success: function(label) {
				    	label
				    		.text('OK!').addClass('valid')
				    		.closest('.control-group').addClass('success');
				    }
				  });					
				
			});
			
</script>	







	<header class="jumbotron subhead" id="overview">
		<h1><?php echo __('Usuarios');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index'));?></li>
				
			</ul>
		</div>
	</header>
	
	
	
<div class="row">
	    <div class="span9">
	    	
	    	<div class="users form">
				<?php echo $this->Form->create('User', array('class' => 'well form-horizontal'));?>
					<fieldset>
						<legend><?php echo __('Agregar Usuario'); ?></legend>
						
						<div class="control-group">
							<label class="control-label"><?php echo __('Username'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('username',array('class'=>'input-xlarge', 'label'=>false, 'div' => false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Password'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('pass1',array('type'=>'password','label'=>false,'class'=>'input-large', 'div' => false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Confirmar Password'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('pass2',array('type'=>'password','label'=>false,'class'=>'input-large', 'div' => false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Email'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('email',array('class'=>'input-xlarge', 'div' => false,'label'=>false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Rol de Usuario'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('rol',array('options'=>$roles,'class'=>'input-xlarge', 'div' => false,'label'=>false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Nombre Completo'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('nombre',array('class'=>'input-xxlarge', 'div' => false,'label'=>false));?>
							</div>
						</div>
						
						
			
					</fieldset>
				<div class="form-actions"><?php 

                                			$options = array(
												'name' => __('Aceptar', true),
												'value'=> __('Aceptar', true),
												'class' => 'btn btn-primary',
												'id' => 'aceptar',
												'div' => false
											);
                                			echo $this->Form->end($options).' ';
											echo $this->Html->link(__('Cancelar '), array('action' => 'index'),array('class'=>'btn','escape' => false));?>
				</div>

			</div>
	    	
	    </div>
	    
	    
	    <div class="span3">
				
		
		<div class="sidebar nav">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li><strong><i class="icon-th"></i><?php echo __('Acciones'); ?></strong></li>
                		<li class="divider"></li>
					<li><?php echo $this->Html->link('<i class="icon-list-alt icon-black"></i> '.__('Listar Usuarios'), array('action' => 'index'),array('class'=>'','escape' => false)); ?></li>
										
				</ul>
			</div>
		</div>
		
		
		
	</div>
	    
	    
	   </div>
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    
