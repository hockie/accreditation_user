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
					  <h4>Establishment Details</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($establishmentDetail) ?>
						<div class="form-group">
						   <?= $this->Form->control('establishment_name',['class'=>'form-control','placeholder'=>'Establishment Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('address',['label'=>'Business Address','class'=>'form-control','placeholder'=>'Establishment address','required'=>true,'maxlength'=>150]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('region_id', ['options' => $regions, 'empty' => true,'class'=>'form-control','placeholder'=>'Region','required'=>true]) ?>
						</div>
						 <div class="form-group">
						   <?= $this->Form->control('district_province_id', ['type'=>'select','class'=>'form-control','placeholder'=>'District Provinces','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('municipality_city_id', ['type'=>'select', 'empty' => true,'class'=>'form-control','placeholder'=>'City/Municipality','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('zip_code_id', ['type'=>'select', 'empty' => true,'class'=>'form-control','placeholder'=>'Zipcode','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('website', ['label'=>'Business Website','class'=>'form-control','placeholder'=>'www.domain.com']) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('telephone_no', ['label'=>'Business Telephone','class'=>'form-control','placeholder'=>'(area code) telephone number','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('mobile_no', ['label'=>'Business Mobile Number','class'=>'form-control','placeholder'=>'09xx1234567','required'=>true,'maxlength'=>11]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('email', ['label'=>'Business Email Address','class'=>'form-control','placeholder'=>'Email Address','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('date_established', ['type'=>'text','class'=>'form-control','required'=>true]) ?>
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