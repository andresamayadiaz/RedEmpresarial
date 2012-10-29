
<?php 
/*
if(isset($data)){
    $this->Paginator->options(array('url' => $data));
}*/

?>
	
<?php

$this->Paginator->options(array('url' => $this->request->params['named']));
$username= '';
if(isset($this->request->params['named']['username']))
{ 
	$username = $this->request->params['named']['username'];
}

?>


<script>
			$('DOCUMENT').ready(function(){
				 $('#aceptar').attr('value',' Buscar ');
									
				
			});
			
</script>	



	<header class="jumbotron subhead" id="overview">
		<h1><?php echo __('Usuarios');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?>	</li>
				
			</ul>
		</div>
	</header>
	
	
	
						<?php //configurador 
		                   /*$usuario='';
		                     if(isset($this->params['data']['username'])) 
		                        $usuario = $this->params['data']['username']; 
		                     elseif(isset($this->Paginator->options['url']['username'])) 
		                        $usuario = $this->Paginator->options['url']['username'];*/
		                        ?>   
		                        
		                        
	
	
	<div class="users form">
		<?php //echo $this->Form->create('User', array('class' => 'form-horizontal'));?>
		<?php echo $this->Form->create(null, array('type' => 'post', 'controller' => 'users', 'action' => 'indexsearch', 'div' => 'false', 'class' => 'form-horizontal'));?>
			<fieldset>
				<legend></legend>
		
    		
		                        
						<div class="control-group">
							<label class="control-label" for="Username"><?php echo __('Username:');?></label>
							<div class="controls">
								<!--<input id="username" type="text" name="data[User][username]" value="<?php echo $usuario; ?>">-->
								<?php
								
					        		echo $this->Form->input('username', array('div' => false, 'class' => 'input-medium search-query', 'placeholder' => 'Search User', 'label' => false, 'type'=>'text', 'value' => $username));	
					        	?>
						
										<?php 
											$options = array(
												'name' => __('Aceptar', true),
												'value'=> __('Aceptar', true),
												'class' => 'btn btn-success',
												'id' => 'aceptar',
												'div' => false
											);
                                			echo $this->Form->end($options);?> 
		
							</div>
								<div align="right">
									<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Nuevo Usuario'), array('action' => 'add'),array('class'=>'btn btn-success','escape' => false)); ?>		
								</div>
					
						</div>	
						
						
						
				</fieldset>
						
	</div>



		
	
		

	



    <hr>  
	<div id="contenedorpaginado">
		<table class="table table-striped table-bordered table-condensed">
            <thead>
            	<tr>
									<th><?php echo $this->Paginator->sort('id', __('Id'));?></th>
									<th><?php echo $this->Paginator->sort('username', __('Username'));?></th>
									
									<th><?php echo $this->Paginator->sort('email', __('Email'));?></th>
									<th><?php echo $this->Paginator->sort('rol', __('Rol'));?></th>
									<th><?php echo $this->Paginator->sort('status', __('Status'));?></th>
									<th><?php echo $this->Paginator->sort('nombre', __('Nombre'));?></th>
									<th><?php echo $this->Paginator->sort('created', __('Creacion'));?></th>
									<th><?php echo $this->Paginator->sort('modified', __('Modificacion'));?></th>
									<th width="85px" class="actions"><?php echo __('Acciones');?></th>
				</tr>
             
            </thead>
            <tbody>
            	
            	<?php
            	
				foreach ($users as $user): 
								
				?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td><?php echo $roles[($user['User']['rol'])]; ?>&nbsp;</td>
						<td><?php echo $status[($user['User']['status'])]; ?>&nbsp;</td>
						<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
						<td width="85px" class="actions">
						<div class="btn-group">
							<?php echo $this->Html->link('<i class="icon-search icon-white"></i> '.__('Ver'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-primary','escape' => false)); ?>
						<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							 <li><?php echo $this->Html->link('<i class="icon-pencil"></i> '.__('Editar'), array('action' => 'edit', $user['User']['id']),array('class'=>'','escape' => false)); ?> </li>
						<li class="divider"></li>
							<li><?php echo $this->Form->postLink(__($statusOption[($user['User']['status'])]), array('action' => 'status', $user['User']['id']), array('class'=>'','escape' => false), __('Esta Seguro de Cambiar el Status del Usuario:  %s ?', $user['User']['username'])); ?> </li>
						<li class="divider"></li>
							 <li><?php echo $this->Form->postLink('<i class="icon-trash"></i> '.__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('class'=>'','escape' => false), __('Esta Seguro de Eliminar el Usuario:  %s ?', $user['User']['username'])); ?> </li>
						</ul>
						</div>
						</td>
					</tr>
				<?php endforeach; ?>
            	
            	
            </tbody>
        </table>
        
        <span class="">
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de un total de {:count}, iniciando en {:start}, terminando en {:end}')
		));
		?>		</span>
		
				
		
		
		
		
	<!--Paginacion bootstrap *********************************************************************************-->
		<div class="pagination">
			<ul>
				<?php  echo $this->Paginator->prev('&larr; ' . __('Anterior'), array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">&larr; ' . __('Anterior').'</a>', array('class'=>'disabled prev','escape'=>false,'tag' => 'li')); ?>
				<?php  echo $this->Paginator->numbers(array('separator' => false,'tag' => 'li','currentClass'=> 'active')); ?>
				<?php  echo $this->Paginator->next(__('Siguiente') . ' &rarr;', array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">'.__('Siguiente') . ' &rarr;</a>', array('class'=>'disabled next','escape'=>false,'tag' => 'li')); ?>
			</ul>
		</div>
	<!--Paginacion bootstrap *********************************************************************************-->
        
        
        
        
        
        
        
        
		
	</div>






