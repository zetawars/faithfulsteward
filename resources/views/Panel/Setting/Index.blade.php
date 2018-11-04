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
		<h1>Settings</h1>

	</section>
	<section class="content">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#GeneralTab" data-toggle="tab">General</a>
				</li>
				<li>
					<a href="#BrandingTab" data-toggle="tab">Branding+layout</a>
				</li>
				<li>
					<a href="#CMSTab" data-toggle="tab">CMS</a>
				</li>
				<li>
					<a href="#SEOTab" data-toggle="tab">SEO</a>
				</li>

				<li>
					<a href="#RoleTab" data-toggle="tab">Role+permissions</a>
				</li>
				<li>
					<a href="#CertificationTab" data-toggle="tab">Certifications</a>
				</li>
				<li>
					<a href="#GamificationTab" data-toggle="tab">Gamification</a>
				</li>
				<li>
					<a href="#CommunicationTab" data-toggle="tab">Communication</a>
				</li>

			</ul>


		</div>
		<div class="tab-content">

			<div class="tab-pane active" id="GeneralTab">
				<div class="form-group">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<label>Date format</label>
								<select class="form-control">
									<option>Select</option>
									<option>item 1</option>
									<option>item 2</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3">
								<h3>Registration Field</h3>
									<div class="row">
										<div class="col-md-6">
											<label>First Name</label>
											<input type="checkbox" name="firstname" id="firstname" value="option1" checked="">
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<label>Last Name</label>
											<input type="checkbox" name="lastname" id="lastname" value="option1" checked="">
										</div>
									</div>
							</div>
						</div>
						<!---->
						<br>
						<div class="row">
							<div class="col-md-6">
								<button type="button" class="btn btn-default btn-lg">+&nbsp;&nbsp;&nbsp;Add Field</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-8 form-group">
								<label>Login</label>
								<br />

								<label>
									<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Disable User Ability to Change Password
								</label>
								<br />

								<label>
									<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Enforce Strong Password
								</label>
								<br />

								<label>
									<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Enforce Medium Strong Password
								</label>

							</div>
						</div>
					</div>



				</div>




			</div>




			<div class="tab-pane" id="BrandingTab">


				<div class="box box-default">
					<div class="box-body">
						<div class="row">

							<div class="col-md-4">




								<div class="form-group">
									<label>Layout</label>
									<select class="form-control">
										<option>Select</option>
										<option>Item 1</option>
										<option>Item 2</option>
										<option>Item 3</option>

									</select>
								</div>

								<div class="form-group">
									<label>Logo</label>
									<br>

									<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" class="img-bordered" style="width:150px" />



									<div class="input-group">
										<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="Facebook Image...">
										<span class="input-group-btn">
											<span class="btn btn-primary  btn-file">
												Choose
												<input type="file">
											</span>
										</span>
									</div>

									<div class="input-group">
										<input type="checkbox"> Show on Login Screen

									</div>

									<div class="input-group">
										<input type="checkbox"> Show on Learner toolbar

									</div>



								</div>



								<div class="form-group">
									<label>favicon</label>
									<br>

									<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" class="img-bordered" style="width:150px" />



									<div class="input-group">
										<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="Facebook Image...">
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

						<hr />


						<div class="row">
							<div class="col-md-12">
								<h4>Login Color Scheme</h4>
								<div class="form-group">
									<div class="col-md-4">
										<label>Login Page Background</label>
										<input type="text" class="form-control" />
									</div>
									<div class="col-md-8">
										<label>Login Page Preview</label>
										<div class="row">
											<div class="col-md-12">
												<iframe src="{{url('/')}}/login"> </iframe>
											</div>
										</div>
									</div>


								</div>


							</div>





						</div>


						<div class="row">
							<div class="col-md-12">
								<h4>Dashboard Color Scheme</h4>
								<div class="form-group">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title bar</label>
											<input type="text" class="form-control" />

										</div>

										<div class="form-group">
											<label>Title bar text</label>
											<input type="text" class="form-control" />

										</div>

										<div class="form-group">
											<label>Button/Link Color</label>
											<input type="text" class="form-control" />

										</div>

									</div>
									<div class="col-md-8">
										<label>Dashboard Preview</label>
										<div class="row">
											<div class="col-md-12">
												<iframe src="{{url('/')}}/dashboard"> </iframe>
											</div>
										</div>
									</div>


								</div>


							</div>

						</div>



						<div class="row">
							<div class="col-md-12">
								<h4>Lesson Page Color Scheme</h4>
								<div class="form-group">
									<div class="col-md-4">
										<div class="form-group">
											<label>Title bar</label>
											<input type="text" class="form-control" />

										</div>

										<div class="form-group">
											<label>Title bar text</label>
											<input type="text" class="form-control" />

										</div>

										<div class="form-group">
											<label>Button/Link Color</label>
											<input type="text" class="form-control" />

										</div>

									</div>
									<div class="col-md-8">
										<label>Dashboard Preview</label>
										<div class="row">
											<div class="col-md-12">
												<iframe src="{{url('/')}}/dashboard"> </iframe>
											</div>
										</div>
									</div>


								</div>


							</div>

						</div>




					</div>

					<div class="box-footer"></div>



				</div>












































			</div>


			<div class="tab-pane" id="CMSTab">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<textarea class="form-control" style="height:200px;width:500px">About Us </textarea>
							</div>
						</div>
						<div class="row" style="margin-top:20px">
							<div class="col-md-12">

								<button class="btn btn-success">Save Changes</button>
								<button class="btn btn-danger">Cancel</button>

							</div>
						</div>
					</div>

				</div>


			</div>



			<div class="tab-pane" id="SEOTab">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Title" />
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" placeholder="Description"></textarea>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Author" />
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" placeholder="Keyword"></textarea>
						</div>

						<div class="form-group">
							<textarea type="text" class="form-control" placeholder="Facebook Description"></textarea>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Facebook URL" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Facebook ID" />
						</div>

						<div class="form-group">

							<div class="input-group">
								<input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="Facebook Image...">
								<span class="input-group-btn">
									<span class="btn btn-primary  btn-file">
										Choose
										<input type="file">
									</span>
								</span>
							</div>
						</div>


						<div class="form-group" style="margin-top:20px">


							<button class="btn btn-success">Save Changes</button>
							<button class="btn btn-danger">Cancel</button>

						</div>





					</div>
				</div>


			</div>


			<div class="tab-pane" id="RoleTab">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Role + Permission</th>
							<th>Administrator</th>
							<th>Instructor</th>
							<th>Learner</th>
							<th>Mastermind + Learner</th>

						</tr>
					</thead>

					<tbody>

						<tr>
							<td>Manage Users</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>



						<tr>
							<td>Manage User Types</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>


						<tr>
							<td>Manage Masterminds</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>




						<tr>
							<td>Manage Courses (Approve)</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>


						<tr>
							<td>Manage Courses (Add)</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>


						<tr>
							<td>Manage Courses (Categories)</td>
							<td>
								<i class="fa fa-check"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>
							<td>
								<i class="fa fa-remove"></i>
							</td>

						</tr>


						<tr>



					</tbody>
				</table>
			</div>

			<div class="tab-pane" id="CertificationTab">

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#Design" data-toggle="tab">Design</a>
						</li>
						<li>
							<a href="#Content" data-toggle="tab">Content</a>
						</li>
					</ul>


				</div>

				<div class="tab-content">

					<div class="tab-pane active" id="Design">

						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="Content">

						<div class="box box-default">
							<div class="box-body">
								<div class="tinymce">

								</div>

							</div>
							<div class="box-footer">

								<button class="btn btn-primary">Preview</button>
								<button class="btn btn-success">Save</button>



							</div>
						</div>





					</div>


				</div>




			</div>

			<div class="tab-pane" id="GamificationTab">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#Points" data-toggle="tab">Points</a>
						</li>
						<li>
							<a href="#Badges" data-toggle="tab">Badges</a>
						</li>
					</ul>
				</div>

				<div class="tab-content">

					<div class="tab-pane active" id="Points">
						<div class="form-group">
							<label>Points</label>
							<div>
								<label>off</label>
								<label class="switch">
									<input type="checkbox" />
									<span class="slider"></span>
								</label>
								<label>on</label>
							</div>
						</div>


						<div class="row">
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-5" style="margin-top:3px">
										<input type="checkbox" /> Each login gives
									</div>
									<div class="col-md-6">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<br />


						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-5" style="margin-top:3px">
										<input type="checkbox" /> Each Unit Completed gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<br />


						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-5" style="margin-top:3px">
										<input type="checkbox" /> Each course completed gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<br />


						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-8" style="margin-top:3px">
										<input type="checkbox" /> Each Succesfull test completion gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>


						<br />


						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-8" style="margin-top:3px">
										<input type="checkbox" /> Each Perfect Score on a quiz/exam gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<br />


						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-8" style="margin-top:3px">
										<input type="checkbox" /> Each upvoted answer, topic or comment gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<br />

						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6" style="margin-top:3px">
										<input type="checkbox" /> Each Question answered gives
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<!-- /btn-group -->
											<input type="number" class="form-control">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" disabled="">Points</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>


						<div class="form-group">
							<label>Badges</label>
							<div>
								<label>off</label>
								<label class="switch">
									<input type="checkbox" />
									<span class="slider"></span>
								</label>
								<label>on</label>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div>Activity Badges (4, 8, 16, 32, 64, 128, 256, 512 Logins)</div>
								<div>Learning Badges (1, 2, 4, 8, 16, 32, 64, 128 Completed Courses)</div>
								<div>Test Badges (2, 4, 8, 16, 32, 64, 128, 256 passed tests)</div>
								<div>Assignment Badges (1, 2, 4, 8, 16, 32, 64, 128 passed assignments)</div>
								<div>Perfectionism Badges (1, 2, 4, 8 16, 32, 64, 128 tests or assignments with score 90%+)</div>
								<div>Survey Badges (1, 2, 4, 8, 16, 32, 64, 128 completed surveys)</div>
								<div>Communication Badges (2, 4, 8, 16, 32, 64, 128, 256 topic or comments)</div>
								<div>Certification Badges (1, 2, 4, 8 16, 32, 64, 128, 256, 512 certifications)</div>

							</div>

						</div>

						<br />
						<div class="row">
							<div class="col-md-4">
								<a class="btn btn-default" href="#Badges" data-toggle="tab">
									<i class="fa fa-trophy"></i> Customize Badges</a>
							</div>

						</div>

						<br />
						<div class="form-group">
							<label>Leaderboard</label>
							<div>
								<label>off</label>
								<label class="switch">
									<input type="checkbox" />
									<span class="slider"></span>
								</label>
								<label>on</label>
							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<div>Show Levels</div>
								<div>Show Points</div>
								<div>Show Badges</div>
								<div>Show courses</div>
								<div>Show certifications</div>

							</div>

						</div>






					</div>



					<div class="tab-pane" id="Badges">
                        <label>Activity Badges</label>

						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
							<div class="item">
								<img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
							</div>
						</div>



                        <label>Learning Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>





                        <label>Test Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>


                        <label>Perfectionism Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>


                        <label>Survey Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>





                        <label>Communication Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>


                        <label>Certification Badges</label>

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
    <div class="item">
        <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
    </div>
