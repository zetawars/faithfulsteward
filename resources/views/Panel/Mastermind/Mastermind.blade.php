@extends('Panel.Home.Layout') @section('content')
<div class="content-wrapper">
	<section class="content-header">
		<ol class="breadcrumb">
			<li>
            <a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Mastermind</li>
		</ol>
		<h1>Mastermind</h1>

	</section>
	<section class="content">



		<div class="box">
			<div class="box-header">
				<a href="{{url('/')}}/mastermind/new" class="btn btn-primary">New Mastermind</a>
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-bordered datatable">
					<thead>
						<tr>
							<th style="width: 10px">#</th>
							<th>ID</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>No of Student</th>
							<th style="width: 25%">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td>BF101-001</td>
							<td>May 7,2018</td>
							<td>Jun 8,2018</td>
							<td>25</td>
							<td>

								<a href="{{url('/')}}/course/manage" class="text-info" ><i class="fa fa-pencil-square-o"></i></a>
								<a href="#/" class="text-danger" ><i class="fa fa-trash"></i></a>
								
							</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>BF101-002</td>
							<td>Jul 30,2020</td>
							<td>Dec 5,2020</td>
							<td>12</td>
							<td>
			
                            <a href="{{url('/')}}/course/manage" class="text-info" ><i class="fa fa-pencil-square-o"></i></a>
								<a href="#/" class="text-danger" ><i class="fa fa-trash"></i></a>
								
							</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>MG100-001</td>
							<td>Jul 30,2020</td>
							<td>Dec 5,2020</td>
							<td>100</td>
							<td>

								<a href="{{url('/')}}/course/manage" class="text-info" ><i class="fa fa-pencil-square-o"></i></a>
								<a href="#/" class="text-danger" ><i class="fa fa-trash"></i></a>
								
							</td>
						</tr>
					</tbody>

				</table>
			</div>


			<!-- /.box-body -->
		</div>


		<!-- /.tab-content -->

		<!-- nav-tabs-custom -->

	</section>
</div>


@endsection