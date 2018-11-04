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
		<h1>Add Mastermind</h1>

	</section>
	<section class="content">
		<div class="box box-default">
			<div class="box-header"></div>
			<div class="box-body">


				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label>Course</label>
							<select class="form-control">
								<option>Select</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Start Date</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right datepicker">
							</div>
							<!-- /.input group -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>End Date</label>

							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right datepicker" />
							</div>
							<!-- /.input group -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Maximam no. of Students</label>
							<select class="form-control">
								<option>Select</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Mastermind Fee</label>


					</div>
				</div>
				<div class="row">
					<div class="col-md-2">


						<label>
							<input type="checkbox"> Fee
						</label>


					</div>
					<div class="col-md-2">
						<label>
							<input type="checkbox"> Adminssion Cost
						</label>
					</div>
					<div class="col-md-2">

						<input type="email" class="form-control" placeholder=".." />

					</div>




				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Instructor Commission</label>
						<input type="range" data-percentage="SelectedPercentage" />
					</div>
					<div class="col-md-4">
						<span id="SelectedPercentage" style="margin-top:25px" class="badge badge-primary">0%</span>
					</div>

				</div>
				<br />
				<div class="row">
					<div class="col-md-5">
						<label>Gamiflaction</label>
						<br>
						<label>off</label>
						<label class="switch">
							<input type="checkbox">
							<span class="slider"></span>
						</label>
						<label>on</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Notify mastermind learner when badges/points are received
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<label>Use Custome Gamiflaction Settings</label>
						<div class="row">
							<div class="col-md-3">
								<label>off</label>
								<label class="switch">
									<input type="checkbox">
									<span class="slider"></span>
								</label>
								<label>on</label>

							</div>
							<br>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Default gamiflcation points and badges will be rewarded for this mastermind"
								 disabled="" />
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-2">
						<label>Drip Feed Schedule</label>

						<div class="input-group">

							<!-- /btn-group -->
							<input type="text" class="form-control" placeholder="Manual Input">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger" disabled>import</button>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-10">

						<div class="box">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding">
								<table class="table table-hover datatable">
								<thead>
								<tr>
											<th>Module Name/No</th>
											<th>Lesson No</th>
											<th>Lesson Name</th>
											<th>Release Date</th>

										</tr>
								</thead>
									<tbody>
										
										<tr>
											<td>Intro</td>
											<td>1</td>
											<td>Introduction to BF101</td>
											<td>May 1</td>

											<tr>
												<td>1</td>
												<td>2</td>
												<td>Who is the Boss?</td>
												<td>May 3</td>
											</tr>

									</tbody>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

					</div>
				</div>
			</div>
			<div class="box-footer">
					<button type="button" name="btn" class="btn btn-primary">Save Changes</button>
					<button type="button" name="btn" class="btn btn-danger">Cancel</button>
			</div>

		</div>


	</section>
</div>
@endsection