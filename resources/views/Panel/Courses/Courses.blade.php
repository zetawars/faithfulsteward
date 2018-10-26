@extends('Panel.Home.Layout') @section('content')
<div class="content-wrapper">
	<section class="content-header">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Courses</li>
		</ol>
		<h1>Courses</h1>

	</section>
	<section class="content">
		<div class="box">
			<div class="box-header">
				<a href="{{url('/')}}/course/newcourse" class="btn btn-success">New Course</a>
				<a href="#tab_2" data-toggle="tab"class="btn btn-primary" >New Mastermind</a>
				<a href="#tab_3" data-toggle="tab" class="btn btn-warning">New Category</a>
			</div>

			<div class="box-body">
				<table class="table table-bordered dataTable">
					<thead>
						<tr>
							<th style="width: 10px">#</th>
							<th>Course Name</th>
							<th>Course Category</th>
							<th>Instructor</th>
							<th style="width: 25%">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td>Biblical Finance1</td>
							<td>Finance</td>
							<td>Kofi</td>
							<td>
								<a href="{{url('/')}}/course/view" class="btn btn-default">View</a>
								<a href="{{url('/')}}/course/manage" class="btn btn-default">Manage</a>
								<button type="button" class="btn btn-danger">Delete</button>
							</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Love & Marriage</td>
							<td>Relationships</td>
							<td>Dr.Annie</td>
							<td>
								<a href="{{url('/')}}/course/view" class="btn btn-default">View</a>
								<a href="{{url('/')}}/course/manage" class="btn btn-default">Manage</a>
								<button type="button" class="btn btn-danger">Delete</button>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>


			<!-- /.box-body -->
		</div>



	</section>
</div>


@endsection