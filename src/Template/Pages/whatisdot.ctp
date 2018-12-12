<?php $this->assign('title', 'Welcome'); ?>

<div class="row-fluid">

			<div class="columns large-4">
				<div class="row">
					<div class="columns large-12 cardbox">				
					  <div class="card">
						<div class="card-header d-flex align-items-center">
						  <h4>Sign In</h4>
						</div>
						
						<div class="card-body">
							
						  <?= $this->Form->create(null,['url'=>['controller'=>'Users','action'=>'login']]) ?>
							<div class="form-group">
							  <label>Email</label>
							  <input type="email" placeholder="Email Address" class="form-control">
							</div>
							<div class="form-group">       
							  <label>Password</label>
							  <input type="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">       
							 
							  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary','value'=>'Signin']) ?>
			
							</div>
						  <?= $this->Form->end() ?>
						  <p>Not registered? <?= $this->Html->link('Register here',['controller'=>'EntityCategoryTypes','action'=>'selectCategoryType']); ?></p>
						  <p style="font-size:12px;">By proceeding, you agree to our <?= $this->Html->link('Terms of Service',['url'=>'#']); ?> and <?= $this->Html->link('Privacy Policy',['url'=>'#']); ?></p>
						</div>
					  </div>
					 </div>	
					 <div class="col-lg-12 col-md-12 cardbox">
					
              <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">Downloadable files</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                    <!-- list_documents-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#list_documents" data-toggle="modal" >List of Documentary Requirements</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#list_documents" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
                      </div>
                    </li>
                    <!-- rules-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#rules" data-toggle="modal" >Rules and Regulations Governing Accreditation of Tourism Enterprise</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#rules" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
                      </div>
                    </li>
                    <!-- circular-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#circular" data-toggle="modal" >DOT Circulars and Other Government-related Issuances</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#circular" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
                      </div>
                    </li>
					 <!-- forms-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#forms" data-toggle="modal" >DOT Related Accreditation Forms</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#forms" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
                      </div>
                    </li>
					</ul>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
            </div>
			</div>
	
    <div class="columns large-8">
	
        <div class="card">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12">
                        <div id="DOT-Accreditation" class="card-body">
                            <br><center><h1><strong>DOT Accreditation</strong> is a certificate issued by the department recognizing the holder as having complied with its minimum standards in the operation of the establishment concerned which shall ensure the safety, comfort, and convenience of the tourist.</h1></center>                             
                        </div>	       
                        <hr>
                        <div id="eligibility" class="card-body">
                            <h1>DOT Accreditation</h1>
                            <h4>The following may apply for accreditation with the Department of Tourism</h4>
                            <ul>
                                <li>A resident Filipino Citizen</li>
                                <li>A partnership organized under the laws of the Philippines, at least 60% of its capital being owned by Filipino Citizens</li>
                                <li>A corporation organized under the laws of the Philippines, at least 60% of the subscribed common or voting shares of stocks of which is owned by Filipino citizens and the composition of its Board of Directors being at least 60% Filipinos</li>
                                <li>Entity applicant is already in operation</li>
                            </ul>
                            <h4>Additional eligibility qualifications:</h4>
                            <br>
                            <h4>For Tourist Land Transport Operators:</h4>  
                            <ul>
                                <li>A minimum of three (3) vehicles covered with a valid “Tourist Transport Franchise” issued by the Land Transportation Franchising and Regulatory Board</li>
                                <li>The vehicles shall not be more than:</li>
                                    <ul>
                                        <li>Ten (10) years for cars, jeepneys and vans </li>
                                        <li>Fifteen (15) years for buses and coasters </li>
                                    </ul>
                            </ul>       
                            <br>     
                            <h4>For Tourist Taxi Driver (Metered and Coupon):</h4>         
                                <ul>
                                    <li>Shall have passed a Tourist Taxi Drivers Seminar conducted by the Department of Tourism</li>
                                </ul>    
                            <br>  
                            <h4>For Tourist Guide/Cave Guide/Mountain Guide</h4>
                                <ul><li>Shall have passed a Tour Guiding Seminar conducted by the Department of Tourism</li></ul>
                            <br>
                            <h4>For Travel and Tour Agency</h4>
                                <ul>
                                    <li>The General Manager shall have at least three (3) years managerial experience in tour operations and/or has attended a tour operator’s course or a travel agency management course</li>
                                    <li>With Inbound and/or Local tours</li>
                                    <li>A minimum working capital requirement of P500,000.00</li>
                                </ul>
                        </div>	  
                        <hr>
                        <div id="benefits-incentives" class="card-body">
                            <h1>Benefits and Incentives</h1>
                            <h3>Non-fiscal Incentives</h3>
                            <ol>
                                <li>Endorsement to COMELEC for exemption from Liqour ban during Election-related events (for Accommodation Establishments and Restaurants Only) </li>
                                <li>Endorsement to Embassies and Travel Trade Association/s for utilization of Establishment’s Facilities and Services</li>
                                <li>Priority to DOT Training Programs </li>
                                <li>Issuance of DOT ID Card to Bonafide Employees </li>
                                <li>Endorsement to International and Domestic Airports (if appropriate) for Issuance of Access Pass to Qualified Personnel (for Tour Operators and Accommodation Establishments Only) </li>
                                <li>Qualification for Exemption from the Unified Vehicular Volume Reducation Program (UVVRP) of the Metro Manila Development Authority (MMDA) (for Tourist Land Transport Vehicles Only) </li>
                                <li>Endorsement to LTFRB for Issuance of Tourist Transport Franchise (for Tourist Land Transport Vehicles Only); and </li>
                                <li>Technical/Security/Facilitation Support or Assistance </li>
                            </ol>
                        </div>	       
                        <hr>  
                        <div id="accredterms" class="card-body">
                            <h1>Definition of Accreditation-related Terms</h1>
                            <br>
                            <h3>Primary Tourism Entities</h3>
                            <div class="row-col">
                                <div class="col-md-12">
                                    <h5>Accommodation Establishments:</h5>
                                        <p><strong>Hotel</strong> - a building, edifice or premiss, or a completely independent part thereof, which is used for the regular reception, accommodation or lodging of travelers and tourist and the provision of services incidental thereto for a fee.</p>
                                        <p><strong>Resort</strong> - any place or places with pleasant environment and atmosphere conductive to comfort, healthful relaxation and rest, offering food, sleeping accommodation and recreational facilities to the public for a fee or remuneration.</p>
                                        <p><strong>Tourist Inn</strong> - a lodging establishment catering to transients which does not meet the minimum requirements of an economy hotel.</p>
                                        <p><strong>Apartment Hotel</strong> - any building or edifice containing several independent and furnished or semi-furnished apartments, regularly leased to tourists and travelers for dwelling on a more or less long term basis and offering basic services to its tenants, similar to hotels.</p>
                                        <p><strong>Pension house</strong> - a private or family-operated tourist boarding house, tourist guest house or tourist lodging house employing non-professional domestic helpers regularly catering to tourist and travelers, containing several independent lettable rooms, providing common facilities such as toilets, bathrooms/showers, living and dining rooms and/or kitchen and where a combination of board and lodging may be provided.</p>
                                        <p><strong>Motorist hotel (Motel)</strong> - any structure with several separate units, primarily located along the highway with individual or common parking space at which motorist may obtain lodging and, in some instances, meals.</p>
                                        <p><strong>Homestay</strong> - are alternative accommodation facilities operated by its dwellers, offering board and lodging while extending the best Filipino hospitality, culture and lifestyle to its guests. </p>
                                        <p><strong>Ecolodge</strong> - a facility where visitors may stay overbight during their visit to an ecotourism site. It includes infrasturcture and services designed to provide visitors with convenience, safety and an enjoyable stay.</p>                                
                                    <hr>
                                    <br>
                                    <h5>Travel and Tour Services:</h5>     
                                        <p><strong>Tourist Land Transport Operator</strong> - person or entity which may either be a single proprietorship, partnership or corporation, regularly engaged in providing, for a fee or lawful consideration, tourist transport services as hereinafter defined, either on charter or regular run.</p>
                                        <p><strong>Tourist Water Transport</strong> - any watercraft catering to tourists.</p>
                                        <p><strong>Tourist Air Transport</strong> - air conveyance catering to tourists.</p>
                                        <p><strong>Ecotour Operator</strong> - An activity in which one or more guides take an individual or group of people on an excursion to one or several places. Tours typically combine activities such as walking, driving or riding with viewing and interacting with the environment and culture of the area.</p>
                                        <p><strong>Travel and Tour Operator</strong> - shall mean an entity which may either be a single proprietorship, partnership or corporation regularly engaged in the business of extending to individuals or groups, such services pertaining to arrangements and bookings for transportation and/or accommodation, handling and/or conduct of inbound tours whether or not for a fee, commission, or any form of compensation.</p>
                                    <hr>
                                    <br>
                                    <h5>Tourism Frontliners:</h5>     
                                        <p><strong>Tour Guide</strong> - shall mean an individual who guides tourists, both foreign and domestic, for a fee, commission, or any other form of lawful remuneration.</p>                                
                                </div>
                            </div>
                            <hr>
                            <br>
                            <h3>Secondary Tourism Entities </h3>
                            <div class="row-col">
                                <div class="col-md-12">
                                    <h5>Health and Wellness Facilities:</h5>
                                        <p><strong>Medical Tourism</strong> involves traveling for the purpose of availing health care services or treatments of illnesses and health problems in order to maintain one’s health and well-being.</p>
                                        <p><strong>Tertiary Hospital for Medical Tourism</strong> - an institution that provides clinical care and management, as well as specialized and sub-specialized forms of treatments, surgical procedure and intensive care.</p>
                                        <p><strong>Spa</strong> - is an establishment that has a holistic approach to health and wellness, rest and relaxation that aims to treat the body, mind and spirit by integrating a range of professionally administered health, wellness, fitnes and beauty, water treatment and services.</p>
                                        <p><strong>Ambulatory Clinic</strong> - a government or privately owned institution which is primarily organized, constructed, renovated or otherwise established for the purpose of providing elective surgical treatment of out patients whose recovery under normal and routine circumstances, will not require inpatient care.</p>
                                    <hr>
                                    <br>
                                    <h5>Tourism Related Entities:</h5>     
                                        <p><strong>Restaurant</strong> - any establishment offering to the public refreshments and/or meals.</p>
                                        <p><strong>Department Store/Shopping Mall</strong> - a store that sells or carries several lines of merchandise and that is organized into separate sections for the purpose of promotion, service, accounting and control.</p>
                                        <p><strong>Tourist Shop</strong> - a small retail establishment offering a line of goods or services.</p>
                                        <p><strong>Training Center</strong> - any establishment which offers one or more training programs for tourism manpower development and which is equipped with training facilities, equipment and instructional staff.</p>
                                    <hr>
                                    <br>
                                    <h5>Sports and Recreational Facilities:</h5>     
                                        <p><strong>Sports and Recreational Club/Center</strong> - any establishment offering sports and recreational facilities to tourist and to the general public.</p>                                
                                        <p><strong>Museum</strong> - an institutional establishment where a collection of valuable objects and artifacts on history and culture, arts and sciences are put on exhibition for the general public.</p>                               
                                        <hr>
                                    <br>
                                    <h5>Tourism Frontliners:</h5>     
                                        <p><strong>Trainor</strong> - any individual who conducts training programs as specified in the preceding paragraph.</p>                                
                                </div>
                            </div>                            
                        </div>	       
                        <hr>  
                        <div id="howtoapply" class="card-body">
                            <h1>STEPS IN APPLYING ONLINE</h1>
                            <br>
                            <div class="row-col">
                                <div class="col-md-12">
                                    <h5>(New Application)</h5>
                                    <ol>
                                        <li>Sollicitudin et vestibulum elementum nulla tempor sed, viverra volutpat sagittis ante commodo ut aptent, esse faucibus tortor magna ac purus, lectus ligula netus diam lectus tellus. </li>
                                        <li>Purus neque montes mi rhoncus cras euismod, rutrum turpis curae ligula amet orci id, odio lectus elit mauris platea aliquet, sed ultrices nam sagittis nonummy in. </li>
                                        <li>Odio adipiscing blandit neque imperdiet faucibus quis, diam eget metus ut pellentesque at volutpat, et consequat consectetuer pellentesque sit pellentesque nisl, ac sapien cras eu tortor id. </li>
                                        <li>Tristique sodales sodales libero blandit nec aenean, fringilla libero donec praesent aenean nullam, id phasellus sollicitudin sodales hendrerit risus, sit a in placerat volutpat malesuada. </li>
                                        <li>Aliquet auctor ut dui eros exercitationem, eget tenetur integer non elit pellentesque praesent, eget etiam ac et lacus pellentesque. </li>
                                    </ol>
                                </div>
                            </div> 
                            <hr>
                            <br>                            
                            <div class="row-col">
                                <div class="col-md-12">
                                    <h5>(Renewal)</h5>
                                    <ol>
                                        <li>Sollicitudin et vestibulum elementum nulla tempor sed, viverra volutpat sagittis ante commodo ut aptent, esse faucibus tortor magna ac purus, lectus ligula netus diam lectus tellus. </li>
                                        <li>Purus neque montes mi rhoncus cras euismod, rutrum turpis curae ligula amet orci id, odio lectus elit mauris platea aliquet, sed ultrices nam sagittis nonummy in. </li>
                                        <li>Odio adipiscing blandit neque imperdiet faucibus quis, diam eget metus ut pellentesque at volutpat, et consequat consectetuer pellentesque sit pellentesque nisl, ac sapien cras eu tortor id. </li>
                                        <li>Tristique sodales sodales libero blandit nec aenean, fringilla libero donec praesent aenean nullam, id phasellus sollicitudin sodales hendrerit risus, sit a in placerat volutpat malesuada. </li>
                                        <li>Aliquet auctor ut dui eros exercitationem, eget tenetur integer non elit pellentesque praesent, eget etiam ac et lacus pellentesque. </li>
                                    </ol>
                                </div>
                            </div>                                                        
                        </div>	       
                        <hr>  
                        <div id="accredited-entities" class="card-body">
                            <h1>Accredited Entities</h1>
                            <br>                            
                            <div class="row-col">
                                <div class="col-md-12">
                                    <embed src="http://accreditationonline.tourism.gov.ph/Pages/Portal/PortalListEstablishments.aspx" width="100%" height="800" scrolling="no">    
                                </div>
                            </div>                    
                        </div>	       
                        <hr>                       
                    </div>
                </div>
            </div>
        </div>

    </div>
	<!-- list of documents> -->
	 <div class="modal fade" id="list_documents" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">List of Documentary Requirements</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			 
			</div>
			<div class="modal-body">
			   
				<ul class="check-lists list-unstyled">
			  <?php 
				$i = 0;
				foreach($downloadableFiles as $downloadableFile):
				$i=$i+1;
				?>
					<li class="d-flex align-items-center"> 
					   <label><a href="img/files/downloadable_files/<?= $downloadableFile['file'] ?>" target="_blank"><i class="fa fa-download"></i></label> &nbsp;
						<label for="list-<?= $i ?>"><?= $downloadableFile['description'] ?></a></label>
						
					  </li>
				
			<?php endforeach;  ?>
				</ul>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	<!-- list of documents> -->
	<!-- rules -->
	 <div class="modal fade" id="rules" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Rules and Regulations Governing Accreditation of Tourism Enterprises</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			 
			</div>
			<div class="modal-body">
			   
				<ul class="check-lists list-unstyled">
			  <?php 
				$i = 0;
				foreach($rulesRegulations as $rulesRegulation):
				$i=$i+1;
				?>
					<li class="d-flex align-items-center"> 
					   <label><a href="img/files/downloadable_files/<?= $rulesRegulation['file'] ?>" target="_blank"><i class="fa fa-download"></i></label> 
						<label for="list-<?= $i ?>"><?= $rulesRegulation['description'] ?></a></label>
						
					  </li>
				
			<?php endforeach;  ?>
				</ul>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	<!-- rules -->
	<!-- circular -->
	 <div class="modal fade" id="circular" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">DOT Circulars and Other Government-related Issuances</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			 
			</div>
			<div class="modal-body">
			   
				<ul class="check-lists list-unstyled">
			  <?php 
				$i = 0;
				foreach($dotCirculars as $dotCircular):
				$i=$i+1;
				?>
					<li class="d-flex align-items-center"> 
					   <label><a href="img/files/downloadable_files/<?= $dotCircular['file'] ?>" target="_blank"><i class="fa fa-download"></i></label> &nbsp;
						<label for="list-<?= $i ?>"><?= $dotCircular['description'] ?></a></label>
						
					  </li>
				
			<?php endforeach;  ?>
				</ul>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	<!-- circular -->
	<!-- forms -->
	 <div class="modal fade" id="forms" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">DOT Related Accreditation Forms</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			 
			</div>
			<div class="modal-body">
			   
				<ul class="check-lists list-unstyled">
			  <?php 
				$i = 0;
				foreach($appForms as $appForm):
				$i=$i+1;
				?>
					<li class="d-flex align-items-center"> 
					   <label><a href="img/files/downloadable_files/<?= $appForm['file'] ?>" target="_blank"><i class="fa fa-download"></i></label> &nbsp;
						<label for="list-<?= $i ?>"><?= $appForm['description'] ?></a></label>
						
					  </li>
				
			<?php endforeach;  ?>
				</ul>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	<!-- circular -->
</div>
