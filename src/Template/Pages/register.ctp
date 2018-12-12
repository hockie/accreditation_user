<div id="ajax-content"></div>
<?= $this->Form->create() ?>
	<div class="form-group">
		<?= $this->Form->control('regions',['options'=>$regions,'class'=>'form-control','placeholder'=>'Regions']) ?>
		<?= $this->Form->control('district_provinces',['type'=>'select','options'=>$districtProvinces,'class'=>'form-control','placeholder'=>'District Provinces']) ?>
	</div>
 <div class="form-group">
 <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
 </div>
 <?= $this->Form->end() ?>