<nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><?= $this->Html->image('accreditation_logo.png',['alt'=>'DOT Accreditation logo','url'=>'pages/dashboard','class'=>'img-fluid rounded-circle']) ?>
            <p class="h5">Online Accrediation System</p><span>Version 2.0</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
		<?php if( ($this->request->session()->read('Auth.User.role') == 'admin') || ($this->request->session()->read('Auth.User.role') == 'applicant') ) { ?>	
		
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li>
				<?= $this->Html->link('<i class="fa fa-home"></i> Home',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
            <li>
				<?= $this->Html->link('<i class="fa fa-money"></i> Capitalizations',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
            <li>
				<?= $this->Html->link('<i class="fa fa-table"></i> Specific Details',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
            <li>
				<?= $this->Html->link('<i class="fa fa-users"></i> Authorized Representatives',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
            <li>
				<?= $this->Html->link('<i class="fa fa-files-o"></i> Documents',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
            </li>
            <li>
				<?= $this->Html->link('<i class="fa fa-rub"></i> Payments',['controller'=>'Payments','action'=>'index','status'=>'open'],['escape'=>false]); ?>
			</li>
            <li> 
				<?= $this->Html->link('<i class="fa fa-history"></i> Transactions',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
          </ul>
        </div>
		
		<?php } ?>
		<?php if( $this->request->session()->read('Auth.User.role') == 'admin' ) { ?>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Admin menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li>
				<?= $this->Html->link('<i class="fa fa-users"></i> Users',['controller'=>'Users','action'=>'index'],['escape'=>false]); ?>
			</li>
			<li>
				<?= $this->Html->link('<i class="fa fa-building"></i> Applicant',['controller'=>'Users','action'=>'index'],['escape'=>false]); ?>
			</li>
			<?php if( ($this->request->session()->read('Auth.User.role') == 'admin') || ($this->request->session()->read('Auth.User.role') == 'cashier')   ) { ?>
            <li>
				<?= $this->Html->link('<i class="fa fa-pencil"></i> Cashier',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
			<?php } ?>
            <li> 
				<?= $this->Html->link('<i class="fa fa-pencil-square-o"></i> Evaluator',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
            <li> 
				<?= $this->Html->link('<i class="fa fa-share-square-o"></i> Inspector',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
			<li> 
				<?= $this->Html->link('<i class="fa fa-check-circle"></i> Director',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
			<li> 
				<?= $this->Html->link('<i class="fa fa-check-square-o"></i> Chief',['controller'=>'Pages','action'=>'dashboard'],['escape'=>false]); ?>
			</li>
          </ul>
        </div>
		<?php } ?>
      </div>
    </nav>