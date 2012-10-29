<div class="puestos form">
<?php echo $this->Form->create('Puesto'); ?>
	<fieldset>
		<legend><?php echo __('Add Puesto'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Puestos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encuestas'), array('controller' => 'encuestas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encuesta'), array('controller' => 'encuestas', 'action' => 'add')); ?> </li>
	</ul>
</div>
