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
					  <h4>SEC Permit</h4>
					</div>
					
					<div class="card-body">
					
					   <?= $this->Form->create($secPermit) ?>
						<div class="form-group">
						   <?= $this->Form->control('permit_no',['class'=>'form-control','placeholder'=>'Permit Number','required'=>true]) ?>
						</div>
						<div class="form-group">
							<?= $this->Form->control('valid_until',['id'=>'s-valid-until','type'=>'text','class'=>'form-control','placeholder'=>'Valid Until','required'=>true]) ?>
						</div>
						<!-- <div class="form-group">
						   <?= $this->Form->control('file', ['type'=>'file','class'=>'form-control','label'=>'Scanned Permit','required'=>true]) ?>
						</div> -->
						
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
