 @extends('Panel.Home.Layout') @section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">

		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_1" data-toggle="tab">LMS</a>
				</li>
				<li>
					<a href="#tab_2" data-toggle="tab">Analytics</a>
				</li>
				<li>
					<a href="#tab_3" data-toggle="tab">Investments</a>
				</li>

			</ul>
			<!-- /.tab-content -->
		</div>


		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>7</h3>

								<p>Total Learners</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>

						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3>21</h3>

								<p>Logins (Last 7 days)</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
	
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>15</h3>

								<p>Lessons Completed (Last 7 days)</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
			
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Top 5 Learners (Last 30 days)</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>

					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Most Recent Logins</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>


					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">5 Most Recent Completions</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>


				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Course Enrollment</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart">
									<canvas id="lineChart" style="height: 250px; width: 594px;" width="742" height="312"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title">Student Status</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
				
										<canvas id="pieChart" style="height: 307px; width: 614px;" width="767" height="383"></canvas>
						
					
							</div>
							<!-- /.box-body -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box box-primary">
							<div class="box-header ui-sortable-handle" style="cursor: move;">
								<i class="ion ion-clipboard"></i>

								<h3 class="box-title">To Do List</h3>

								<div class="box-tools pull-right">
									<ul class="pagination pagination-sm inline">
										<li>
											<a href="#">«</a>
										</li>
										<li>
											<a href="#">1</a>
										</li>
										<li>
											<a href="#">2</a>
										</li>
										<li>
											<a href="#">3</a>
										</li>
										<li>
											<a href="#">»</a>
										</li>
									</ul>
								</div>
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
								<button type="button" class="btn btn-default pull-right">
									<i class="fa fa-plus"></i>
									Add item
								</button>
							</div>
						</div>
					</div>
				</div>


			</div>
			<!-- /.tab-pane -->
			<div class="tab-pane" id="tab_2">
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>3000</h3>

								<p>Visitors (Last 30 days)</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>

						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3>500</h3>

								<p>LUnique Visits (Last 30 days)</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>

						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>7</h3>

								<p>Referral Sources (Last 30 days)</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box box-solid bg-light-blue-gradient">
							<div class="box-header">
								<!-- tools box -->
								<div class="pull-right box-tools">
									<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
										<i class="fa fa-calendar"></i>
									</button>
									<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse"
									 style="margin-right: 5px;">
										<i class="fa fa-minus"></i>
									</button>
								</div>
								<!-- /. tools -->

								<i class="fa fa-map-marker"></i>

								<h3 class="box-title">
									Visitors
								</h3>
							</div>
							<div class="box-body">
								<div id="world-map" style="height: 250px; width: 100%;"></div>
							</div>
							<!-- /.box-body-->
							<div class="box-footer no-border">
								<div class="row">
									<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
										<div id="sparkline-1"></div>
										<div class="knob-label">Visitors</div>
									</div>
									<!-- ./col -->
									<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
										<div id="sparkline-2"></div>
										<div class="knob-label">Online</div>
									</div>
									<!-- ./col -->
									<div class="col-xs-4 text-center">
										<div id="sparkline-3"></div>
										<div class="knob-label">Exists</div>
									</div>
									<!-- ./col -->
								</div>
								<!-- /.row -->
							</div>
						</div>


					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Canada</label>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											60%
										</div>

									</div>
								</div>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0"
									 aria-valuemax="100" style="width: 60%">
										<span class="sr-only">60% Complete (warning)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>America</label>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											30%
										</div>

									</div>
								</div>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0"
									 aria-valuemax="100" style="width: 60%">
										<span class="sr-only">30% Complete (warning)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Great Britian</label>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											5%
										</div>

									</div>
								</div>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0"
									 aria-valuemax="100" style="width: 60%">
										<span class="sr-only">5% Complete (warning)</span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Device Types</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div>
									<i clas="fa fa-desktop"></i> DESKTOP 80%</div>
								<div>
									<i clas="fa fa-tablet"></i> Tablet 11%</div>
								<div>
									<i clas="fa fa-mobile"></i> Mobile 9%</div>

							</div>
							<!-- /.box-body -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title">Time spent per session</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div>
									<i clas="fa fa-desktop"></i> DESKTOP 21 Minuts</div>
								<div>
									<i clas="fa fa-tablet"></i> Tablet 19 Minutes</div>
								<div>
									<i clas="fa fa-mobile"></i> Mobile 9 Minutes</div>

							</div>
							<!-- /.box-body -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.tab-pane -->
			<div class="tab-pane" id="tab_3">
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>50</h3>

								<p>Total Investors</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>

						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3>21</h3>

								<p>Recurring Inverstors</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
	
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>$30000</h3>

								<p>Total Investments</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Top 5 Investors (Last 30 days)</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>

					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Most Recent Investments</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>

										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>


					<div class="col-md-4">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">5 Most Recent Project Investments</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<thead></thead>
									<tbody>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$300</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$1000</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$500</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$50</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$100</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$100</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$100</td>
										</tr>
										<tr>
											<td>
												<i class="fa fa-image"></i>
											</td>
											<td>John Graham</td>
											<td>$100</td>
										</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>


				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Investments($)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart">
									<canvas id="lineChart2" style="height: 250px; width: 594px;" width="742" height="312"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title">Kingdom Investor Profile</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
				
										<canvas id="pieChart2" style="height: 307px; width: 614px;" width="767" height="383"></canvas>
		

							</div>
							<!-- /.box-body -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.tab-pane -->
		</div>
		<!-- Small boxes (Stat box) -->

		<!-- /.row (main row) -->
	</section>
	<!-- /.content -->
</div>


@endsection @section('scripts')
<script>
new Chart(document.getElementById("lineChart"), {
  type: 'line',
  data: {
    labels: ['Jan','Aprl','July','Oct'],
    datasets: [
        { 
        data: [40,50,80,20],
        label: "Course 1",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [60,70,90,10],
        label: "Course 2",
        borderColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
     legend:{
         display:false


     },
    title: {
    
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});



new Chart(document.getElementById("lineChart2"), {
  type: 'line',
  data: {
    labels: ['Jan','Feb','March', 'Aprl','July','Oct'],
    datasets: [
        { 
        data: [10, 20, 25, 40, 90,70],
        label: "Investments",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
     legend:{
         display:false


     },
    title: {
    
      display: true,
      text: 'Investments'
    }
  }
});



new Chart(document.getElementById("pieChart"), {
    type: 'pie',
    data: {
      labels: ["Not Yet Started 20%", "In Progress 70%", "Completed 10%"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
        data: [20,70,10]
      }]
    },
    options: {
        legend:{
            display: true,


        },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});




new Chart(document.getElementById("pieChart2"), {
    type: 'pie',
    data: {
      labels: ["Recurring 20%", "One-time 80%"],
      datasets: [{
        label: "Kingdom Investor Profile",
        backgroundColor: ["#3e95cd", "#8e5ea2"],
        data: [20,80]
      }]
    },
    options: {
        legend:{
            display: true,


        },
      title: {
        display: true,
        text: 'Kingdom Investor Profile'
      }
    }
});

</script>
@endsection