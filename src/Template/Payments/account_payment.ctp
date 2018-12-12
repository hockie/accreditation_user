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
						<h4>INITIAL ACCREDITATION FEE: P300.00</h4>
						
					</div>
					
					
					<div class="card-header d-flex align-items-center">
					  <h4>Choose Payment Method</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($payment) ?>
						<div class="form-group">
						   <?= $this->Form->control('payment_method', ['options' => ['Over the Counter'=>'Over the Counter','Online Payment'=>'Online Payment','Payment Center'=>'Payment Center'], 'empty' => true]) ?>
						  
						</div>
						<div class="form-group">
							<?= $this->Form->control('establishment_account_id',['type'=>'hidden','value'=>$establishment_account_id]) ?>
						</div>
						
						<div class="form-group">  
								<?= $this->Form->button(__('&nbsp;NEXT&nbsp;>>'),['class'=>'btn btn-primary']) ?>
						</div>
					  <?= $this->Form->end() ?>
					</div>
				  </div>
				  
              </div>
            </div>
			
						
		</div>
		<?= $this->Form->end() ?>
		</div>
		
	</section>
<br />
<?php print_r($establishment_accounts); ?>