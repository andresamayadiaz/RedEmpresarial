<!DOCTYPE html>
<html lang="en">
  <head>
	<?php echo $this->Html->charset(); ?>
    <title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('docs');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('jquery-ui-1.9.0.custom.min');
		echo $this->Html->css('captiva');
		
		echo $this->Html->script('jquery-1.8.2.min.js');
		echo $this->Html->script('jquery.validate.js');
		echo $this->Html->script('additional-methods-validate.js');
		echo $this->Html->script('jquery-ui-1.9.0.custom.min.js');
		//echo $this->Html->script('http://platform.twitter.com/widgets.js');
		//echo $this->Html->script('jquery.js');
		//echo $this->Html->script('google-code-prettify/prettify.js');
		echo $this->Html->script('bootstrap-transition.js');
		echo $this->Html->script('bootstrap-alert.js');
		echo $this->Html->script('bootstrap-modal.js');
		echo $this->Html->script('bootstrap-dropdown.js');
		echo $this->Html->script('bootstrap-scrollspy.js');
		echo $this->Html->script('bootstrap-tab.js');
		echo $this->Html->script('bootstrap-tooltip.js');
		echo $this->Html->script('bootstrap-popover.js');
		echo $this->Html->script('bootstrap-button.js');
		echo $this->Html->script('bootstrap-collapse.js');
		echo $this->Html->script('bootstrap-carousel.js');
		echo $this->Html->script('bootstrap-typeahead.js');
		echo $this->Html->script('application.js');
		echo $this->Html->script('bootstrap-fileupload.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	


	
	
    <!-- Le styles -->

  </head>
	
    <body data-spy="scroll" data-target=".subnav" data-offset="50">
   
	<!-- Barra de menu  -->
	
	<?php  
	
	if($this->Session->read('Auth.User.rol')!=null ){
     	if($this->Session->read('Auth.User.rol')=='1' ){
     		echo $this->element('menu_admin');
		}else
		if($this->Session->read('Auth.User.rol')=='2' ){
     		echo $this->element('menu_encuestador');
		}
	}

		?>

    <div class="container">
    
    <?php echo $this->Session->flash(); ?>

	
    
        
    
       <?php echo $this->fetch('content'); ?>

      <hr>

      <footer>
      	<p class="pull-right">Desarrollado por <a href="http://captivatecnologia.com/" target="blank">Captiva Tecnologia Digital.</a> <?php echo $footer_right; ?></p>
       	<p><?php echo date('Y').' &copy; '.$footer_left; ?> </p>
      </footer>
	<?php //echo $this->element('sql_dump'); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    	

  </body>
</html>
