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
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="tables-basic.html">Basic Tables </a></li>
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
								<h3 class="page-title">Basic Tables</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Basic Tables</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Basic Table</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Striped Rows</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Bordered Table</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Hover Rows</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Contextual Classes</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Default</td>
													<td>Defaultson</td>
													<td>def@somemail.com</td>
												</tr>
												<tr class="table-primary">
													<td>Primary</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr class="table-secondary">
													<td>Secondary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr class="table-success">
													<td>Success</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
												<tr class="table-danger">
													<td>Danger</td>
													<td>Refs</td>
													<td>bo@example.com</td>
												</tr>
												<tr class="table-warning">
													<td>Warning</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-info">
													<td>Info</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-light">
													<td>Light</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-dark">
													<td>Dark</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Responsive Tables</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Age</th>
													<th>City</th>
													<th>Country</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
											</tbody>
										</table>
									</div>
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