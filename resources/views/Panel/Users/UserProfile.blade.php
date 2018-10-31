@extends('Panel.Home.Layout') @section('content')


<style>
	ul.timeline {
		list-style-type: none;
		position: relative;
	}

	ul.timeline:before {
		content: ' ';
		background: #d4d9df;
		display: inline-block;
		position: absolute;
		left: 29px;
		width: 2px;
		height: 100%;
		z-index: 400;
	}

	ul.timeline>li {
		margin: 20px 0;
		padding-left: 50px;
	}

	ul.timeline>li:before {
		content: ' ';
		background: white;
		display: inline-block;
		position: absolute;
		border-radius: 50%;
		border: 3px solid #22c0e8;
		left: 20px;
		width: 20px;
		height: 20px;
		z-index: 400;
	}
</style>


<div class="content-wrapper">
	<section class="content-header">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">User Profile</li>
		</ol>
		<h1>User Proifle</h1>

	</section>


	<section class="content">

		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{url('/')}}/Admin/pages/dist/img/user1-128x128.jpg" alt="User profile picture">

						<h3 class="profile-username text-center">John Deere</h3>

						<p class="text-muted text-center">Last Activity : 28 Oct 2018</p>

						<!-- <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">543</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
					</div>
					<!-- /.box-body -->

					<!-- /.box-header -->
					<div class="box-body">
						<strong> Preferred Name</strong>
						<p class="text-muted">John</p>

						<strong>First Name</strong>
						<p class="text-muted">John</p>


						<strong>Last Name</strong>
						<p class="text-muted">Deere</p>


						<strong>Email Address/Username</strong>
						<p>john@dreere.com</p>

						<strong>Role(s)</strong>
						<div>Administrator</div>
						<div>Instructor</div>

						<br>
						<strong>
							<p>Social Profile &nbsp;
								<a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#Social" aria-expanded="false" class="collapsed">
									<i class="fa fa-chevron-down"></i>
								</a>
							</p>

						</strong>

						<div id="Social" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
							non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
						</div>



						<strong>
							<p>Address &nbsp;
								<a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#AddressDiv" aria-expanded="false" class="collapsed">
									<i class="fa fa-chevron-down"></i>
								</a>
							</p>

						</strong>

						<div id="AddressDiv" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							32 C Johar Town Lahore Punjab
						</div>


						<strong>
							<p>Church Info &nbsp;
								<a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#ChurchInfo" aria-expanded="false" class="collapsed">
									<i class="fa fa-chevron-down"></i>
								</a>
							</p>

						</strong>

						<div id="ChurchInfo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
							non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
						</div>






					</div>


				</div>
				<!-- /.box -->

				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a>
						</li>
						<li class="">
							<a href="#timeline" data-toggle="tab" aria-expanded="false">Engagement</a>
						</li>
						<li class="">
							<a href="#settings" data-toggle="tab" aria-expanded="false">Courses</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="activity">
							<div class="row">
								<div class="col-md-12">
									<div class="pull-right">
										<button class="btn btn-default">
											<i class="fa fa-filter"></i>Filter Activity</button>
									</div>
								</div>
							</div>




							<div class="container mt-5 mb-5">
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<h4>June 2018</h4>
										<ul class="timeline">
											<li>
												<a target="_blank" href="https://www.totoprayogo.com/#">Logged In</a>
												<a href="#" class="float-right"></a>
												<p>20 June, 2018 at 03:05 PM</p>
											</li>
											<li>
												<a target="_blank" href="https://www.totoprayogo.com/#">Completed Lesson</a>
												<a href="#" class="float-right"></a>
												<p>20 June, 2018 at 03:05 PM</p>
											</li>
											<li>
												<a target="_blank" href="https://www.totoprayogo.com/#">Completed Lesson</a>
												<a href="#" class="float-right"></a>
												<p>20 June, 2018 at 03:05 PM</p>
											</li>

										</ul>
									</div>
								</div>
							</div>


						</div>
						<!-- /.tab-pane -->
						<div class="tab-pane" id="timeline">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#NoteTab" data-toggle="tab" aria-expanded="true">New Note</a>
									</li>
									<li class="">
										<a href="#EmailTab" data-toggle="tab" aria-expanded="false">Email</a>
									</li>
									<li class="">
										<a href="#LogTab" data-toggle="tab" aria-expanded="false">+Log</a>
									</li>
									<li class="">
										<a href="#TaskTab" data-toggle="tab" aria-expanded="false">+Task</a>
									</li>
									<li class="">
										<a href="#CalendarTab" data-toggle="tab" aria-expanded="false">+Calendar</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="NoteTab">
										<div class="row">
											<div class="col-md-12">
												<textarea id="mytextarea" class="tinymce">Start typing a note</textarea>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="pull-right">
													<button class="btn btn-default">Done</button>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="EmailTab">
                                    
										<div class="row">
                                            <div class="col-md-12">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                                            </div>
											
										</div>
