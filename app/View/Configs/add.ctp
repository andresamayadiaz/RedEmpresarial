



<script>
			$('DOCUMENT').ready(function(){
				 $('#aceptar').attr('value',' Aceptar ');
				
				
				
				
				$('#ConfigAddForm').validate({
					rules: {
				    	'data[Config][nombre]': "required",
				    	'data[Config][valor]': "required",
				    	'data[Config][descripcion]': "required"
				    },
					messages: {
						'data[Config][nombre]': "<?php echo __('El campo Nombre es Obligatorio'); ?>",
				    	'data[Config][valor]': "<?php echo __('El campo Valor es Obligatorio'); ?>",
				    	'data[Config][descripcion]': "<?php echo __('El campo Descripcion es Obligatorio'); ?>"
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
		<h1><?php echo __('Configs');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
								<li>
					<?php echo $this->Html->link(__('Listar Configs'), array('action' => 'index'));?>				</li>
			</ul>
		</div>
	</header>
	
	
<div class="row">
	    <div class="span9">
	    	
	    	<div class="configs form">
				<?php echo $this->Form->create('Config', array('class' => 'well form-horizontal'));?>
					<fieldset>
						<legend><?php echo __('Agregar Config'); ?></legend>
						
						<div class="control-group">
							<label class="control-label"><?php echo __('Nombre'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('nombre',array('class'=>'input-xxlarge', 'label'=>false, 'div' => false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Valor'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('valor',array('class'=>'input-xxlarge', 'label'=>false, 'div' => false));?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><?php echo __('Descripcion'); ?>: </label>
							<div class="controls">
								<?php echo $this->Form->input('descripcion',array('type'=>'textarea','rows'=>'3','class'=>'input-xxlarge', 'label'=>false, 'div' => false));?>
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
</div>			</div>
	    	
	    </div>
	    
	    
	    <div class="span3">
				
		
		<div class="sidebar nav">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li><strong><i class="icon-th"></i><?php echo __('Acciones'); ?></strong></li>
                		<li class="divider"></li>
					<li><?php echo $this->Html->link('<i class="icon-list-alt icon-black"></i> '.__('Listar Configs'), array('action' => 'index'),array('class'=>'','escape' => false)); ?></li>
										
				</ul>
			</div>
		</div>
		
		
		
	</div>
	    
	    
	   </div>
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    	
	    
