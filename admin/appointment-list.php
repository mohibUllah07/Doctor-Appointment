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
							<li class="active"> 
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
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Patient Name</th>
													<th>Apointment Time</th>
													<th>Status</th>
													<th class="text-right">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Ruby Perrin</a>
														</h2>
													</td>
													<td>Dental</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
															<a href="profile.html">Charlene Reed </a>
														</h2>
													</td>
													<td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$200.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Darren Elder</a>
														</h2>
													</td>
													<td>Dental</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
															<a href="profile.html">Travis Trimble </a>
														</h2>
													</td>
													
													<td>5 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_2" class="check" checked>
															<label for="status_2" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$300.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Deborah Angel</a>
														</h2>
													</td>
													<td>Cardiology</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
															<a href="profile.html">Carl Kelly</a>
														</h2>
													</td>
													<td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_3" class="check" checked>
															<label for="status_3" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$150.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Sofia Brient</a>
														</h2>
													</td>
													<td>Urology</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
															<a href="profile.html"> Michelle Fairfax</a>
														</h2>
													</td>
													<td>7 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.20 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_4" class="check" checked>
															<label for="status_4" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$150.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Marvin Campbell</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
															<a href="profile.html">Gina Moore</a>
														</h2>
													</td>
													
													<td>15 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$200.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Katharine Berthold</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
															<a href="profile.html">Elsie Gilley</a>
														</h2>
													</td>
													
													<td>16 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$250.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Linda Tobin</a>
														</h2>
													</td>
													<td>Neurology</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
															<a href="profile.html">Joan Gardner</a>
														</h2>
													</td>
													
													<td>18 Nov 2019 <span class="text-primary d-block">1.10 PM - 1.25 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$260.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Paul Richard</a>
														</h2>
													</td>
													<td>Dermatology</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
															<a href="profile.html"> Daniel Griffing</a>
														</h2>
													</td>
													
													<td>18 Nov 2019 <span class="text-primary d-block">11.10 AM - 11.25 AM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$260.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. John Gibbs</a>
														</h2>
													</td>
													<td>Dental</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
															<a href="profile.html">Walter Roberson</a>
														</h2>
													</td>
													
													<td>21 Nov 2019 <span class="text-primary d-block">12.10 PM - 12.25 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$300.00
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Olga Barlow</a>
														</h2>
													</td>
													<td>Dental</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
															<a href="profile.html">Robert Rhodes</a>
														</h2>
													</td>
													
													<td>23 Nov 2019 <span class="text-primary d-block">12.10 PM - 12.25 PM</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_5" class="check" checked>
															<label for="status_5" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														$300.00
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>