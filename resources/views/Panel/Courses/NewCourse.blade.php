@extends('Panel.Home.Layout') @section('content')
<div class="content-wrapper">
	<section class="content-header">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
		<h1>Add Courses</h1>

	</section>

	<section class="content">
		<div class="box">
			<div class="box-header">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_1" data-toggle="tab">General</a>
						</li>
						<li>
							<a href="#tab_2" data-toggle="tab">Syllabus</a>
						</li>
						<li>
							<a href="#tab_3" data-toggle="tab">Availability</a>
						</li>
						<li>
							<a href="#tab_4" data-toggle="tab">Completion</a>
						</li>
						<li>
							<a href="#tab_5" data-toggle="tab">Messages</a>
						</li>
						<li>
							<a href="#tab_6" data-toggle="tab">More</a>
						</li>

					</ul>
				</div>
			</div>
			<div class="box-body">
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<form role="form">
							<!-- text input -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Course Name</label>
										<input type="text" class="form-control" placeholder="Enter ...">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Course Description</label>
										<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
									</div>
								</div>
							</div>
							<div class="row">

								<div class="form-group col-md-4">
									<label for="inputEmail4">Course Category</label>
									<select class="form-control">
										<option>Finance</option>
										<option>Gospel</option>
										<option>Relationship</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label>
										<br>
									</label>
									<button type="button" class="form-control btn btn-primary">Add Category</button>
								</div>
							</div>
							<div class="row">
								<div clas="col-md-8">
									<div class="form-group col-md-6">
										<label>Course Thumbnail</label>
										<div class="input-group">
											<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="File Upload...">
											<span class="input-group-btn">
												<span class="btn btn-primary  btn-file">
													Choose
													<input type="file">
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Course Image</label>
									<div class="input-group">

										<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="File Upload...">
										<span class="input-group-btn">
											<span class="btn btn-primary  btn-file">
												Choose
												<input type="file">
											</span>
										</span>
									</div>
								</div>


							</div>
							<div class="row">


								<div class="form-group col-md-6">
									<label>Tags</label>
									<div class="input-group">

										<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="Search For Tags">
										<span class="input-group-btn">
											<span class="btn btn-primary  btn-file">
												+
												<input type="file">
											</span>
										</span>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Course Status</label>
									<div class="button-group">
                                        <input type="radio" name="Status" class="icheck"/> Draft
                                        <input type="radio" name="Status" class="icheck" /> Completed
									</div>
								</div>

							</div>
							<div class="row">


								<div class="form-group col-md-6">
									<label>Course Status</label>
									<div class="button-group">
										<button type="button" class="btn btn-primary">Save Changes
										</button>
										<button type="button" class="btn btn-danger">Cancel</button>
									</div>

								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="tab_2">

						<h4>Learner must complete</h4>
						<div class="row">
							<div class="col-md-6" custom-control custom-radio custom-control-inline>

								<input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
								<label class="custom-control-label" for="defaultInline1">Lesson in order</label>


								<input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
								<label class="custom-control-label" for="defaultInline2">Lesson in any order</label>


								<!-- Default inline 3-->

								<input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
								<label class="custom-control-label" for="defaultInline3">Exams</label>

							</div>

						</div>
						<div class="row">
							<div class="col-md-10">

								<div class="box box-solid">
									<div class="box-header with-border">
										<i class="fa  fa-th"></i>

										<input type="disable" placeholder="Introduction" />
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Course Introduction
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Module #1Entrance Exam
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Module #1Workbook
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Add
													<i class="fa fa-plus pull-right"></i>
												</button>
											</div>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">

								<div class="box box-solid">
									<div class="box-header with-border">
										<i class="fa  fa-th"></i>

										<input type="disable" placeholder="Module#1" />
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Who's the Boss?
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Leave it to the Boss
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Know your Role
												</button>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Add
													<i class="fa fa-plus pull-right"></i>
												</button>
											</div>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
						</div>

					</div>
					<div class="tab-pane" id="tab_3">

						<div class="row">
							<div class="col-md-4 form-group">

								<label>Access Date</label>


								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>


						</div>
						<div class="row">
							<div class="col-md-8">
								<label>Prerequisites</label>

								<button type="button" class="btn btn-default btn-block fa fa-plus" style="height: 100px">
									Add Prerequisite
								</button>

							</div>
						</div>
						<div class="row">

							<div class="col-md-8">
								<div class="dropdown">
									<button class="dropdown-toggle btn-block" data-toggle="dropdown" style="height: 100px">
										Adminstrator
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Thomas Kofi Wilmot</a>
										</li>
										<li>
											<a href="#">Dr.Annie</a>
										</li>
										<li>
											<a href="#">Other Instructor</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


					</div>

					<div class="tab-pane" id="tab_4">
						<div class="row">
							<div class="col-md-4">
								<label>Certificate</label>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Learner receive a certificate upon completion
									</label>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3">
								<label>Certificate Type</label>
								<select class="form-control">
									<option>Select</option>
									<option></option>

								</select>

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-5">
								<span>Other Certificate option(TBD Devleroper)</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-5">
								<button type="button" class="btn btn-default">Preview Certificate</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_5">
						<form role="form">
							<div class="row">
								<div class="col-md-6">

									<label>Send Email Notification</label>
									<div>
										<label>off</label>
										<label class="switch">
											<input type="checkbox">
											<span class="slider"></span>
										</label>
										<label>on</label>
									</div>

								</div>

							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">

									<input type="checkbox" id="scales" name="feature" value="scales" checked/>
									<label for="scales">Send enrollment emails</label>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<label>use custom template</label>
									<button type="button" class="btn btn-default ">Preview</button>
								</div>
							</div>
							<div class="row ">
								<div class="col-md-8">
									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>

									</label>

									<label>on</label>
									<input type="text" placeholder="Default enrollment email wil be send to learners ..." style="width: 50%" disabled="">
								</div>
							</div>
							<div class="row">
								<hr>
								<div class="col-md-5">
									<input type="checkbox" id="scales" name="feature" value="scales" checked/>
									<label for="scales">Send Completion emails</label>
									<button type="button" class="btn btn-default">Preview</button>
								</div>

							</div>
							<hr>
							<label>Use custom template</label>

							<div class="row">
								<div class="col-md-8">


									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>
									</label>
									<label>on</label>
									<input type="text" placeholder="Default enrollment email wil be send to learners ..." style="width: 50%" disabled="">
								</div>
							</div>
							<hr>

							<hr>
							<div class="row">
								<div class="col-md-5">

									<input type="checkbox" id="scales" name="feature" value="scales" checked/>
									<label for="scales">Send nudge emails</label>
								</div>
							</div>
							<hr>
							<label>Nudge Every</label>
							<div class="row">
								<div class="col-md-2">
									<div class="input-group">
										<input type="text" placeholder="0" class="form-control">
										<span class="input-group-addon">Year</span>
									</div>
								</div>

								<div class="col-md-2">
									<div class="input-group">
										<input type="text" placeholder="0" class="form-control">
										<span class="input-group-addon">Month</span>
									</div>

								</div>
								<div class="col-md-2">
									<div class="input-group">
										<input type="text" placeholder="0" class="form-control">
										<span class="input-group-addon">Days</span>
									</div>
								</div>


							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Max Nudge</label>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<input type="text" placeholder="4" class="form-control">
												<span class="input-group-addon">No</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-5">
									<label>Use Custom Template</label>

									<button type="button" class="btn btn-default">Preview</button>



								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>
									</label>
									<label>on</label>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane" id="tab_6">
						<div class="row">
							<div class="col-md-6">
								<label>Allow Comments</label>
								<div row>
									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>
									</label>
									<label>on</label>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Enable Course Evaluation</label>
								<div row>
									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>
									</label>
									<label>on</label>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Evaluation Required</label>
								<div row>
									<label>off</label>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span>
									</label>
									<label>on</label>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>



	</section>
</div>


@endsection