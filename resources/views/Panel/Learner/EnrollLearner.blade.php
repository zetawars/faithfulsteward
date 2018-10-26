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
            <div class="tab-pane" id="tab_1">
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default">Add Filter</button>
                    </div>
                </div>
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
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th style="width: 25%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Adam Smith</td>
                                    <td>as@live.com</td>

                                    <td>
                                        <i class="fa fa-user-plus"></i>&nbsp;

                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Randall Cunningham</td>
                                    <td>Scrambler@run.com</td>

                                    <td><i class="fa fa-user-plus"></i>&nbsp;

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
        </section>
    </div>
    @endsection