<section class="forms">
	<div class="container-fluid">
          <!-- Page Header-->
		 
       <div class="row">
		  
			<div class="col-sm-12 col-md-3 col-lg-3">
				<?= $this->element('registration_sidemenu') ?>
			</div>
			
			<div class="col-sm-12 col-md-9 col-lg-9">
			
					<div class="card">
					<div class="card-header text-center printInvoice">
						<?= $this->Html->image('accreditation.png') ?>
						<p>The New DOT Bldg. , 351 Sen. Gil Puyat Ave. Makati City, Philippines <br />
						Tel.No.: (632) 459-5200 to 459-5230 loc 224
						</p>						
					</div>
					 
					<div class="card-body">
					 <?= $this->Form->create($payment) ?>
						<div class="row printInvoice">
						
							<div class="col-md-12">
								
								<p class="print"><strong>Invoice Date: </strong><?= $invoiceDetails['created'] ?></p>
								<p class="print"><strong>Invoice Number: </strong><?= date_format($establishmentAccount['created'], 'Ymd') . '-' . $establishmentAccount['id'] ?></p>
								<p class="print"><strong>Establishment Name: </strong><?= $establishmentDetails['establishment_name'] ?></p>
								<p class="print"><strong>Establishment Address : </strong><?= $address ?></p>
								<p class="print"><strong>TIN No : </strong><?= $establishmentAccount['tin'] ?></p>
							</div>
							<div class="col-md-12">
								<p class="print"><strong>In partial payment for: </strong> <?= $invoiceDetails['description'] ?></p>								
							</div>
							<div class="line"></div>
							<div class="col-md-12">
								<h3><strong>REFERENCE NUMBER: </strong> <?= strtoupper(substr($invoiceDetails['hash_key'],0,15)) ?></h3>
							</div>
							<div class="col-md-12">
								<h3><strong>AMOUNT DUE: </strong> P<?= $invoiceDetails['amount'] ?>.00</h3>
								
								<p><i>Please print and present this invoice at the DOT Cashier</i></p>
							</div>
							<div class="line"></div>
							
						</div>
						<div class="row text-right">
							<div class="col-md-12">
								&nbsp;
							</div>
							<div class="col-md-12">
							 <div id="print_button" class="btn btn-primary">PRINT INVOICE</div>
								
								
							</div>
						</div>
					<?= $this->Form->end() ?>
					</div>
				  </div>
				 
              
			  </div>
            </div>
				
		<?= $this->Form->end() ?>
		</div>

	</section>
<br />		

<?php 
//echo $refBarCode; 
?>