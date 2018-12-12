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
					  <h4>Managing Company Information</h4>
					</div>
					<div class="card-body">
					
					   <?= $this->Form->create($managingCompanyInformation) ?>
						<div class="form-group">
						   <?= $this->Form->control('company_name',['class'=>'form-control','placeholder'=>'Company Name','required'=>true]) ?>
						</div>
						<div class="form-group">
						   <?= $this->Form->control('address',['class'=>'form-control','placeholder'=>'Company Address','required'=>true]) ?>
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
