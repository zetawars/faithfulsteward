@extends('Panel.Home.Layout') @section('content')


<style>
.box {
    border: 3px solid #d2d6de;

}

.btn-group .btn-default {
    margin-right:5px;
}


</style>

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


            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
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
                                            <input type="disabled" class="form-control" id="info" readonly=""
                                                   style="background: #fff;" placeholder="File Upload...">
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

                                        <input type="disabled" class="form-control" id="info" readonly=""
                                               style="background: #fff;" placeholder="File Upload...">
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

                                        <input type="disabled" class="form-control" id="info" readonly=""
                                               style="background: #fff;" placeholder="Search For Tags">
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
                                        <input type="radio" name="Status" class="icheck"/> Completed
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

                        </div>
                        <div class="box-footer">

                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab_2">
                    <div class="box">
                        <div class="box-header">
                            <h4>Learner must complete</h4>
                        </div>
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6" custom-control custom-radio custom-control-inline>
                                    <input type="radio" class="custom-control-input" id="defaultInline1"
                                           name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline1">Lesson in order</label>


                                    <input type="radio" class="custom-control-input" id="defaultInline2"
                                           name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline2">Lesson in any order</label>


                                    <!-- Default inline 3-->

                                    <input type="radio" class="custom-control-input" id="defaultInline3"
                                           name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline3">Exams</label>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                        <div class="box box-primary" v-for="Module in Modules">
                                            <div class="box-header">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                <span><i class="fa fa-list"></i> <input type="text" class="form-control" :value="Module.Title" style="display:inline;width:auto" /></span>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="pull-right">
                                                    <button type="button" @click="AddNewModule()" class="btn btn-block"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="box-body">
                                                @{{Module.Description}}
                                                <button class="btn btn-block" @click="OpenNewContentModal()"><i class="fa fa-plus"></i> Add Content to the module</button>
                                            </div>
                                        </div>

                                </div>
                            </div>

                        </div>
                        <div class="box-footer">

                        </div>

                    </div>

<div class="modal fade" id="AddContentModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                Add a Learning Object
            </div>
            <div class="modal-body">
                <h4>Please Select a Content type to add</h4>
                <div class="row">
                    <div class="col-md-12">
                    <div class="btn-group">
                        <button class="btn btn-default" @click="OpenVideoModal()"><i class="fa fa-camera"></i>&nbsp; Video</button>
                        <button class="btn btn-default" @click="OpenFileModal()"><i class="fa fa-file"></i>&nbsp; File</button>
                        <button class="btn btn-default" @click="OpenContentModal()"><i class="fa fa-file-text-o"></i>&nbsp; Content</button>
                        <button class="btn btn-default" @click="OpenAssesmentModal()"><i class="fa fa-pencil-square-o"></i>&nbsp; Assesment</button>
                        <button class="btn btn-default" @click="OpenSurveyModal()"><i class="fa fa-file-check"></i>&nbsp; Survey</button>
                    </div>
                </div>


                   
            
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="VideoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Add Video</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                <div><label>How to complete it</label></div>
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Mark Complete</button>
                        <button class="btn btn-default"><i class="fa fa-question"></i>&nbsp;With a Question</button>
                        <button class="btn btn-default"><i class="fa fa-clock-o"></i>&nbsp;After a period of time</button>
                    </div>
                </div>

                <div class="form-group">
                    <div><label>Video Source</label></div>
                    <div class="btn-group">
                        <button class="btn btn-primary" @click="ChangeVideoSource('URL')"><i class="fa fa-external-link"></i>&nbsp;URL (e.g youtube)</button>
                        <button class="btn btn-default"  @click="ChangeVideoSource('Source')"><i class="fa fa-folder"></i>&nbsp;From a Source</button>
                        <br />
                        <input type=text class="form-control" v-if="SelectedVideoSource=='URL'" />
                    </div>
                </div>

                <div class="form-group">
                    <div><label>Notes to display below the video</label></div>
                    <textarea class="form-control" placeholder="Notes"></textarea>
                </div>
            </div>


            <div class="modal-footer"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="FileModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Add File</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                <div><label>How to complete it</label></div>
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Mark Complete</button>
                        <button class="btn btn-default"><i class="fa fa-question"></i>&nbsp;With a Question</button>
                    </div>
                </div>

                <div class="form-group">
                    <div><label>Document Type (PDF, MP4, MP3)</label></div>
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-external-link"></i>&nbsp;Upload Document</button>
                        <button class="btn btn-default"><i class="fa fa-folder"></i>&nbsp;Use Document From Course file</button>
                    </div>
                </div>

                <div class="form-group">
                    <div><label>Notes to display below the File</label></div>
                    <textarea class="form-control" placeholder="Notes"></textarea>
                </div>
            </div>


            <div class="modal-footer"></div>
        </div>
    </div>
