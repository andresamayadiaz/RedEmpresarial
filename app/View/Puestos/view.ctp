<div class="puestos view">
<h2><?php  echo __('Puesto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Puesto'), array('action' => 'edit', $puesto['Puesto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Puesto'), array('action' => 'delete', $puesto['Puesto']['id']), null, __('Are you sure you want to delete # %s?', $puesto['Puesto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Puestos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puesto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encuestas'), array('controller' => 'encuestas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encuesta'), array('controller' => 'encuestas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Encuestas'); ?></h3>
	<?php if (!empty($puesto['Encuesta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Puesto Id'); ?></th>
		<th><?php echo __('Otropuesto'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apepaterno'); ?></th>
		<th><?php echo __('Apematerno'); ?></th>
		<th><?php echo __('Nombrenegocio'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Entrecalles'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Interior'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Colonia'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Pweb'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Tipoempresa'); ?></th>
		<th><?php echo __('Tipoempresaotro'); ?></th>
		<th><?php echo __('Estabes'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('Actividadotro'); ?></th>
		<th><?php echo __('Camara'); ?></th>
		<th><?php echo __('Camarasi'); ?></th>
		<th><?php echo __('Camararecibido'); ?></th>
		<th><?php echo __('Creditos'); ?></th>
		<th><?php echo __('Enlaces'); ?></th>
		<th><?php echo __('Becasestudio'); ?></th>
		<th><?php echo __('Basesdatos'); ?></th>
		<th><?php echo __('Juridico'); ?></th>
		<th><?php echo __('Ventanillaunica'); ?></th>
		<th><?php echo __('Censo'); ?></th>
		<th><?php echo __('Belleza'); ?></th>
		<th><?php echo __('Modas'); ?></th>
		<th><?php echo __('Appmoviles'); ?></th>
		<th><?php echo __('Salajuntas'); ?></th>
		<th><?php echo __('Cursoingles'); ?></th>
		<th><?php echo __('Revista'); ?></th>
		<th><?php echo __('Econoescala'); ?></th>
		<th><?php echo __('Desproveedores'); ?></th>
		<th><?php echo __('Distintivos'); ?></th>
		<th><?php echo __('Felectronica'); ?></th>
		<th><?php echo __('Exportacion'); ?></th>
		<th><?php echo __('Contabilidad'); ?></th>
		<th><?php echo __('Estudiosmercado'); ?></th>
		<th><?php echo __('Incubadora'); ?></th>
		<th><?php echo __('Dispagweb'); ?></th>
		<th><?php echo __('Hosting'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($puesto['Encuesta'] as $encuesta): ?>
		<tr>
			<td><?php echo $encuesta['id']; ?></td>
			<td><?php echo $encuesta['puesto_id']; ?></td>
			<td><?php echo $encuesta['otropuesto']; ?></td>
			<td><?php echo $encuesta['nombre']; ?></td>
			<td><?php echo $encuesta['apepaterno']; ?></td>
			<td><?php echo $encuesta['apematerno']; ?></td>
			<td><?php echo $encuesta['nombrenegocio']; ?></td>
			<td><?php echo $encuesta['calle']; ?></td>
			<td><?php echo $encuesta['entrecalles']; ?></td>
			<td><?php echo $encuesta['numero']; ?></td>
			<td><?php echo $encuesta['interior']; ?></td>
			<td><?php echo $encuesta['telefono']; ?></td>
			<td><?php echo $encuesta['colonia']; ?></td>
			<td><?php echo $encuesta['email']; ?></td>
			<td><?php echo $encuesta['pweb']; ?></td>
			<td><?php echo $encuesta['created']; ?></td>
			<td><?php echo $encuesta['modified']; ?></td>
			<td><?php echo $encuesta['tipoempresa']; ?></td>
			<td><?php echo $encuesta['tipoempresaotro']; ?></td>
			<td><?php echo $encuesta['estabes']; ?></td>
			<td><?php echo $encuesta['actividad']; ?></td>
			<td><?php echo $encuesta['actividadotro']; ?></td>
			<td><?php echo $encuesta['camara']; ?></td>
			<td><?php echo $encuesta['camarasi']; ?></td>
			<td><?php echo $encuesta['camararecibido']; ?></td>
			<td><?php echo $encuesta['creditos']; ?></td>
			<td><?php echo $encuesta['enlaces']; ?></td>
			<td><?php echo $encuesta['becasestudio']; ?></td>
			<td><?php echo $encuesta['basesdatos']; ?></td>
			<td><?php echo $encuesta['juridico']; ?></td>
			<td><?php echo $encuesta['ventanillaunica']; ?></td>
			<td><?php echo $encuesta['censo']; ?></td>
			<td><?php echo $encuesta['belleza']; ?></td>
			<td><?php echo $encuesta['modas']; ?></td>
			<td><?php echo $encuesta['appmoviles']; ?></td>
			<td><?php echo $encuesta['salajuntas']; ?></td>
			<td><?php echo $encuesta['cursoingles']; ?></td>
			<td><?php echo $encuesta['revista']; ?></td>
			<td><?php echo $encuesta['econoescala']; ?></td>
			<td><?php echo $encuesta['desproveedores']; ?></td>
			<td><?php echo $encuesta['distintivos']; ?></td>
			<td><?php echo $encuesta['felectronica']; ?></td>
			<td><?php echo $encuesta['exportacion']; ?></td>
			<td><?php echo $encuesta['contabilidad']; ?></td>
			<td><?php echo $encuesta['estudiosmercado']; ?></td>
			<td><?php echo $encuesta['incubadora']; ?></td>
			<td><?php echo $encuesta['dispagweb']; ?></td>
			<td><?php echo $encuesta['hosting']; ?></td>
			<td><?php echo $encuesta['observaciones']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'encuestas', 'action' => 'view', $encuesta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'encuestas', 'action' => 'edit', $encuesta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'encuestas', 'action' => 'delete', $encuesta['id']), null, __('Are you sure you want to delete # %s?', $encuesta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Encuesta'), array('controller' => 'encuestas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
