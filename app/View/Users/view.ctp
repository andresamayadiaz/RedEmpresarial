

	<header class="jumbotron subhead" id="overview">
		<h1><?php echo __('Usuarios');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $user['User']['id']), null, __('Esta Seguro de Eliminar el Usuario # %s ?', $user['User']['username'])); ?> 				</li>
				<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</header>




<div class="row">
	 <div class="span9">
	 	<div class="well_view form-horizontal" id="forms">
			<fieldset>
						<legend><?php  echo __('Datos de Usuario');?></legend>
			<div class="users view">
			
				<div class="control-group">
					<label class="control-label"><?php echo __('Id'); ?>: </label>
					<div class="controls">
						<input class="input-medium disabled" readonly="readonly" type="text" value="<?php echo $user['User']['id']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Username'); ?>: </label>
					<div class="controls">
						<input class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo $user['User']['username']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Email'); ?>: </label>
					<div class="controls">
						<input class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo $user['User']['email']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Rol de Usuario'); ?>: </label>
					<div class="controls">
						<input class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo $roles[($user['User']['rol'])]; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Status'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $status[($user['User']['status'])]; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Nombre Completo'); ?>: </label>
					<div class="controls">
						<input class="input-xxlarge disabled" readonly="readonly" type="text" value="<?php echo $user['User']['nombre']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Fecha de Creacion'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $user['User']['created']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Fecha de Modificacion'); ?>: </label>
					<div class="controls">
						<input class="input-large disabled" readonly="readonly" type="text" value="<?php echo $user['User']['modified']; ?>" />
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
						<li><?php echo $this->Html->link('<i class="icon-plus icon-black"></i> '.__('Nuevo Usuario'), array('action' => 'add'),array('class'=>'','escape' => false)); ?></li>
						<li><?php echo $this->Html->link('<i class="icon-list-alt icon-black"></i> '.__('Listar Usuarios'), array('action' => 'index'),array('class'=>'','escape' => false)); ?></li>
						<li><?php echo $this->Html->link('<i class="icon-pencil icon-black"></i> '.__('Editar Usuario'), array('action' => 'edit', $user['User']['id']),array('class'=>'','escape' => false)); ?></li>
						<li><?php echo $this->Form->postLink('<i class="icon-trash icon-black"></i> '.__('Eliminar Usuario'), array('action' => 'delete', $user['User']['id']),array('class'=>'','escape' => false), __('Esta Seguro de Eliminar el Usuario: %s ?', $user['User']['username'])); ?></li>
									
				</ul>
			</div>
		</div>
		
	</div>
	
	
</div>






