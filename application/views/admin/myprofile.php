<?php $this->load->view('admin/components/page_head'); ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/uploadifive/uploadifive.css" />
<script type="text/javascript" src="<?=base_url();?>assets/uploadifive/jquery.uploadifive.js" ></script>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
		
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				
				<li>
					<a href="<?php echo site_url('admin/home_admin/')?>" >
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li  class="start active">
					<a href="<?php echo site_url('admin/myprofile/')?>" >
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
					<span class="selected"></span>
				
					</a>
				</li>
				
				<li>
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request <span class="badge badge-default"><?php echo $count_request; ?></span></span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li >
					<a href="<?php echo site_url('admin/rankings/select_year')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/reports/reports_students/')?>">
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/forum_db/')?>" >
					<i class="icon-users"></i>
					<span class="title">Forums</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Eventadmin/')?>" >
					<i class="icon-users"></i>
					<span class="title">Event</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/gallery/')?>" >
					<i class="icon-list"></i>
					<span class="title">Gallery</span>
					<span class="selected"></span>
				
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

	
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			My Profile <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">User Profile</a>
					</li>
				</ul>

			</div>
			<!-- END PAGE HEADER-->


			<!-- header unta neh do -->
				<?php if($this->session->flashdata('result') != false){ ?>
								          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
								          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
								          </div>
				 <?php } ?>

			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom ">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								Overview </a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
								Account </a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li>
												<!-- <img src="../../assets/admin/pages/media/profile/profile-img.png" class="img-responsive" alt=""> -->
												<img src="<?php echo $admin->photo ?> " class="img-responsive" alt="">
											</li>
											
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1><?php echo $admin->firstname." ".$admin->lastname ?></h1>
												<p>
													<?php echo $admin->aboutme ?>	 
												</p>
										
											</div>
											<!--end col-md-8-->
											<div class="col-md-4">
											
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									
									</div>
								</div>
							</div>
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Personal info </a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
												<i class="fa fa-picture-o"></i> Change Avatar </a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
												<i class="fa fa-lock"></i> Change Password </a>
											</li>
						
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
											
												<?php
									                  $attributes = array('class' => 'form-horizontal form-without-legend', 'role' => 'form');
													  echo form_open('admin/myprofile/update_profile/', $attributes);
									                  ?>
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input type="text" placeholder="My First name" name="firstname" class="form-control" value="<?php echo $admin->firstname ?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
														<input type="text" placeholder="My Last name" name="lastname" class="form-control" value="<?php echo $admin->lastname ?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Gender</label>
														
														<select class="form-control" name="gender"  required>
														  <option value="">Select Gender</option>
														  <option value="male">Male</option>
														  <option value="female">Female</option>
	
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">Address</label>
														<input type="text" placeholder="Purok 3 Carmen Davao del Norte" class="form-control" value="<?php echo $admin->address ?>" name="address" />
													</div>
													<div class="form-group">
														<label class="control-label">Birthday</label>
														<input type="date"  class="form-control" value="<?php echo $admin->birthday ?>" name="birthday" />
													</div>
													<div class="form-group">
														<label class="control-label">About Me</label>
														<textarea class="form-control" rows="3" name="aboutme"><?php echo $admin->aboutme; ?></textarea>
													</div>
													<div class="margiv-top-10">
														<input type="submit" value="Save Changes" class="btn green">
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												<?php echo form_close(); ?>
											</div>
											<div id="tab_2-2" class="tab-pane">
												
												<!-- <form action="#" role="form"> -->
											

									             <form name="upload" id="upload" method="post" action="<?php echo site_url('upload_pic/uploadpicadmin') ?>" enctype="multipart/form-data">

													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
																<img src="<?php echo $admin->photo ?>"></img>
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change 
																</span>
																<!-- <input type="file" name="profilepic"> -->
																<input type="file" name="txtImage" size="20" />
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
													
													</div>
													<div class="margin-top-10">
													
														<input class="btn green" type="submit" value="submit" />
										
														<a href="#" class="btn default">
														Cancel </a>
													</div>
													<?php echo form_close(); ?>
												<!-- </form> -->
											</div>
											<div id="tab_3-3" class="tab-pane">
												<?php
									                  $attributes = array('class' => 'form-horizontal form-without-legend', 'role' => 'form');
													  echo form_open('admin/myprofile/change_pass/', $attributes);
									                  ?>
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input type="password" class="form-control" name="current_password" />
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control" name="new_pass" />
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control" name="retype_pass" />
													</div>
													<div class="margin-top-10">
														<input type="submit" value="Change Password" class="btn btn-primary">
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												<?php echo form_close(); ?>
											</div>
											
										</div>
									</div>
									<!--end col-md-9-->
								</div>
							</div>
					
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
	</div>
	
<?php $this->load->view('admin/components/page_tail'); ?>