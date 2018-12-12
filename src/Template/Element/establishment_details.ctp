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
					
					  <form>
						<div class="form-group">
						   <?= $this->Form->control('establishment_name',['class'=>'form-control','placeholder'=>'Establishment Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('address',['class'=>'form-control','placeholder'=>'Establishment address','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('region_id', ['options' => $regions, 'empty' => true,'class'=>'form-control','placeholder'=>'Region','required'=>true]) ?>
						</div>
						 <div class="form-group">
						   <?= $this->Form->control('district_province_id', ['options' => $districtProvinces, 'empty' => true,'class'=>'form-control','placeholder'=>'District/Province','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('city_municipality_id', ['options' => $districtProvinces, 'empty' => true,'class'=>'form-control','placeholder'=>'City/Municipality','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('zipcode_id', ['options' => [1,2,3,4], 'empty' => true,'class'=>'form-control','placeholder'=>'Zipcode','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('website', ['class'=>'form-control','placeholder'=>'website']) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('TelephoneNumber', ['class'=>'form-control','placeholder'=>'Telephone Number','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('MobileNumber', ['class'=>'form-control','placeholder'=>'Mobile Number','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('EmailAddress', ['class'=>'form-control','placeholder'=>'Email Address','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('DateEstablished', ['type'=>'Date','class'=>'form-control','placeholder'=>'Date Established','required'=>true]) ?>
						</div>
					  </form>
					</div>
				  </div>
              </div>
            </div>
						
		</div>
		<?= $this->Form->end() ?>
		</div>
		
	</section>
<br />		