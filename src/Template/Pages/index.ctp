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
							
						  <?= $this->Form->create($user,['url'=>['controller'=>'users','action'=>'login']]) ?>
							<div class="form-group">
							  <?= $this->Form->input('email',['class'=>'form-control','required'=>'required']) ?>
							</div>
							<div class="form-group">       
							  <?= $this->Form->input('password',['class'=>'form-control','required'=>'required']) ?>							  
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
			   <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box2" aria-expanded="true" aria-controls="updates-box2">Suspended and Revoked Establishments</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box2" aria-expanded="true" aria-controls="updates-box2"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box2" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                    <!-- list_documents-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#list_documents" data-toggle="modal" >Revoked Establishments</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#list_documents" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
                      </div>
                    </li>
                    <!-- rules-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                       <div class="icon"><i class="fa-pdf-o"></i></div>
						<div class="title"><a href="#rules" data-toggle="modal" >Suspended Establishments</a></div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date"><a href="#rules" data-toggle="modal" ><i class="fa fa-file-pdf-o"></i></a></div>
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
	
		
		
				<video width="100%"   preload="auto" autoplay muted loop >
				  <source src="img/Presentation1.mp4" type="video/mp4">
				  <source src="movie.ogg" type="video/ogg">
				Your browser does not support the video tag.
				</video>
				<br />
				
		
	
	<?php foreach( $announcements as $announcement ): ?>
	
	<div class="card">
		<div class="container-fluid">
		<div class="row ">
			<div class="col-md-12">	
				<br />
				<?php
					echo "<h2 class='announcement'>".$announcement['title']."</h2>";
					echo "<small>".$announcement['created']."</small>";
					echo "<p>".$announcement['announcement']."</p>";
				?>
				</div>
			</div>
		</div>
	</div>
	
	<?php endforeach; ?>

		<hr />
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
