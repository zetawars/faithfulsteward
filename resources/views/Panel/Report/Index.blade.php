@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Project</li>
            </ol>
            <h1>Reports</h1>

        </section>
        <section class="content">

                <div class="nav-tabs">
                    <div class="row">
                        <div class="col-md-3">
                         <a href="{{url('/')}}/report/custom" class="btn btn-default">Custom Reports</a>
                        </div>
                    </div>
                </div>
            <br>

            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="#tab_1" data-toggle="tab" class="active">User Reports</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Course Report</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Mastermind Report</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Test Report</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Survey Report</a></li>
                    <li><a href="#tab_6" data-toggle="tab">Investment Report</a></li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-block btn-default">Add Filter</button>
                                </div>
                            </div>
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
                                        <th>Report Name</th>
                                        <th>Report Type</th>
                                        <th>Last Viwed</th>

                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>List of users</td>
                                        <td>User Report</td>

                                        <td></td>
                                        <td><a href="{{url('/')}}/report/view" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Users Overview</td>
                                        <td>User Report</td>
                                        <td></td>

                                        <td><a href="{{url('/')}}/report/view" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>User Log</td>
                                        <td>User Report</td>
                                        <td></td>

                                        <td>
                                            <a href="{{url('/')}}/report/view" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->


                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab_2">
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
                                <th>Report Name</th>
                                <th>Report Type</th>
                                <th>Last Viwed</th>

                                <th style="width: 25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>List of Course</td>
                                <td>Course Report</td>

                                <td></td>
                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Course Overview</td>
                                <td>Course Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_3">
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
                                <th>Report Name</th>
                                <th>Report Type</th>
                                <th>Last Viwed</th>

                                <th style="width: 25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>List of Mastermind</td>
                                <td>Mastermind Report</td>

                                <td></td>
                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mastermind Report</td>
                                <td>Mastermind Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_4">
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
                                <th>Report Name</th>
                                <th>Report Type</th>
                                <th>Last Viwed</th>

                                <th style="width: 25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>List of Tests</td>
                                <td>Test Overview</td>

                                <td></td>
                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Test Report</td>
                                <td>Test Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_5">
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
                                <th>Report Name</th>
                                <th>Report Type</th>
                                <th>Last Viwed</th>

                                <th style="width: 25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>List of Survey</td>
                                <td>Survey Overview</td>

                                <td></td>
                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Survey Report</td>
                                <td>Survey Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_6">
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
                                <th>Report Name</th>
                                <th>Report Type</th>
                                <th>Last Viwed</th>

                                <th style="width: 25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>List of Investment</td>
                                <td>Investment Overview</td>

                                <td></td>
                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Investment Report</td>
                                <td>Investment Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                    <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>


            </div>

        </section>
    </div>


@endsection

