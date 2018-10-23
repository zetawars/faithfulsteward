@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Courses</h1>

        </section>
        <section class="content">

                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">New Course</a></li>
                        <li><a href="#tab_2" data-toggle="tab">New Mastermind</a></li>
                        <li><a href="#tab_3" data-toggle="tab">New Category</a></li>


                    </ul>
                </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-block btn-default">Add Filter</button>
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
                                                <th>Course Name</th>
                                                <th>Course Category</th>
                                                <th>Instructor</th>
                                                <th style="width: 25%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Biblical Finance1</td>
                                                <td>Finance</td>
                                                <td>Kofi</td>
                                                <td>
                                                    <a href="{{url('/')}}/course/view" class="btn btn-default">View</a>
                                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">Manage</a>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Love & Marriage</td>
                                                <td>Relationships</td>
                                                <td>Dr.Annie</td>
                                                <td><a href="{{url('/')}}/course/view" class="btn btn-default">View</a>
                                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">Manage</a>
                                                    <button type="button" class="btn btn-danger">Delete</button>
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
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <div class="col-md-12">
                                <h1>hello</h1>
                                </div>
                        </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->

                <!-- nav-tabs-custom -->

        </section>
    </div>


@endsection

