<div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Account Identifier Details</h4>
                </div>
                <div class="card-body">
                  
                  <?= $this->Form->create($establishmentAccount) ?>
                    <div class="form-group">
                     <?= $this->Form->control('email_address',['type'=>'email','class'=>'form-control','placeholder'=>'Establishment Email address']) ?>
                    </div>
                    <div class="form-group">       
                      <?= $this->Form->control('tin_no',['class'=>'form-control','placeholder'=>'Establishment TIN No']) ?>
                    </div>
                    <div class="form-group">       
                      <?= $this->Form->control('note',['class'=>'form-control','placeholder'=>'Note']) ?>
                    </div>
				  <p><strong>NOTE</strong>: Make sure that the email address you provided is <strong>ACTIVE</strong> and <strong>VALID</strong>.  For ESTABLISHMENTS, ensure that this is a corporate email address or an email address that will be permanently associated to your company. Please refrain from using your personal email address as notifications and official communications will be forwarded to your registered email.</p>
				  <div class="form-group">  
						<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
					</div>
				  </form>
                </div>
              </div>
			  