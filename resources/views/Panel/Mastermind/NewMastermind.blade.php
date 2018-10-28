@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Add Mastermind</h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Course</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Start Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>End Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Maximam no. of Students</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <label>Mastermind Fee</label>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">


                                    <label>
                                        <input type="checkbox"> Fee
                                    </label>


                            </div>
                            <div class="col-md-2">
                                <label>
                                    <input type="checkbox"> Adminssion Cost
                                </label>
                            </div>
                            <div class="col-md-2">

                                    <input type="email" class="form-control" placeholder=".."/>

                            </div>




                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Instructor Commission</label>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                        40% Complete (success)
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label>Gamiflaction</label>
                                <br>
                                <label>off</label>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                                <label>on</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Notify mastermind learner when badges/points are received
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>Use Custome Gamiflaction Settings</label>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <label>off</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                        <label>on</label>

                                </div>
<br>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Default gamiflcation points and badges will be rewarded for this mastermind" disabled=""/>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Drip Feed Schedule</label>

                                <div class="input-group">

                                    <!-- /btn-group -->
                                    <input type="text" class="form-control" placeholder="Manual Input">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-danger" disabled>import</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-10">

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Responsive Hover Table</h3>

                                            <div class="box-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tbody><tr>
                                                    <th>Module Name/No</th>
                                                    <th>Lesson No</th>
                                                    <th>Lesson Name</th>
                                                    <th>Release Date</th>

                                                </tr>
                                                <tr>
                                                    <td>Intro</td>
                                                    <td>1</td>
                                                    <td>Introduction to BF101</td>
                                                    <td>May 1</td>

                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>Who is the Boss?</td>
                                                    <td>May 3</td>
                                                </tr>

                                                </tbody></table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <button type="button" name="btn" class="btn btn-primary">Save Changes</button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" name="btn" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>


        </section>
    </div>
        @endsection