<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>&nbsp;<?= $this->Html->image('accreditation_logo.png',['alt'=>'DOT Accreditation logo','url'=>['controller'=>'pages','action'=>'/']]) ?> <br /> </span><br /><strong class="text-primary">Online Accreditation System</strong></div>
            <p>Please Login</p>
             <?= $this->Form->create($user, ['url'=>['controller'=>'users','action'=>'login']]) ?> 
              <div class="form-group-material">
				<?php
					echo $this->Form->control('email',['required'=>'required','data-msg'=>'Please enter your username','class'=>'input-material']);				
				?>
               
              </div>
              <div class="form-group-material">
                <?php 
					echo $this->Form->control('password',['type'=>'password','required'=>'required','data-msg'=>'Please enter your password','class'=>'input-material']);
				?>				
                
              </div>
            <div class="form-group text-center">
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
				<?= $this->Form->end() ?>
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
             </div>
           
          </div>
         
        </div>
      </div>
    </div>