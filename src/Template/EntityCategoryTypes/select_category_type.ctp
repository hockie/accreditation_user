<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          
		   <?= $this->Form->create($entityCategoryType) ?>
          <div class="row">
		  
			<div class="col-sm-12 col-md-3 col-lg-3">
				<?= $this->element('registration_sidemenu') ?>
			</div>
            <div class="col-sm-12 col-md-9 col-lg-9">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Establishment or Frontliner</h4>
                </div>
                <div class="card-body">
                  
                 
                    <div class="form-group">
                     <?= $this->Form->control('entity_category_type_id',['label'=>'Select Application Category Type','options'=>$entityCategoryTypes,'class'=>'form-control','placeholder'=>'Application Category Type','empty' => true, 'required'=>true, 'default'=>$entityCategoryTypeId ]) ?>
					 
					 <?= $this->Form->control('entity_category_id',['label'=>'Select Entity Category','type'=>'select','class'=>'form-control','placeholder'=>'Entity Category','empty' => true, 'required'=>true, 'default'=>$entityCategoryId]) ?>
					  
					 <?= $this->Form->control('entity_types_id',['label'=>'Select Entity Type','type'=>'select','class'=>'form-control','placeholder'=>'Entity Type','empty' => true, 'required'=>true, 'default'=>$entityTypeId]) ?>
					 
                    </div>
                    
                
				  <div class="form-group">  
					<?= $this->Form->button(__('&nbsp;NEXT&nbsp;>>'),['class'=>'btn btn-primary']) ?>
				</div>
                </div>										  
              </div>
            </div>						
		</div>
		<?= $this->Form->end() ?>
		</div>
	</section>
<br />		