</div>



<div class="modal fade" id="ContentModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Add Content</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                <div><label>How to complete it</label></div>
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Mark Complete</button>
                        <button class="btn btn-default"><i class="fa fa-question"></i>&nbsp;With a Question</button>
                       
                    </div>
                </div>



                <div class="form-group">
                    <div><label>Content</label></div>
                    <textarea class="form-control" placeholder="Notes"></textarea>
                </div>
            </div>


            <div class="modal-footer"></div>
        </div>
    </div>
</div>



<div class="modal fade" id="SurveyModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Add Survey</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" />
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>







                </div>
                <div class="tab-pane" id="tab_3">
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Access Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Prerequisites</label>

                                    <button type="button" class="btn btn-default btn-block fa fa-plus"
                                            style="height: 100px">
                                        Add Prerequisite
                                    </button>

                                </div>
                            </div>
                            <br/>
                            <div class="row">

                                <div class="col-md-8">
                                    <label>Adminstrator</label>
                                    <select class="form-control">
                                        <option>Thomas Kofi Wilmot</option>
                                        <option>Dr.Arnie</option>
                                        <option>Other Instructor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">

                        </div>
                    </div>


                </div>
                <div class="tab-pane" id="tab_4">
                    <div class="box">
                        <div class="box-header"></div>
                        <div class="box-body">
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
                        <div class="box-footer">

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_5">
                    <div class="box">
                        <div class="box-header"></div>
                        <div class="box-body">

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
                                    <input type="text"
                                           placeholder="Default enrollment email wil be send to learners ..."
                                           style="width: 50%" disabled="">
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
                                    <input type="text"
                                           placeholder="Default enrollment email wil be send to learners ..."
                                           style="width: 50%" disabled="">
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

                        </div>
                        <div class="box-footer">

                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tab_6">
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                <div class="col-md-12">
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
                                <div class="col-md-12">
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
                        <div class="box-footer">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>


@endsection


@section("scripts")
<script>

    var tab_2 = new Vue({
        el : "#tab_2",
        data : {
            SelectedVideoSource : 'URL',
            Modules : [
                {
                    Title : "Module 1",
                    Description : "lorem ipsum"
                },
                {
                    Title : "Module 2",
                    Description : "lorem ipsum"
                },
            ],    
        },
        methods :{
            ChangeVideoSource(Type){
                this.SelectedVideoSource = Type;
            },
            AddNewModule(){
                this.Modules.push({Title : "New Module", Description : ""});
            },
            OpenNewContentModal(){
                $("#AddContentModal").modal("show");
            },
            CloseNewContentModal(){
                $("#AddContentModal").modal("hide");
            },
            OpenVideoModal(){
                this.CloseNewContentModal();
                $("#VideoModal").modal("show");
            },
            OpenFileModal(){
                this.CloseNewContentModal();
                $("#FileModal").modal("show");
            },
            OpenContentModal(){
                this.CloseNewContentModal();
                $("#ContentModal").modal("show");
            },
            OpenAssesmentModal(){
                this.CloseNewContentModal();
                $("#AssesmentModal").modal("show");
            },
            OpenSurveyModal(){
                this.CloseNewContentModal();
                $("#SurveyModal").modal("show");
            }
        }
    });

</script>
@endsection
