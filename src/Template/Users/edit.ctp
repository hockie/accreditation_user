<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="card">
	<div class="card-header">
		<h4>Edit User <span class="float-md-right"><?= $this->Html->link('<i class="fa fa-chevron-left"></i> Back to Users',['controller'=>'Users','action'=>'index'],['escape'=>false]) ?></span></h4>
    </div>
	<div class="card-body">	
		
			 <?= $this->Form->create($user) ?>
			
					
					<?php
						echo $this->Form->control('full_name');
						echo $this->Form->control('email');
						echo $this->Form->control('region_id', ['options' => $regions, 'empty' => true,'class'=>'form-control','placeholder'=>'Region','required'=>true]);				
						echo $this->Form->control('role');
					?>
				
				<br />
				<?= $this->Form->button(__('Submit')) ?>
				<?= $this->Form->end() ?>
		
	</div>
</div>