	
	
	<header class="jumbotron subhead" id="overview">
		<h1><?php echo __('Configs');?></h1>
		<p class="lead"><?php echo __('Bienvenido al Sistema.');?></p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li>
					<?php echo $this->Html->link(__('Nuevo Config'), array('action' => 'add')); ?>				</li>
		</div>
	</header>
		
	
	<div align="right">
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Nuevo Config'), array('action' => 'add'),array('class'=>'btn btn-success','escape' => false)); ?>		
	</div>
	<br/>


    <hr>  
	<div id="contenedorpaginado">
		<table class="table table-striped table-bordered table-condensed">
            <thead>
            	<tr>
									<th><?php echo $this->Paginator->sort('id', __('Id'));?></th>
									<th><?php echo $this->Paginator->sort('nombre', __('Nombre'));?></th>
									<th><?php echo $this->Paginator->sort('valor', __('Valor'));?></th>
									<th><?php echo $this->Paginator->sort('descripcion', __('Descripcion'));?></th>
									<th><?php echo $this->Paginator->sort('created', __('Creacion'));?></th>
									<th><?php echo $this->Paginator->sort('modified', __('Modificacion'));?></th>
									<th width="85px" class="actions"><?php echo __('Acciones');?></th>
				</tr>
             
            </thead>
            <tbody>
            	
            	<?php
				foreach ($configs as $config): ?>
					<tr>
						<td><?php echo h($config['Config']['id']); ?>&nbsp;</td>
						<td><?php echo h($config['Config']['nombre']); ?>&nbsp;</td>
						<td><?php echo h($config['Config']['valor']); ?>&nbsp;</td>
						<td><?php echo h($config['Config']['descripcion']); ?>&nbsp;</td>
						<td><?php echo h($config['Config']['created']); ?>&nbsp;</td>
						<td><?php echo h($config['Config']['modified']); ?>&nbsp;</td>
						<td width="85px" class="actions">
						<div class="btn-group">
							<?php echo $this->Html->link('<i class="icon-search icon-white"></i> '.__('Ver'), array('action' => 'view', $config['Config']['id']),array('class'=>'btn btn-primary','escape' => false)); ?>
						<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							 <li><?php echo $this->Html->link('<i class="icon-pencil"></i> '.__('Editar'), array('action' => 'edit', $config['Config']['id']),array('class'=>'','escape' => false)); ?> </li>
						<li class="divider"></li>
							 <li><?php echo $this->Form->postLink('<i class="icon-trash"></i> '.__('Eliminar'), array('action' => 'delete', $config['Config']['id']), array('class'=>'','escape' => false), __('Esta Seguro de Eliminar el Registro # %s?', $config['Config']['id'])); ?> </li>
						</ul>
						</div>
						</td>
					</tr>
				<?php endforeach; ?>
            	
            	
            </tbody>
        </table>
        
        <p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de un total de {:count}, iniciando en {:start}, terminando en {:end}')
		));
		?>		</p>
				
		<!--<div class="paging">
		<?php
		//echo $this->Paginator->prev('< ' . __('Anterior '), array(), null, array('class' => 'prev disabled'));
		//echo $this->Paginator->numbers(array('separator' => ''));
		//echo $this->Paginator->next(__(' Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
		</div>-->
		
	<!--Paginacion bootstrap *********************************************************************************  &larr; -->
		<div class="pagination">
			<ul>
				<?php  echo $this->Paginator->prev('&larr; ' . __('Anterior'), array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">&larr; ' . __('Anterior').'</a>', array('class'=>'disabled prev','escape'=>false,'tag' => 'li')); ?>
				<?php  echo $this->Paginator->numbers(array('separator' => false,'tag' => 'li','currentClass'=> 'active')); ?>
				<?php  echo $this->Paginator->next(__('Siguiente') . ' &rarr;', array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">'.__('Siguiente') . ' &rarr;</a>', array('class'=>'disabled next','escape'=>false,'tag' => 'li')); ?>
			</ul>
		</div>
	<!--Paginacion bootstrap *********************************************************************************-->        
		
	</div>






