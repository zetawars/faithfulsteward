@extends('Panel.Home.Layout') 

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
		<h1>Create Landing Page</h1>

	</section>
	<section class="content">
		<div class="box box-default">
			<div class="box-body">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control">
								<option>Select</option>
							</select>
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" />
						</div>
					</div>
				</div>


                <div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>HTML Content Generated From</label>
                            <textarea id="mytextarea" class="tinymce"></textarea>
						</div>
					</div>
				</div>


                <div class="row">
					<div class="col-md-12">
						<div class="form-group">
                        <button class="btn btn-success">Save Changes</button>
							
                        <button class="btn btn-danger">Cancel</button>
							
						</div>
					</div>
				</div>



			</div>


        </div>
	</section>
	</div>


	@endsection


  