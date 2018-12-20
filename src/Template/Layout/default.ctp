<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'DOT - Online Accreditation System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->element('head') ?>
</head>
<body>
<div class="page">
    
	<?= $this->element('header') ?>
	
	<section>
    
    <div class="container-fluid  mt-30px mb-30px">
		<div class="row">
			
				<?php if($this->request->session()->read('Auth.User.id') <> NULL) { ?>
				<div class="col-md-2 col-sm-0 col-lg-2">
					<?= $this->element('left_nav'); ?>
				</div>
				<?php } ?>
			<?php if($this->request->session()->read('Auth.User.id') <> NULL) { ?>
				<div class="col-md-10 col-sm-0 col-lg-10">	
			<?php } ?>
				<?= $this->Flash->render() ?>
				<?= $this->fetch('content') ?>
			<?php if($this->request->session()->read('Auth.User.id') <> NULL) { ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<?= $this->Html->script('jquery/jquery.min.js') ?>
    <?= $this->Html->script('popper.js/umd/popper.min.js') ?>
	<?= $this->Html->script('bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('grasp_mobile_progress_circle-1.0.0.min.js') ?>
	<?= $this->Html->script('jquery.cookie/jquery.cookie.js') ?>	
    
	<?= $this->Html->script('jquery-validation/jquery.validate.min.js') ?>	
	<?= $this->Html->script('malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>	
	<?= $this->Html->script('responsiveslides.min.js') ?>	
	<?= $this->Html->script('front.js') ?>	
	<?= $this->Html->script('custom.js') ?>	
	<?= $this->Html->script('datepicker/jquery.datetimepicker.full.js') ?>
	<?= $this->Html->script('printThis.js') ?>	
	<?= $this->Html->script('jquery.PrintArea.js') ?>	

    <script>
	  
	 $(".rslides").responsiveSlides({
	  auto: true,             // Boolean: Animate automatically, true or false
	  speed: 500,            // Integer: Speed of the transition, in milliseconds
	  timeout: 1000,          // Integer: Time between slide transitions, in milliseconds
	  pager: false,           // Boolean: Show pager, true or false
	  nav: false,             // Boolean: Show navigation, true or false
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
	  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
	  manualControls: "",     // Selector: Declare custom pager navigation
	  namespace: "rslides",   // String: Change the default namespace used
	  before: function(){},   // Function: Before callback
	  after: function(){}     // Function: After callback
	});
	</script>
	<script>
		$(function(){
			//Region ID dropdown field
			$('#region-id').on('change',function(){
				var regID = $(this).val();
				$.get({
				  url: '../../pages/districtProvinces/'+regID,
				  success:function(data){
					
					$('#district-province-id').empty().append(data);
					 
				  }
				});	
				$('#municipality-city-id').empty();
			});
			//District Province ID dropdown field
			$('#district-province-id').on('change',function(){
				var mun = $(this).val();
				$.get({
				  url: '../../pages/municipalityCities/'+mun,
				  success:function(data){
					
					$('#municipality-city-id').empty().append(data);
					 
				  }
				});				
			});
			//Zip Code dropdown field
			$('#municipality-city-id').on('change',function(){				
				var municipality_city_id = $(this).val();
				//alert(municipality_city_id);
				$.ajax({
					  method:'POST',
					 
					  url: '../../zipCodes/cityZipCode/',
					   data: {municipality_city_id},
					  
					  success: function(data)
					  {                    
						
						$('#zip-code-id').empty().append(data);

					  }
				});			
			});
			
		});

</script>

<script>
		$(function(){
			
			//Entity Category Type ID dropdown field
			$('#entity-category-type-id').on('change',function(){
				
				var regID = $(this).val();
				$.get({
				  url: '../entity-categories/cat_list/'+regID,
				  success:function(data){
					
					$('#entity-category-id').empty().append(data);
					 
				  }
				});
				$('#entity-types-id').empty();
			});		

			//Entity Type ID dropdown field
			$('#entity-category-id').on('change',function(){
				var entityCatId = $(this).val();
				
				$.get({
				  url: '../entity-types/entity_type_list/'+entityCatId,
				  success:function(data){
					
					$('#entity-types-id').empty().append(data);
					 
				  }
				});				
			});	
			
		});

</script>
<script>
//datepicker
$(function(){
	$('#date-established').datetimepicker({
		
		 timepicker:false,
		 format:'Y-m-d',
		 theme:'navy blue'
		
	});
	$('#m-valid-until').datetimepicker({
		
		 timepicker:false,
		 format:'Y-m-d',
		 theme:'navy blue'
		
	});
	$('#s-valid-until').datetimepicker({
		
		 timepicker:false,
		 format:'Y-m-d',
		 theme:'navy blue'
		
	});
	$('#d-valid-until').datetimepicker({
		
		 timepicker:false,
		 format:'Y-m-d',
		 theme:'navy blue'
		
	});
	$('#cda-valid-until').datetimepicker({
		
		 timepicker:false,
		 format:'Y-m-d',
		 theme:'navy blue'
		
	});
	

});
</script>
<script>
$(function(){
    $('#tin').keyup(function(){
           $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{3})\-?(\d{3})-?(\d{1})/,'$1-$2-$3-$4-$5'))
    });
}); 
</script>

<script>
$(function(){
	$('#radioPayment input:radio').prop('checked', false);
	$('#radioPayment input:radio').click(function() {
		var $val = $(this).val();
		if ($val ==  'DOTC') {
		 $('#continuePayment').removeAttr('disabled');
		} else if ($val == 'OP') {
		  $('#continuePayment').removeAttr('disabled');
		}else{
		  $('#continuePayment').removeAttr('disabled');
		}
	  });
	  
	 });
</script>
<script>
$(document).ready(function () {
	
		$('#clickPaymentModal').click(function(){
			$("#modalPayment").modal('toggle');
		//	return false;
		});
		
	
});

</script>
<script>
	$('#printInvoice').on("click", function () {
		$('.printInvoice').printThis({
			copyTagClasses:true,
			importStyle:true,
			importCSS:true
		});
    });

</script>
<script>
var options = {
	
	mode:"popup",  //printable window is either iframe or browser popup
	popHt: 712,  // popup window height
	popWd: 1200,  // popup window width
	popX: 250,   // popup window screen X position
	popY: 150,  //popup window screen Y position
	popTitle: "Print Invoice", // popup window title element
	popClose: true,  // popup window close after printing
	strict: true
}
    $("div#print_button").click(function(){
		//alert('test');
    $("div.printInvoice").printArea(options);
});
</script>

	<!-- <footer class="main-footer">
        <?= $this->element('footer') ?>
      </footer> -->
	  </section>
	  
	  </div>

	
</body>
</html>
