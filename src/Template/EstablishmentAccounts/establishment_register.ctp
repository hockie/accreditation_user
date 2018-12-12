<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <div class="result">
		&nbsp;
		  </div>
		   
          <div class="row">
		  
			<div class="col-sm-12 col-md-3 col-lg-3">
				<?= $this->element('registration_sidemenu') ?>
			</div>
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="account_identifier">					
					<div class="card">
						<div class="card-header d-flex align-items-center">
						  <h4>Account Identifier Details</h4>
						</div>
						<div class="card-body">
						  
						  <?= $this->Form->create($establishmentAccount, (['id'=>'submit-form'])) ?>
							<div class="form-group">
							 <?= $this->Form->control('email',['label'=>'Establishment Official Email', 'type'=>'email','class'=>'form-control','placeholder'=>'Establishment Email address','required'=>true]) ?>
							 <div class="invalid-feedback">
							  Email already exist. Please use another email.
							</div>
							</div>
							<div class="form-group">
								<?= $this->Form->control('tin',['label'=>'Establishment TIN No', 'class'=>'form-control','placeholder'=>'000-000-000-000-0','maxlength'=>17,'required'=>true]) ?>
							</div>
							<div class="invalid-tin">
							  Tin already exist. Please use another Tin.
							</div>
							<div class="form-group">
								<?= $this->Form->control('type_of_org',['label'=>'Type of Organization', 'options'=>[1=>'Single Proprietor',2=>'Partnership',3=>'Corporation',4=>'Cooperative'], 'class'=>'form-control','placeholder'=>'Please select','maxlength'=>17,'required'=>true,'empty' => true]) ?>
							</div>
							
							<div class="alert alert-danger">
							<strong>NOTE</strong>
							 <p> Make sure that the email address you provided is <strong>ACTIVE</strong> and <strong>VALID</strong>.  For ESTABLISHMENTS, ensure that this is a corporate email address or an email address that will be permanently associated to your company. Please refrain from using your personal email address as notifications and official communications will be forwarded to your registered email.</p>
							</div>
								
						  <div class="form-group">  
								<?= $this->Form->button(__('&nbsp;NEXT&nbsp;>>'),['class'=>'btn btn-primary']) ?>
							</div>
						  
						</div>
					  </div>					  
				</div>
            </div>
						
		</div>
		<?= $this->Form->end() ?>
		</div>
		
	</section>
<br />		
