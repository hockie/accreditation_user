
<br />
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
					  <h1><strong>REVIEW YOUR INFORMATION</strong></h1>
					</div>
					<div class="card-body">
					
					  <div class="form-group row">
					   <div class="col-sm-12">
						<h2><strong>ACCOUNT IDENTIFIERS</strong></h2>
					   </div>
					  <label class="col-sm-4 form-control-label">Official Email Address:</label>
                      <div class="col-sm-8">
                        <?= $establishment_accounts['email'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">TIN:</label>
                      <div class="col-sm-8">
                        <?= $establishment_accounts['tin'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Type of Organization:</label>
                      <div class="col-sm-8">
                        <?= $org_type[$establishment_accounts['type_of_org']] ?>
                      </div>
                    </div>
					<div class="line"></div>  
					<div class="form-group row">
					   <div class="col-sm-12">
						<h2><strong>ESTABLISHMENT DETAILS</strong></h2>
					   </div>
					  <label class="col-sm-4 form-control-label">Establishment Name:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['establishment_name'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Business Address:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['address'] ?>, <?= $municipality_cities[$establishment_details['municipality_city_id']] ?>, <?= $district_provinces[$establishment_details['district_province_id']] ?>, <?= $regions[$establishment_details['region_id']] ?>, <?= $zip_codes[$establishment_details['zip_code_id']] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Business Website:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['website'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Telephone No:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['telephone_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Mobile No:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['mobile_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Email Address:</label>
                      <div class="col-sm-8">
                        <?= $establishment_details['email'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Date Established:</label>
                      <div class="col-sm-8">
                        <?= date('M-d-Y',strtotime( $establishment_details['date_established'])) ?>
                      </div>
					  <div class="line"></div>  
					    <div class="col-sm-12">
						<h2><strong>MANAGEMENT DETAILS</strong></h2>
						<h2><strong>Ownership Information</strong></h2>
					   </div>
					   <label class="col-sm-4 form-control-label">Owner's Name:</label>
                      <div class="col-sm-8">
                        <?= $owner_informations['first_name'] ?>
                      </div>
					   <label class="col-sm-4 form-control-label">Address:</label>
                      <div class="col-sm-8">
                        <?= $owner_informations['address'] ?>, <?= $municipality_cities[$owner_informations['municipality_city_id']] ?>, <?= $district_provinces[$owner_informations['district_province_id']] ?>, <?= $regions[$owner_informations['region_id']] ?>, <?= $zip_codes[$owner_informations['zip_code_id']] ?>
                      </div>
					   <label class="col-sm-4 form-control-label">Nationality:</label>
                      <div class="col-sm-8">
                         <?= $nationalities[$owner_informations['nationality_id']] ?>
                      </div>
					  <div class="col-sm-12">
						<h2><strong>Managing Company Information</strong></h2>
					   </div>
					   <label class="col-sm-4 form-control-label">Company Name:</label>
                      <div class="col-sm-8">
                        <?= $managing_company_informations['company_name'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Address:</label>
                      <div class="col-sm-8">
					   <?= $managing_company_informations['address'] ?>, <?= $municipality_cities[$managing_company_informations['municipality_city_id']] ?>, <?= $district_provinces[$managing_company_informations['district_province_id']] ?>, <?= $regions[$managing_company_informations['region_id']] ?>, <?= $zip_codes[$managing_company_informations['zip_code_id']] ?>
                      
                      </div>
					  <div class="line"></div>
					   <div class="col-sm-12">
						<h2><strong>PERMITS</strong></h2>
					   </div>
					   <label class="col-sm-4 form-control-label">Mayor's Permit:</label>
                      <div class="col-sm-8">
                        <?= $mayor_permits['permit_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Valid Until:</label>
                      <div class="col-sm-8">
                        <?= date('M-d-Y',strtotime($mayor_permits['valid_until'])) ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Place Issued:</label>
                      <div class="col-sm-8">
                        <?= $mayor_permits['place_issued'] ?>
                      </div>
					  <?php if($sec_permits != null){ ?>
					  <label class="col-sm-4 form-control-label">SEC Permit No:</label>
                      <div class="col-sm-8">
                        <?= $sec_permits['permit_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Valid Until:</label>
                      <div class="col-sm-8">
                        <?= $sec_permits['valid_until'] ?>
                      </div>
					  <?php } ?>
					  <?php if($dti_permits != null){ ?>
					  <label class="col-sm-4 form-control-label">DTI Permit No:</label>
                      <div class="col-sm-8">
                        <?= $dti_permits['permit_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Valid Until:</label>
                      <div class="col-sm-8">
                        <?= $dti_permits['valid_until'] ?>
                      </div>
					  <?php } ?>
					  <?php if($cda_permits != null){ ?>
					  <label class="col-sm-4 form-control-label">CDA Permit No:</label>
                      <div class="col-sm-8">
                        <?= $cda_permits['permit_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Valid Until:</label>
                      <div class="col-sm-8">
                        <?= $cda_permits['valid_until'] ?>
                      </div>
					  <?php } ?>
					   <div class="line"></div>
					    <div class="col-sm-12">
						<h2><strong>GENERAL MANAGER</strong></h2>
					   </div>
					   <label class="col-sm-4 form-control-label">Full Name:</label>
                      <div class="col-sm-8">
                        <?= $general_manager_informations['name_prefix']. ' ' . $general_manager_informations['first_name'] . ' ' . $general_manager_informations['middle_name'] . ' ' . $general_manager_informations['last_name'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Last Name:</label>
                      <div class="col-sm-8">
                        <?= $general_manager_informations['last_name'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Email Address:</label>
                      <div class="col-sm-8">
                        <?= $general_manager_informations['email'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Mobile Number:</label>
                      <div class="col-sm-8">
                        <?= $general_manager_informations['mobile_no'] ?>
                      </div>
					  <label class="col-sm-4 form-control-label">Nationality:</label>
                      <div class="col-sm-8">
                          <?= $nationalities[$general_manager_informations['nationality_id']] ?>
                      </div>
					  <div class="line"></div>
					    <div class="col-sm-12">
						<h2><strong>AUTHORIZED REPRESENTATIVE</strong></h2>
					   </div>
					   <label class="col-sm-4 form-control-label">Full Name:</label>
                      <div class="col-sm-8">
                        <?= $authorized_representatives['fullname'] ?>
                      </div>
					   <label class="col-sm-4 form-control-label">Designation:</label>
                      <div class="col-sm-8">
                        <?= $authorized_representatives['designation'] ?>
                      </div>
					   <label class="col-sm-4 form-control-label">Telephone No:</label>
                      <div class="col-sm-8">
                        <?= $authorized_representatives['telephone_no'] ?>
                      </div>
					   <label class="col-sm-4 form-control-label">Mobile No:</label>
                      <div class="col-sm-8">
                        <?= $authorized_representatives['mobile_no'] ?>
                      </div>
					  <div class="line"></div>
						<div class="col-sm-12 text-center">
							<h1>PLEASE CONFIRM IF THE FOLLOWING DETAILS ABOVE ARE CORRECT.</h1><a data-toggle="modal" href=".terms-conditions-modal-lg">CLICK HERE TO CONTINUE</a>
						</div>
					  <div class="line"></div>
					 

					 
					  
                    </div>
					</div>
				  </div>
				
              </div>
			  <!--payment type-->
			  <div class="modal fade terms-conditions-modal-lg" tabindex="-1" role="dialog" aria-labelledby="termsConditionsModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h1>TERMS AND CONDITIONS</h1>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">					
								  <!-- Page Header-->
							   <div class="row">
								<div class="col-sm-12">
									<h5>INTRODUCTION</h5>
									<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.</p>
									<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
									<p>Minors or people below 18 years old are not allowed to use this Website.</p>
									<h5>INTELLECTUAL PROPERTY RIGHTS</h5>
									<p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
									<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>
									<h5>DESCRIPTION OF SERVICE</h5>
									<p>The aim of this Service is to expedite the terms of payment of applicants who wants to get DOT Accreditation.</p>
									<h5>PRIVACY</h5>
									<p>The information that can be gathered in this site will be treated as highly confidential. The DOT may use your contact information to send e-mail or other communications regarding your clearance or updates about this service. We may also use your data for statistics, summaries, research and studies for development of new markets and standards.</p>
									<h5>Security Systems</h5>
									<p>DOT Accreditation deploys intrusion detection systems, firewalls, encryption systems such as 256-bit Secure Sockets Layer (SSL) and other internal controls which are meant to safeguard, physically and logically, all our servers and information systems, including the data stored in these systems. Furthermore, it has an in-house Databank and Network Management Division that secures the maintenance of the whole facility.</p>
									<h5>Website Authentication</h5>
									<p>Online Accreditation System is secure, Digital Certificates is installed and running. The browser address bar is Green authenticates that surfing on this site is secured.</p>
									<h5>Email</h5>
									<p>Online Accreditation System transactions will generate a corresponding email which will be sent to applicant’s personal email address. DOT Accreditation encourages applicants to continually check and verify their email to assure that all payment transactions are in order.</p>
									<h5>Password Protection</h5>
									<p>All applicants visiting the Online Accreditation System pass through the Log-in authentication process. It is always advised to keep password confidential by not writing or divulging it to anyone. Change password frequently or change it immediately once password has been compromised. The system has a lock-out policy for accounts that reached the maximum failed attempts.</p>
									<h5>AVAILABILITY OF SERVICE</h5>
									<p>While Online Accreditation System is available twenty-four (24) hours a day, seven (7) days a week, service may not be available at certain times due to designated service periods, maintenance, computer, telecommunication, electrical or network failure and/or any other reasons beyond the control of DOT Accreditation.</p>
									<h5>REGISTRATION OBLIGATIONS</h5>
									<p>In consideration of your use of this Service, you agree to: (a) provide true and complete information about yourself as prompted in the Information Sheet Form and (b) maintain and promptly update the work information to keep it true and complete.</p>
									<p>Registrants agree not to use this Service for any of the following purposes which are expressly prohibited:</p>
									<ul>
										<li>Posting incomplete, untrue or inaccurate information;</li>
										<li>Deleting or revising any information posted by any other person or entity;</li>
										<li>Disclosing to or sharing own password with any third parties or using own password for any unauthorized purpose;</li>
										<li>Printing, downloading, duplicating or copying and using any personally identifiable information about other users;</li>
										<li>Impersonate any person or entity or falsely state or otherwise misrepresent your affiliation with a person or entity;</li>
									</ul>
									<p>Violating or attempting to violate the security of this site, including accessing data not intended for them or logging into a server or account which they are not authorized to access, probe or test the vulnerability of a system or network, attempting to interfere with service to any user, host or network. Violations of this security may result in civil or criminal liability.</p>
									<p>Using this site to transmit, distribute or store material in violation of any applicable law or regulation, or in any matter that will infringe the copyright.</p>
									<p>Using any device, software or routine to interfere or attempt to interfere with the proper working of any activity being conducted on this site.</p>
									<h5>PASSWORD USAGE</h5>
									<p>You will have to complete the sign-up form in order to create your own User ID and Password. The email address you will provide will also serve as your User ID. You are responsible for maintaining the confidentiality of the password and account and are fully responsible for all activities that occur under your password or account. You agree to (a) immediately notify the DOT Accreditation of any unauthorized use of your Password or account or any other breach of security, and (b) ensure that you exit from your account at the end of each session.</p>
									<p>It is your responsibility to ensure that only you have access to your information by keeping your User ID and Password secured. As such, you subscribe the following:</p>
									<ul>
										<li>I agree not to let anyone know of my Password.</li>
										<li>I agree to assume full responsibility for all transactions made in my accounts through the use of my User ID and Password. It is understood that the Password is known only to me and as such, any transaction effected using my Password shall be conversely presumed to be done by me or authorized by me.</li>
										<li>I further agree to undertake to change my Password from time to time as I deem necessary and should I feel that my Password has been compromised, I shall immediately change my Password through the Online Accreditation System Password Facility.</li>

									</ul>
									<h5>DISCLAIMER OF WARRANTIES</h5>
									<p>Registrants acknowledge and agree that they are solely responsible for the content of and accuracy of the information placed by them in this site. The DOT does not represent or guarantee the truthfulness, accuracy or reliability of any information posted by the registrants. The DOT however reserves the right to the following:</p>
									<ul>
										<li>Request the applicants to submit the hardcopy of DOT Accreditation registration requirements in order to verify the authenticity of the posted information in case the applicants are pre-qualified by the DOT.</li>
										<li>Remove any information which is abusive, illegal or disruptive. <i>(paragraph previously under Registration Obligations)</i></li>
										<li>The DOT does not warrant that this site will operate error-free or that its server is free of computer viruses or other harmful mechanisms. The web site content is provided on an "AS-IS" basis without any warranties of any kind. DOT, fully permitted by law, disclaims all warranties, whether express or implied, including the warranty of merchantability, fitness for purpose and non-infringement. DOT makes no warranties about the accuracy, reliability, completeness, or timeliness of the web site content, services, software, text, graphics, and links. <i>(paragraph previously under Security Policy)</i></li>
										<li>You acknowledge and agree that DOT may preserve Content and may also disclose Content if required to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to: (a) comply with legal process; (b) enforce the Terms and Conditions; (c) respond to claims that any Content violates the rights of third-parties; or (d) protect the rights, property, or personal safety of the DOT, its users, and the public.</li>
										
									</ul>
									<h5>FORFEITURE OF FEES</h5>
									<p>Registrant/Applicant accepts the right of the DOT to forfeit fees collected under this agreement for failure of registrant/applicant to appear on the chosen schedule/date of appointment.</p>
									<h5>VIOLATIONS</h5>
									<p>In any case of any fraudulent, misdeclaration of the applicant in the use of these Service, the DOT may expel the applicant and prevent his/her further access to the DOT’s site, at any time for breaching the terms and conditions of this Service or for violating the applicable laws.</p>
									<p>Please report any violations of the OAS to our Customer Care/Help Desk group.</p>
									<p>I HEREBY AGREE TO BE GOVERNED BY THE TERMS AND CONDITIONS OF THE DOT ONLINE ACCREDITATION SYSTEM AGREEMENT. I HEREBY ALSO ACKNOWLEDGE TO HAVE READ AND FULLY UNDERSTOOD THE SAID TERMS AND CONDITIONS.</p>
	
									<p>...</p>
									<p class="text-right"><a href="../../Payments/account-payment/<?= $estacc_id; ?>" type="button" class="btn btn-primary">I ACCEPT </a></p>
								</div>
								
								
							</div>	
						</div>								
					</div>
				  </div>
			</div>
			
			<!--payment type-->
			  <div class="modal fade payment-type-modal-lg" tabindex="-1" role="dialog" aria-labelledby="paymentTypeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">New message</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">					
								  <!-- Page Header-->
							   <div class="row">
								<div class="col-sm-3">
									<label class="control-label" for="payment_option_radios">Select Payment Type</label>
								</div>
								<div class="col-md-4 align-left">
									<div id="radioPayment">
										<div class="radio">
											<label for="payment_option_radios-0">
												<input type="radio" name="payment_option_radios" id="payment_option_radios-0" value="DOTC" checked="checked">
													DOT Cashier
											</label>
										</div>
										<div class="radio">
											<label for="payment_option_radios-1">
												<input type="radio" name="payment_option_radios" id="payment_option_radios-1" value="OP">
													Online Payment
											</label>
										</div>
										<div class="radio">
											<label for="payment_option_radios-2">
												<input type="radio" name="payment_option_radios" id="payment_option_radios-2" value="PC">
												Payment Centers
											</label>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<a href="/accreditation_user/Payments/account_payment/<?= $establishment_accounts['id'] ?>" class="btn btn-lg btn-success" disabled="disabled" id="continuePayment" /><i class="fa fa-money"></i> Continue to payment </a>
								</div>
							</div>	
						</div>								
					</div>
				  </div>
			</div>


						
		</div>
		<?= $this->Form->end() ?>
		</div>
		
	</section>
<br />