<br />
										<div class="row">
                                            <div class="col-md-12">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                                            </div>
											
										</div>
<br />
										<div class="row">
											<div class="col-md-12">
												<textarea id="mytextarea" class="tinymce">Start typing email</textarea>
											</div>
										</div>

										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="pull-right">
													<button class="btn btn-default">Send</button>
												</div>
											</div>
										</div>
                                        
									</div>


									<div class="tab-pane" id="LogTab">
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<select class="form-control">
														<option>Log Call</option>
														<option>Log Email</option>

													</select>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<select class="form-control">
														<option>Wrong Number</option>
														<option>No Answer</option>
														<option>Busy</option>
													</select>
												</div>
											</div>

										</div>

										<div class="row">
											<div class="col-md-12">
												<p>Describe the call.....</p>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="pull-right">
													<button class="btn btn-default">Done</button>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="TaskTab">
										<div class="box-header ui-sortable-handle" style="cursor: move;">
											<i class="ion ion-clipboard"></i>
											<h3 class="box-title">Enter your task</h3>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
											<ul class="todo-list ui-sortable">
												<li>
													<!-- drag handle -->
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<!-- checkbox -->
													<input type="checkbox" value="">
													<!-- todo text -->
													<span class="text">Design a nice theme</span>
													<!-- Emphasis label -->
													<small class="label label-danger">
														<i class="fa fa-clock-o"></i> 2 mins
													</small>
													<!-- General tools such as edit or delete-->
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
												<li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<input type="checkbox" value="">
													<span class="text">Make the theme responsive</span>
													<small class="label label-info">
														<i class="fa fa-clock-o"></i> 4 hours
													</small>
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
												<li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<input type="checkbox" value="">
													<span class="text">Let theme shine like a star</span>
													<small class="label label-warning">
														<i class="fa fa-clock-o"></i> 1 day
													</small>
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
												<li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<input type="checkbox" value="">
													<span class="text">Let theme shine like a star</span>
													<small class="label label-success">
														<i class="fa fa-clock-o"></i> 3 days
													</small>
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
												<li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<input type="checkbox" value="">
													<span class="text">Check your messages and notifications</span>
													<small class="label label-primary">
														<i class="fa fa-clock-o"></i> 1 week
													</small>
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
												<li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
													<input type="checkbox" value="">
													<span class="text">Let theme shine like a star</span>
													<small class="label label-default">
														<i class="fa fa-clock-o"></i> 1 month
													</small>
													<div class="tools">
														<i class="fa fa-edit"></i>
														<i class="fa fa-trash-o"></i>
													</div>
												</li>
											</ul>
										</div>
										<!-- /.box-body -->
										<div class="box-footer clearfix no-border">
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Type</label>
														<select class="form-control">
                                                        <option selected>Select</option>
                                                                
															<option>Item 1</option>
															<option>Item 2</option>
															<option>Item 3</option>
														</select>
													</div>

												</div>
												<div class="col-md-3">

													<div class="form-group">
														<label>Assigned To</label>
														<select class="form-control">
                                                        <option selected>Select</option>
                                                                
                                                        <option>Item 1</option>
															<option>Item 2</option>
															<option>Item 3</option>
														</select>
													</div>

												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Email Reminder</label>
														<div class="row">
															<div class="col-md-6">
																<select class="form-control">
                                                                <option selected>The Day of</option>
                                                                
                                                                <option>Item 1</option>
															<option>Item 2</option>
															<option>Item 3</option>

																</select>
															</div>
															<div class="col-md-6">
																<select class="form-control">
                                                                <option selected>8:00 AM</option>
                                                                
                                                                <option>Item 1</option>

															<option>Item 2</option>
															<option>Item 3</option>

																</select>
															</div>

														</div>
													</div>



												</div>

												<div class="col-md-3">
                                                    <div class="form-group">
                                                    <label>&nbsp;</label>
													<button type="button" style="margin-top:26px" class="btn btn-default pull-right">
														<i class="fa fa-plus"></i>
														Add item
													</button>
                                                    </div>
                                                    
												</div>

											</div>


										</div>
									</div>


                                    <div class="tab-pane" id="CalendarTab">
                                        
                                    </div>

								</div>


							</div>
							<!-- /.tab-pane -->
						</div>
						<div class="tab-pane" id="settings">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Course Name</th>
										<th>Instructor</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<td>Biblical Finance 101</td>
										<td>TKW</td>
										<td>Completed</td>

									</tr>

									<tr>

										<td>????</td>
										<td>????</td>
										<td>In Progress</td>

									</tr>


								</tbody>
							</table>

						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->



	</section>



</div>



@endsection