<section class="forms">
	<div class="container-fluid">
          <!-- Page Header-->
       <div class="row">
		  
			<div class="col-sm-12 col-md-3 col-lg-3">
				<?= $this->element('registration_sidemenu') ?>
			</div>
			<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="card">
					<div class="card-header d-flex align-items-center">
					  <h4>General Manager Information</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($generalManagerInformation) ?>
						<div class="form-group">
						   <?= $this->Form->control('name_prefix',['class'=>'form-control','placeholder'=>'Name Prefix']) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('first_name',['class'=>'form-control','placeholder'=>'First Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('middle_name', ['class'=>'form-control','placeholder'=>'Middle Name']) ?>
						</div>
						 <div class="form-group">
						   <?= $this->Form->control('last_name', ['class'=>'form-control','placeholder'=>'Last Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('mobile_no', ['label'=>'Mobile Number','class'=>'form-control','placeholder'=>'09xx1234567','required'=>true,'maxlength'=>11]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('email', ['label'=>'Email Address','class'=>'form-control','placeholder'=>'Email Address','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('nationality_id', ['empty' => true,'class'=>'form-control','placeholder'=>'Nationality','required'=>true]) ?>
						</div>
						
						 <div class="form-group">  
								<?= $this->Form->button(__('&nbsp;NEXT&nbsp;>>'),['class'=>'btn btn-primary']) ?>
							</div>
					  
					</div>
				  </div>
				  <?= $this->Form->end() ?>
              </div>
            </div>
						
		</div>
		<?= $this->Form->end() ?>
		</div>
		
	</section>
<br />		