</div>









					</div>

				</div>





			</div>

			<div class="tab-pane" id="CommunicationTab">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#Notification" data-toggle="tab">Notifications</a>
						</li>
						<li>
							<a href="#AddNotification" data-toggle="tab">Add Notification</a>
						</li>
					</ul>


				</div>


				<div class="tab-content">
					<div class="tab-pane active" id="Notification">
						<div class="box box-default">
							<div class="box-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Event
												<i class="fa fa-search"></i>
											</th>
											<th>Type
												<i class="fa fa-search"></i>
											</th>
											<th>Reciever</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Course - Course Completed</td>
											<td>Email</td>
											<td>related User</td>
											<td></td>
											<td>
												<i class="fa fa-pencil"></i>
												<i class="fa fa-trash"></i>
											</td>
										</tr>
										<tr>
											<td>New Discussion Post</td>
											<td>Notification</td>
											<td>related User</td>
											<td></td>
											<td>
												<i class="fa fa-pencil"></i>
												<i class="fa fa-trash"></i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>


					</div>

					<div class="tab-pane" id="AddNotification">

						<div class="box box-default">

							<div class="box-body">

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Event</label>
											<select class="form-control">
												<option selected>Select</option>
												<option>Item1</option>
												<option>Item2</option>
												<option>Item4</option>

											</select>

										</div>


										<div class="form-group">
											<label>Notification Type</label>
											<div class="input-group">
												<input type="checkbox" /> Email
											</div>
											<div class="input-group">
												<input type="checkbox" /> Notification
											</div>
											<div class="input-group">
												<input type="checkbox" /> Chat Group / Slack
											</div>

										</div>



										<div class="form-group">
											<label>Reciever</label>
											<div class="input-group">
												<input type="checkbox" /> Related User
											</div>
											<div class="input-group">
												<input type="checkbox" /> Course Instructor
											</div>
											<div class="input-group">
												<input type="checkbox" /> Admin
											</div>

											<div class="input-group">
												<input type="checkbox" /> Accountability Partner
											</div>
										</div>




										<div class="form-group">
											<label>Notification Name</label>

											<input type="text" class="form-control" placeholder="text input" />


										</div>



										<div class="form-group">

											<div class="input-group">
												<input type="checkbox" /> Notificaiton Active
											</div>

										</div>






									</div>
								</div>

							</div>
							<div class="box-footer">
								<button class="btn btn-success">Next</button>
								<button class="btn btn-success">Cancel</button>
							</div>
						</div>







					</div>

				</div>





			</div>



		</div>
		<!--tabcontent-->

	</section>
</div>


@endsection