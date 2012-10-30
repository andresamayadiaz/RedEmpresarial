<?php

$this->Paginator->options(array('url' => $this->request->params['named']));
$folio= '';
if(isset($this->request->params['named']['folio']))
{ 
	$folio = $this->request->params['named']['folio'];
}

?>
	<?php echo $this->Form->create(null, array('type' => 'post', 'controller' => 'encuestas', 'action' => 'indexsearch', 'div' => 'false', 'class' => 'form-search'));?>
      	<!-- <input type="text" class="input-medium search-query"> -->
      	<?php echo $this->Form->input('id', array('div' => false, 'class' => 'input-medium search-query', 'placeholder' => 'Folio', 'label' => false, 'type'=>'text', 'value' => $folio)); ?>
      	<button type="submit" class="btn">Buscar</button>
    </form>
    
      <table class="table table-hover">
      	<thead>
            <tr>
              <th><?php echo $this->Paginator->sort('folio', __('Folio'));?></th>
              <th><?php echo $this->Paginator->sort('nombrenegocio', __('Nombre Negocio'));?></th>
              <th><?php echo $this->Paginator->sort('nombre', __('Nombre(s)'));?></th>
              <th><?php echo $this->Paginator->sort('created', __('Creado'));?></th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          	<?php
				foreach ($encuestas as $encuesta): 			
				?>
            <tr>
              <td><?php echo h($encuesta['Encuesta']['folio']); ?>&nbsp;</td>
              <td><?php echo h($encuesta['Encuesta']['nombrenegocio']); ?>&nbsp;</td>
              <td><?php echo h($encuesta['Encuesta']['nombre']); ?>&nbsp;</td>
              <td><?php echo h($encuesta['Encuesta']['created']); ?>&nbsp;</td>
              <td>
	              <?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $encuesta['Encuesta']['id']),array('class'=>'','escape' => false)); ?> &nbsp;
	              <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $encuesta['Encuesta']['id']),array('class'=>'','escape' => false)); ?> &nbsp;
				<?php echo $this->Html->link(__('Imprimir'), array('action' => 'print', $encuesta['Encuesta']['id']),array('class'=>'','escape' => false)); ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
      </table>