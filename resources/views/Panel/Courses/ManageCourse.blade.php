@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Add Course</h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Syllabus</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Availibility</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Compleition</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Message</a></li>
                            <li><a href="#tab_6" data-toggle="tab">More</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">

                                <div class="box-body">

                                    <form role="form">
                                        <!-- text input -->
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                <input type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Course Description</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="Enter ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="form-group col-md-7">
                                                    <label for="inputEmail4">Course Category</label>
                                                    <select class="form-control">
                                                        <option>Finance</option>
                                                        <option>Gospel</option>
                                                        <option>Relationship</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label><br></label>
                                                    <button type="button" class="form-control btn btn-primary">Add
                                                        Course
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

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

                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="form-group col-md-9">
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

                                        </div>

                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="form-group col-md-9">
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
                                        </div>

                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Course Status</label>
                                                    <div class="button-group">

                                                        <button type="button" class="btn btn-primary">Draft</button>
                                                        <button type="button" class="btn btn-primary">Completed</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
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
                                        </div>
                                </div>


                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>

                </div>
            </div>


        </section>
    </div>


@endsection

