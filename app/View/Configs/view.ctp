

<header class="jumbotron subhead" id="overview">
		<h1><?php echo __('Configs');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('Editar Config'), array('action' => 'edit', $config['Config']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Eliminar Config'), array('action' => 'delete', $config['Config']['id']), null, __('Esta Seguro de Eliminar el Config: %s?', $config['Config']['nombre'])); ?> 				</li>
				<li><?php echo $this->Html->link(__('Listar Configs'), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Nuevo Config'), array('action' => 'add')); ?> 	</li>
			</ul>
		</div>
	</header>




<div class="row">
	 <div class="span9">
	 	<div class="well_view form-horizontal" id="forms">
			<fieldset>
						<legend><?php  echo __('Ver Config');?></legend>
			<div class="configs view">
				
				
				<div class="control-group">
					<label class="control-label"><?php echo __('Id'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $config['Config']['id']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Nombre'); ?>: </label>
					<div class="controls">
						<input class="input-xxlarge disabled" readonly="readonly" type="text" value="<?php echo $config['Config']['nombre']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Valor'); ?>: </label>
					<div class="controls">
						<input class="input-xxlarge disabled" readonly="readonly" type="text" value="<?php echo $config['Config']['valor']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Descripcion'); ?>: </label>
					<div class="controls">
						<textarea id="textarea" class="input-xxlarge disabled" readonly="readonly" rows="3"><?php echo $config['Config']['descripcion']; ?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Fecha de Creacion'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $config['Config']['created']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Fecha de Modificacion'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $config['Config']['modified']; ?>" />
					</div>
				</div>
			
			</dl>
			</div>
			</fieldset>
		</div>
	</div>
	
	<div class="span3">
		
		
		<div class="sidebar nav">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li><strong><i class="icon-th"></i><?php echo __('Acciones'); ?></strong></li>
                		<li class="divider"></li>
					<li><?php echo $this->Html->link('<i class="icon-plus icon-black"></i> '.__('Nuevo Config'), array('action' => 'add'),array('class'=>'','escape' => false)); ?></li>
					<li><?php echo $this->Html->link('<i class="icon-list-alt icon-black"></i> '.__('Listar Configs'), array('action' => 'index'),array('class'=>'','escape' => false)); ?></li>
					<li><?php echo $this->Html->link('<i class="icon-pencil icon-black"></i> '.__('Editar Config'), array('action' => 'edit', $config['Config']['id']),array('class'=>'','escape' => false)); ?></li>
					<li><?php echo $this->Form->postLink('<i class="icon-trash icon-black"></i> '.__('Eliminar Config'), array('action' => 'delete', $config['Config']['id']),array('class'=>'','escape' => false), __('Esta Seguro de Eliminar el Config: %s?', $config['Config']['nombre'])); ?></li>
									
				</ul>
			</div>
		</div>
		
	</div>
	
	
</div>






