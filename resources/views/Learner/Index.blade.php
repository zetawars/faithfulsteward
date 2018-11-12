@extends('Panel.Home.Layout') @section('content')

<link rel="stylesheet" href="{{ url('/') }}/Admin/dist/css/course-sidebar.css">



<div class="content-wrapper">


	<section class="content-header">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Compagin</li>
		</ol>
        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
							<i class="glyphicon glyphicon-align-left"></i>
							<span>Open Sidebar</span>
						</button>

	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<nav id="sidebar">
					<div class="box">
						<div class="box-body">
							<div id="dismiss">
								<i class="glyphicon glyphicon-arrow-left"></i>
							</div>

							<div class="sidebar-header">
								<h4>Biblical Finance 101 </h4>
								<div class="progress">
									<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0"
									 aria-valuemax="100" style="width: 5%">
										<span class="sr-only">5% Complete (success)</span>
									</div>
                                </div>
                                <div>5% Complete (success)</div>
							</div>
							<ul class="list-unstyled components">
								<li class="active">
									<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Intro</a>
									<ul class="collapse list-unstyled" id="homeSubmenu">
										<li>
											<a href="#">Using the platform</a>
										</li>
										<li>
											<a href="#">Module 1 Entrance Exams</a>
										</li>
										<li>
											<a href="#">Course Workbook</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Module 1</a>
									<ul class="collapse list-unstyled" id="pageSubmenu">
										<li>
											<a href="#">Who is the boss</a>
										</li>
										<li>
											<a href="#">final Exam</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>


			</div>
			<div class="col-md-9" id="boxdiv">
				<div class="box">
					<div class="box-header">
						<a href="#/" class="btn btn-primary" style="width:100%">Complete and Continue</a>
					</div>
					<div class="box-body">
                        <img src="http://placehold.it/640x480" style="width:100%;height:100%" alt="...">
					</div>

                    <div class="box-footer">

                    </div>
                </div>
                

                <div class="box">
					<div class="box-header">
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#/" class="btn btn-primary" style="width:100%">Previous Section</a>
                        

                            </div>
                            <div class="col-md-6">
                            <a href="#/" class="btn btn-primary" style="width:100%">Complete and Continue</a>
                            </div>
                            

                    </div>
					</div>
					<div class="box-body">
                        <img src="http://placehold.it/640x480" style="width:100%;height:100%" alt="...">
					</div>

                    <div class="box-footer">

                    </div>
				</div>
			</div>
		</div>

	</section>


</div>


@endsection @section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		// $("#sidebar").mCustomScrollbar({
		//     theme: "minimal"
		// });

		$('#dismiss, .overlay').on('click', function() {
			$('#sidebar').hide();
			$("#boxdiv").removeClass("col-md-9").addClass("col-md-12");

		});

		$('#sidebarCollapse').on('click', function() {
			$('#sidebar').show();
			$("#boxdiv").removeClass("col-md-12").addClass("col-md-9");
		});
	});
</script>

@endsection