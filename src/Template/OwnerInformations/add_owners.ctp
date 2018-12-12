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
					  <h4>Ownership Information</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($ownerInformation) ?>
						<!-- <div class="form-group">
						   <?= $this->Form->control('name_prefix',['class'=>'form-control','placeholder'=>'name_prefix','required'=>false]) ?>
						</div> -->
						<div class="form-group">
						   <?= $this->Form->control('first_name',['label'=>'Owner\'s Name','class'=>'form-control','placeholder'=>'Owner\'s Name','required'=>true]) ?>
						</div>
						<!--<div class="form-group">
						   <?= $this->Form->control('middle_name', ['class'=>'form-control','placeholder'=>'middle_name','required'=>false]) ?>
						</div>-->
						<!--<div class="form-group">
						   <?= $this->Form->control('last_name', ['class'=>'form-control','placeholder'=>'last_name','required'=>true]) ?>
						</div> -->
						<!-- <div class="form-group">
						   <?= $this->Form->control('name_suffix', ['class'=>'form-control','placeholder'=>'name_suffix','required'=>false]) ?>
						</div>-->
						<div class="form-group">
						   <?= $this->Form->control('address',['class'=>'form-control','placeholder'=>'Address','required'=>true]) ?>
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
						   <?= $this->Form->control('zip_code_id', ['options' => $zipCodes, 'empty' => true,'class'=>'form-control','placeholder'=>'Zipcode','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('nationality_id', ['label'=>'Nationality (if applicable)','class'=>'form-control','placeholder'=>'Nationality','empty' => true]) ?>
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