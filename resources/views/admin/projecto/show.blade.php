

@extends('admin.layouts.master')



@section('content')





			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Course Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Course</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Course Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="course-picture">
												<img src="{{ asset('admin')}}/assets/img/course/course1.jpg" class="img-responsive"
													alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> Web Development </div>
										</div>
										<!-- END SIDEBAR USER TITLE -->
									</div>
								</div>
								<div class="card">
									<div class="card-head">
										<header>About Course</header>
									</div>

									<div class="card-body no-padding height-9">
										<div class="profile-desc">
											Open after rule place He earth earth good called days unto which wherein day
											doesn't said day image signs
											fish days forth for evening whose his make his bearing years gathering good
											brought without.
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Duration </b>
												<div class="profile-desc-item pull-right">1 Year</div>
											</li>
											<li class="list-group-item">
												<b>Price </b>
												<div class="profile-desc-item pull-right">$230.00</div>
											</li>
											<li class="list-group-item">
												<b>Professor Name </b>
												<div class="profile-desc-item pull-right">Abdul Saikh</div>
											</li>
											<li class="list-group-item">
												<b>Date</b>
												<div class="profile-desc-item pull-right">21st Jan 2017</div>
											</li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 4 </div>
												<div class="uppercase profile-stat-text"> Years </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 1045 </div>
												<div class="uppercase profile-stat-text"> Students </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Batches </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->

							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo">
													<div id="biography">

                                                        <h4 class="font-bold"> Módulos </h4>

                                                         <hr>


                                                         <div class="card-body ">
                                                            <!-- start course list -->
                                                            <div class="row">

                                                                <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                                                    <div class="blogThumb">
                                                                        <div class="thumb-center"><img class="img-responsive" alt="user" src="{{ asset('admin')}}/assets/img/course/course1.jpg"></div>
                                                                        <div class="course-box">
                                                                            <h4>Acadêmico </h4>
                                                                            <div class="text-muted"><span class="m-r-10">Estado</span>
                                                                                <a class="course-likes m-l-10" href="#"> Disponível</a>
                                                                            </div>
                                                                          {{--   <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                                                                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                                                                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p> --}}

                                                                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info" data-upgraded=",MaterialButton,MaterialRipple">
                                                                                Ver <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
                                                                            </button>

                                                                            <button type="button" title="editar o módulo" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info" data-upgraded=",MaterialButton,MaterialRipple">
                                                                              <i  class="far fa-edit" ></i>
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                </div>






                                                            </div>
                                                            <!-- End course list -->
                                                        </div>




														<br>
														<h4 class="font-bold">After the completion of course the
															students will be able to: </h4>
														<hr>


														<ul>
															<li>Understand computers, its basic components and
																applications.</li>
															<li>Understand and Identify the Concepts of Computer
																Hardware and software.</li>
															<li>Implement Word Processing Basics.</li>
															<li>Create Spread sheets and use of formulas and functions.
															</li>
															<li>Create and develop a presentation.</li>
															<li>Understand basic concepts in Networking and
																Troubleshooting.</li>
															<li>Develop the skills for effective compose of E-mails and
																its features.</li>
															<li>Create and develop forms, queries and reports.</li>
															<li>Understand the concepts of multimedia and its
																applications.</li>
															<li>Develop the understanding of HTML.</li>
															<li>Understand the concepts of Tally and its applications.
															</li>
															<li>Maintenance of PC.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
				<!-- end page content -->
				<!-- start chat sidebar -->
				<div class="chat-sidebar-container" data-close-on-body-click="false">
					<div class="chat-sidebar">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
										class="material-icons">chat</i>Chat
									<span class="badge badge-danger">4</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
										class="material-icons">settings</i>
									Settings
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<!-- Start User Chat -->
							<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
								id="quick_sidebar_tab_1">
								<div class="chat-sidebar-list">
									<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
										data-wrapper-class="chat-sidebar-list">
										<div class="chat-header">
											<h5 class="list-heading">Online</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user3.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">John Deo</h5>
													<div class="media-heading-sub">Spine Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">5</span>
												</div> <img class="media-object" src="{{ asset('admin')}}/assets/img/user/user1.jpg"
													width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Rajesh</h5>
													<div class="media-heading-sub">Director</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user5.jpg" width="35" height="35" alt="...">
												<i class="away dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jacob Ryan</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-danger">8</span>
												</div> <img class="media-object" src="{{ asset('admin')}}/assets/img/user/user4.jpg"
													width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Kehn Anderson</h5>
													<div class="media-heading-sub">CEO</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user2.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Sarah Smith</h5>
													<div class="media-heading-sub">Anaesthetics</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user7.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Vlad Cardella</h5>
													<div class="media-heading-sub">Cardiologist</div>
												</div>
											</li>
										</ul>
										<div class="chat-header">
											<h5 class="list-heading">Offline</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media">
												<div class="media-status">
													<span class="badge badge-warning">4</span>
												</div> <img class="media-object" src="{{ asset('admin')}}/assets/img/user/user6.jpg"
													width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jennifer Maklen</h5>
													<div class="media-heading-sub">Nurse</div>
													<div class="media-heading-small">Last seen 01:20 AM</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user8.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Lina Smith</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
													<div class="media-heading-small">Last seen 11:14 PM</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">9</span>
												</div> <img class="media-object" src="{{ asset('admin')}}/assets/img/user/user9.jpg"
													width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jeff Adam</h5>
													<div class="media-heading-sub">Compounder</div>
													<div class="media-heading-small">Last seen 3:31 PM</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="{{ asset('admin')}}/assets/img/user/user10.jpg" width="35" height="35"
													alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Anjelina Cardella</h5>
													<div class="media-heading-sub">Physiotherapist</div>
													<div class="media-heading-small">Last seen 7:45 PM</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End User Chat -->
							<!-- Start Setting Panel -->
							<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
								<div class="chat-sidebar-settings-list slimscroll-style">
									<div class="chat-header">
										<h5 class="list-heading">Layout Settings</h5>
									</div>
									<div class="chatpane inner-content ">
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Sidebar Position</div>
												<div class="setting-set">
													<select
														class="sidebar-pos-option form-control input-inline input-sm input-small ">
														<option value="left" selected="selected">Left</option>
														<option value="right">Right</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Header</div>
												<div class="setting-set">
													<select
														class="page-header-option form-control input-inline input-sm input-small ">
														<option value="fixed" selected="selected">Fixed</option>
														<option value="default">Default</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Footer</div>
												<div class="setting-set">
													<select
														class="page-footer-option form-control input-inline input-sm input-small ">
														<option value="fixed">Fixed</option>
														<option value="default" selected="selected">Default</option>
													</select>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">Account Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Notifications</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-1">
															<input type="checkbox" id="switch-1"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Show Online</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-7">
															<input type="checkbox" id="switch-7"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Status</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-2">
															<input type="checkbox" id="switch-2"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">2 Steps Verification</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-3">
															<input type="checkbox" id="switch-3"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">General Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Location</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-4">
															<input type="checkbox" id="switch-4"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Save Histry</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-5">
															<input type="checkbox" id="switch-5"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Auto Updates</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
															for="switch-6">
															<input type="checkbox" id="switch-6"
																class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end chat sidebar -->
			</div>




        @endsection
