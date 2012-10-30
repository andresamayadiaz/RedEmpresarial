<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $nombreSistema;  ?></a>
          
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?php echo $this->Html->base;  ?>/encuestas/"><?php echo __('Encuestas'); ?></a></li>
              
              <li><a href="<?php echo $this->Html->base;  ?>/encuestas/add"><?php echo __('Nueva Encuesta'); ?></a></li>
              
            </ul>
            
            <div class="pull-right">
            	<ul class="nav">
	           		<li class="dropdown" id="user">
		              	<a class="dropdown-toggle" data-toggle="dropdown" href="#user"> <i class="icon-user"></i> <?php echo $this->Session->read('Auth.User.username'); ?><b class="caret"></b></a>
		                  <ul class="dropdown-menu">
		                  	<li><?php  echo $this->Html->link(__('<i class="icon-cog"></i> '.__('Mi Perfil')), array('controller'=>'users','action' => 'profile'),array('class'=>'','escape' => false)); ?></li>
				              <li class="divider"></li>
				              <li><?php  echo $this->Html->link(__('<i class="icon-off"></i> '.__('Cerrar Sesion')), array('controller'=>'users','action' => 'logout'),array('class'=>'','escape' => false)); ?></li>
							
						  </ul>
		              </li>
		      	</ul>
	          </div>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>