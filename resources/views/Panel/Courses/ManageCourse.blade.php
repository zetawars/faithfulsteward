@extends('Panel.Home.Layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Edit Courses</h1>

        </section>

        <section class="content">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Syllabus</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Availability</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Learners</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Masterminds</a></li>
                    <li><a href="#tab_6" data-toggle="tab">Completion</a></li>
                    <li><a href="#tab_7" data-toggle="tab">Messages</a></li>
                    <li><a href="#tab_8" data-toggle="tab">More</a></li>

                </ul>
            </div>
            <div class="tab-content">


                <div class="tab-pane active" id="tab_1">
                    <form role="form">
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
                                <textarea class="form-control" rows="3"
                                          placeholder="Enter ..."></textarea>
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
                                    <label><br></label>
                                    <button type="button" class="form-control btn btn-primary">Add
                                        Course
                                    </button>
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
                        Choose <input type="file">
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

                                        <input type="disabled" class="form-control" id="info"
                                               readonly="" style="background: #fff;"
                                               placeholder="File Upload...">
                                        <span class="input-group-btn">
                      <span class="btn btn-primary  btn-file">
                       Choose <input type="file">
                        </span>
                        </span>
                                    </div>
                                </div>


                        </div>
                        <div class="row">


                                <div class="form-group col-md-6">
                                    <label>Tags</label>
                                    <div class="input-group">

                                        <input type="disabled" class="form-control" id="info"
                                               readonly="" style="background: #fff;"
                                               placeholder="Search For Tags">
                                        <span class="input-group-btn">
                              <span class="btn btn-primary  btn-file">
                               + <input type="file">
                              </span>
                              </span>
                                    </div>
                                </div>

                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                    <label>Course Status</label>
                                    <div class="button-group">

                                        <button type="button" class="btn btn-primary">Draft</button>
                                        <button type="button" class="btn btn-primary">Completed</button>
                                    </div>
                                </div>

                        </div>
                        <div class="row">


                                <div class="form-group col-md-6">
                                    <label>Course Status</label>
                                    <div class="button-group">
                                        <button type="button" class="btn btn-primary">Save Changes
                                        </button>
                                        <button type="button" class="btn btn-primary">Cancel</button>
                                    </div>

                            </div>
                        </div>
                    </form>
                </div>






                <div class="tab-pane active" id="tab_2">

                        <h4>Learner must complete</h4>
                        <div class="row">
                            <div class="col-md-6"custom-control custom-radio custom-control-inline>

                                    <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline1">Lesson in order</label>


                                    <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline2">Lesson in any order</label>


                                <!-- Default inline 3-->

                                    <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline3">Exams</label>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-10">

                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <i class="fa  fa-th"></i>

                                            <input type="disable" placeholder="Introduction"/>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Course Introduction</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Module #1Entrance Exam</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Module #1Workbook</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Add
                                                    <i class="fa fa-plus pull-right" ></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        <div class="row">
                        <div class="col-md-10">

                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa  fa-th"></i>

                                    <input type="disable" placeholder="Module#1"/>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Who's the Boss?</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Leave it to the Boss</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Know your Role</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" name="btn" class="btb btn-default btn-block" style="margin-left: 300px">Add
                                                <i class="fa fa-plus pull-right" ></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_3">

                </div>

                <div class="tab-pane" id="tab_4">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{url('/')}}/enroll/learner" class="btn btn-default">Enroll Learner</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                    <div class="box-tools">
                                        <ul class="pagination no-margin">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- /.box-header -->

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>User</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Ryan Tolbert</td>
                                        <td>Admin</td>
                                        <td>Inactive</td>
                                        <td>
                                            <i class="fa fa-user-plus"></i>&nbsp;
                                            <i class="fa fa-envelope-o"></i>&nbsp;
                                            <i class="fa fa-refresh"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Erica Daino</td>
                                        <td>Learner</td>
                                        <td>Active</td>
                                        <td><i class="fa fa-user-plus"></i>&nbsp;
                                            <i class="fa fa-envelope-o"></i>&nbsp;
                                            <i class="fa fa-refresh"></i>
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
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->


                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_5">
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-default">New Mastermind</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                    <div class="box-tools">
                                        <ul class="pagination no-margin">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- /.box-header -->

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>ID</th>
                                        <th>Start Date</th>
                                        <th>Status</th>
                                        <th>No of Students</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>BF101-001</td>
                                        <td>March 3,2018</td>
                                        <td>Closed</td>
                                        <td>25</td>
                                        <td>
                                            <i class="fa fa-user-plus"></i>&nbsp;
                                            <i class="fa fa-envelope-o"></i>&nbsp;
                                            <i class="fa  fa-sliders"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>BF101-002</td>
                                        <td>jung 7,2018</td>
                                        <td>Pending</td>
                                        <td>15</td>
                                        <td><i class="fa fa-user-plus"></i>&nbsp;
                                            <i class="fa fa-envelope-o"></i>&nbsp;
                                            <i class="fa  fa-sliders"></i>
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
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->


                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_6">

                </div>
                <div class="tab-pane" id="tab_7">

                </div>
                <div class="tab-pane" id="tab_8">

                </div>
            </div>

        </section>
    </div>


@endsection

