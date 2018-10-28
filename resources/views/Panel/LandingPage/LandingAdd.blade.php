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
					<div class="col-md-4">
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
                            <textarea id="mytextarea">Hello, World!</textarea>
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


    @section('scripts')
    <script>

tinymce.init({
  selector: '#mytextarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });


    </script>
    @endsection