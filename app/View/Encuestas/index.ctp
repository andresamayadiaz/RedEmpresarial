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
				<?php echo $this->Html->link(__('Imprimir'), array('action' => 'imprimir', $encuesta['Encuesta']['id']),array('class'=>'','escape' => false)); ?>
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
		?>		
		</span>
		
				
		
		
		
		
	<!--Paginacion bootstrap *********************************************************************************-->
		<div class="pagination">
			<ul>
				<?php  echo $this->Paginator->prev('&larr; ' . __('Anterior'), array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">&larr; ' . __('Anterior').'</a>', array('class'=>'disabled prev','escape'=>false,'tag' => 'li')); ?>
				<?php  echo $this->Paginator->numbers(array('separator' => false,'tag' => 'li','currentClass'=> 'active')); ?>
				<?php  echo $this->Paginator->next(__('Siguiente') . ' &rarr;', array('escape'=>false,'tag' => 'li'), '<a onclick="return false;">'.__('Siguiente') . ' &rarr;</a>', array('class'=>'disabled next','escape'=>false,'tag' => 'li')); ?>
			</ul>
		</div>
	<!--Paginacion bootstrap *********************************************************************************-->