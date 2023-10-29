<?php include "Navbar/header.php" ?>

		<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li> 
								<a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
							</li>
							<li> 
								<a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li> 
								<a href="patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
							</li>
							<li> 
								<a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
							</li>
							<li> 
								<a href="transactions-list.html"><i class="fe fe-activity"></i> <span>Transactions</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="invoice-report.html">Invoice Reports</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							<li> 
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a class="active" href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Input Groups</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Input Groups</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Basic Examples</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Group Left</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">@</span>
													</div>
													<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Group Right</label>
											<div class="col-lg-10">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">@example.com</span>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-2">URL Example</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">https://</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-lg-2">Group with Price</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">$</span>
													</div>
													<input type="text" class="form-control">
													<div class="input-group-append">
														<span class="input-group-text">.00</span>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row mb-0">
											<label class="col-form-label col-lg-2">Group with Price (Left)</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">$</span>
													</div>
													<div class="input-group-prepend">
														<span class="input-group-text">0.00</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Sizing</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Input Group Large</label>
											<div class="col-lg-10">
												<div class="input-group input-group-lg">
													<div class="input-group-prepend">
														<span class="input-group-text" id="sizing-addon1">@</span>
													</div>
													<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Input Group Default</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="sizing-addon2">@</span>
													</div>
													<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
												</div>
											</div>
										</div>
										<div class="form-group row mb-0">
											<label class="col-form-label col-lg-2">Input Group Small</label>
											<div class="col-lg-10">
												<div class="input-group input-group-sm">
													<div class="input-group-prepend">
														<span class="input-group-text" id="sizing-addon3">@</span>
													</div>
													<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Checkbox and Radio Addons</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Checkbox</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<input type="checkbox">
														</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group row mb-0">
											<label class="col-form-label col-lg-2">Radio</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<input type="radio">
														</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Multiple Addons</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Radio and Text Addons</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<input type="checkbox">
														</span>
													</div>
													<div class="input-group-prepend">
														<span class="input-group-text">$</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group row mb-0">
											<label class="col-form-label col-lg-2">Two Addons</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">$</span>
													</div>
													<div class="input-group-prepend">
														<span class="input-group-text">0.00</span>
													</div>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Buttons with dropdowns</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-lg-2">Radio and Text Addons</label>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
													</div>
													<input type="text" class="form-control" placeholder="Left dropdown">
												</div>
											</div>
										</div>

										<div class="form-group row mb-0">
											<label class="col-form-label col-lg-2">Two Addons</label>
											<div class="col-lg-10">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Right dropdown">
													<div class="input-group-append">
														<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>