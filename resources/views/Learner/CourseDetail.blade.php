@extends('Panel.Home.Layout') @section('content')

<link rel="stylesheet" href="{{ url('/') }}/Admin/dist/css/course-sidebar.css">



<div class="content-wrapper" id="CourseDetails">


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
								<h4>@{{CourseName}}</h4>
								<div class="progress">
									<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" :aria-valuenow="Percentage" aria-valuemin="0"
									 aria-valuemax="100" :style="'width:' + Percentage  + '%'">
										<span class="sr-only">@{{Percentage}}% Complete (success)</span>
									</div>
                                </div>
                                <div>@{{Percentage}}% Complete (success)</div>
							</div>
							<ul class="list-unstyled components">
								<li :class="[{'active' : (SelectedHeading.SrlNo == CourseHeading.SrlNo) }]" v-for="CourseHeading in CourseHeadings">
									<a href="#" @click="SelectHeading(CourseHeading)" data-toggle="collapse" aria-expanded="false"> @{{CourseHeading.HeadingName}}</a>
									<ul :class="['list-unstyled collapse',{'in' : (SelectedHeading.SrlNo == CourseHeading.SrlNo)}]" id="homeSubmenu">
										<li v-for="SubHeading in CourseHeading.SubHeadings"><a href="#" @click="SelectSubHeading(SubHeading)"> <i v-if="SubHeading.Status == 'InComplete'" class="fa fa-circle-o" aria-hidden="true"></i> <i v-else class="fa fa-check" aria-hidden="true"></i>  @{{SubHeading.SubHeadingName}}</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>

			</div>
			<div class="col-md-9" id="boxdiv" v-if="SelectedSubHeading.HeadingName != ''">
			<div class="box">
					<div class="box-header">
					@{{SelectedSubHeading.HeadingName}}
					<div class="row">
						<div class="col-md-6" v-if="SelectedSubHeading.SubHeadingNo != SelectedHeading.SubHeadings[0].SubHeadingNo">
                            <a href="#/"  class="btn btn-primary" style="width:100%">Previous Section</a>
                    	</div>
                        <div :class="[{'col-md-6' :  (SelectedSubHeading.SubHeadingNo != SelectedHeading.SubHeadings[0].SubHeadingNo),'col-md-12' :  (SelectedSubHeading.SubHeadingNo == SelectedHeading.SubHeadings[0].SubHeadingNo) }]">
                            <a href="#/" class="btn btn-primary"  @click="NextSubHeading()" style="width:100%">Complete and Continue</a>
                        </div>
                    </div>

					</div>
					<div class="box-body" v-html="SelectedSubHeading.Content">
						@{{SelectedSubHeading.Content}}
					</div>

                    <div class="box-footer">

                    </div>
                </div>
				
			</div>
		</div>

	</section>


</div>

	<!-- <div class="box">
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
				</div> -->


@endsection @section('scripts')
<script type="text/javascript">
		var Tabs = new Vue({
			el : "#CourseDetails",
			data : {
				CourseName : "Biblical Finance",
				Percentage : "10",
				SelectedHeading : {
					SrlNo : 0,
						HeadingName : "",
						Status : "",
						SubHeadings : [{
							HeadingName : '',
							Content : ''
						}],

				},
				SelectedSubHeading : {
					Status : "",
					HeadingName : '',
					Content : ''
				},
				CourseHeadings:
				[
					{
						SrlNo : 1,
						Status : "InComplete",
						HeadingName : "Intro",
						SubHeadings : [
							{
								SubHeadingNo : 1,
								Status : "InComplete",
								SubHeadingName : "Using the Platform",
								Content : `<img src="http://placehold.it/640x480" style="width:100%;height:100%" alt="...">`,
							},
							{
								SubHeadingNo : 2,
								Status : "InComplete",
								SubHeadingName : "Module 1 Entrance exam",
								Content : "",
							},
							{
								SubHeadingNo: 3,
								Status : "InComplete",
								SubHeadingName : "Course Workbook",
								Content : "",
							}
						]
					},

					{
						SrlNo : 2,
						Status : "InComplete",
						HeadingName : "Module 1",
						SubHeadings : [
							{
								SubHeadingNo: 1,
								Status : "InComplete",
								SubHeadingName :"Who's the boss",
								Content : "",
							},
							{
								SubHeadingNo : 2,
								Status : "InComplete",
								SubHeadingName : "Final Exam",
								Content : "",
							}
						]
					}
					
				]

			},
			methods : {
				SelectHeading(Heading){
					if(this.SelectedHeading.SrlNo == Heading.SrlNo){
						this.SelectedHeading = { 
							SrlNo : 0,
							HeadingName : "",
							Status : "",
							SubHeadings : [{
								HeadingName : '',
								Content : ''
								}]
						}
					}
					else
					{
						this.SelectedHeading = Heading ;
					}

					if(this.SelectedHeading.SrlNo == 0)
					{
						this.SelectedSubHeading = 	 {
							Status : "",
							HeadingName : '',
							Content : ''
						}
					}
				},
				SelectSubHeading(SubHeading){
					this.SelectedSubHeading = SubHeading;
				},
				NextSubHeading(){
					var CurrentSubHeading = this.SelectedSubHeading;
					console.log(JSON.stringify(CurrentSubHeading));
					CurrentSubHeading.Status = 'Complete';
					var vm = this;
					var length = vm.SelectedHeading.SubHeadings.length;
					var index = vm.SelectedHeading.SubHeadings.findIndex(x=>x.SubHeadingNo == vm.SelectedSubHeading.SubHeadingNo);
					console.log(index);

					if(vm.SelectedHeading.SubHeadings.length > ( index + 1 ))
					{
						vm.SelectedSubHeading = vm.SelectedHeading.SubHeadings[index + 1];
					}
					else 
					{	
						console.log("else part");
						vm.SelectNextHeading();
					}
				},
				PreviousSubHeading(CurrentSubHeading){

				},
				SelectNextHeading(){
					var vm = this;
					var length = vm.CourseHeadings.length;
					
					var index = vm.CourseHeadings.findIndex(x=>x.SrlNo == vm.SelectedHeading.SrlNo);
					console.log(index);
					
					console.log(length);

					if(length >  (index + 1)){
						vm.SelectedHeading = vm.CourseHeadings[index+1];	
					}
				

					// console.log("function called");
					// $.each(this.CourseHeadings, function(i,v){
					// 	var length = vm.CourseHeadings.length;
					// 	console.log("length = " + length);

					// 	if(v.SrlNo == vm.SelectedHeading.SrlNo)
					// 	{
					// 		console.log("v.SrlNo = " + v.SrlNo + "SelectedSrlNo" +  vm.SelectedHeading.SrlNo);
						
					// 		if((i+1) != (length-1))
					// 		{
					// 			 vm.SelectedHeading = vm.CourseHeadings[i+1];
					// 		}
					// 	}
					// });
				}
			}


		});


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