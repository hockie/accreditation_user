<div class="card">
					<div class="card-header d-flex align-items-center">
					  <h4>Account Registration</h4>
					</div>
						<div class="card-body">
							<p>NOTE: Make sure that the email address you provided is <strong>ACTIVE</strong> and <strong>VALID</strong>.  For ESTABLISHMENTS, ensure that this is a corporate email address or an email address that will be permanently associated to your company. Please refrain from using your personal email address as notifications and official communications will be forwarded to your registered email.</p>
							
							<h2 class="display h4">Steps for application</h2>
							<ul class="check-lists list-unstyled" style="margin-left:0">
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= ( $proc1!=null ) ? $proc1 : '' ; ?>  id="list-1" name="list-1" class="form-control-custom">
								<label for="list-1">1. Select Establishment or Frontliner</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc2 ?>  id="list-2" name="list-2" class="form-control-custom">
								<label for="list-2">2. Account Identifiers</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc3 ?> id="list-3" name="list-3" class="form-control-custom">
								<label for="list-3">3. Establishment Details</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc4 ?> id="list-4" name="list-4" class="form-control-custom">
								<label for="list-4">4. Management details: Ownership Information</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc5 ?> id="list-5" name="list-5" class="form-control-custom">
								<label for="list-5">5. Management details: Managing Company Information</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true  <?= $proc6 ?>  id="list-6" name="list-6" class="form-control-custom">
								<label for="list-6">6. Permits</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc7 ?>  id="list-7" name="list-7" class="form-control-custom">
								<label for="list-7">7. General Manager</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc8 ?> id="list-8" name="list-8" class="form-control-custom">
								<label for="list-8">8. Authorized Representatives</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc9 ?> id="list-9" name="list-9" class="form-control-custom">
								<label for="list-9">9. COR Payment</label>
							  </li>
							  <li class="d-flex align-items-center"> 
								<input type="checkbox" disabled=true <?= $proc10 ?> id="list-10" name="list-10" class="form-control-custom">
								<label for="list-10">10. Done</label>
							  </li>
							</ul>
							</div>
						</div>
						
						