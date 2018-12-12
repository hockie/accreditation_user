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
					  <h4>Authorized Representative</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($authorizedRepresentative) ?>
						<div class="form-group">
						   <?= $this->Form->control('fullname',['class'=>'form-control','placeholder'=>'Full Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('designation',['class'=>'form-control','placeholder'=>'Designation','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('telephone_no', ['class'=>'form-control','placeholder'=>'Telephone Number','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('mobile_no', ['label'=>'Mobile Number','class'=>'form-control','placeholder'=>'09xx1234567','required'=>true,'maxlength'=>11]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('email', ['label'=>'Email Address','class'=>'form-control','placeholder'=>'Email Address','required'=>true]) ?>
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

<?= $x ?>