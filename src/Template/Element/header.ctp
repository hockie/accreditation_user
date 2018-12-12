<header class="header">
    <nav class="top-bar expanded" data-topbar role="navigation">
	
        <ul class="title-area large-3 medium-3 columns">
            <li class="name">
                <h2><?= $this->Html->image('accreditation_logo.png',['alt'=>'DOT Accreditation logo','url'=>'/']) ?></h2>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
			
			<?php if($this->request->session()->read('Auth.User.id') <> NULL) { ?>
				<li  class="name"><?= $this->Html->link('Welcome '. $this->request->session()->read('Auth.User.email'),['action'=>'#']); ?></li>
				<li  class="name"><?= $this->Html->link('<i class="fa fa-power-off"></i> Logout',['controller'=>'Users','action'=>'logout'],['escape'=>false]); ?></li>
			<?php }else{ ?>
				<li  class="name"><?= $this->Html->link('What is DOT Accreditation?',['controller'=>'Pages','action'=>'whatisdot/#DOT-Accreditation']); ?></li>
				<li  class="name"><?= $this->Html->link('Eligibility',['controller'=>'Pages','action'=>'whatisdot/#eligibility']); ?></li>
				<li  class="name"><?= $this->Html->link('Benifits and Incentives',['controller'=>'Pages','action'=>'whatisdot/#benefits_incentives']); ?></li>
				<li  class="name"><?= $this->Html->link('Definition of Accreditation-related Terms',['controller'=>'Pages','action'=>'whatisdot/#accredterms']); ?></li>
				<li  class="name"><?= $this->Html->link('How to Apply Online?',['controller'=>'Pages','action'=>'whatisdot/#howtoapply']); ?></li>
				<li  class="name"><?= $this->Html->link('Accredited Entities',['controller'=>'Pages','action'=>'whatisdot/#accredited_entities']); ?></li>
				
			<?php } ?>
			
			</ul>
        </div>
		
    </nav>
	</header>