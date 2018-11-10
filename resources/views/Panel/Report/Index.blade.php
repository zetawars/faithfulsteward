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


            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" class="active">User Reports</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Course Report</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Mastermind Report</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Test Report</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Survey Report</a></li>
                    <li><a href="#tab_6" data-toggle="tab">Investment Report</a></li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">



                            <div class="box">
                                <div class="box-header">
                                    <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>


                                </div>

                              <div class="box-body">

                                <table class="table table-bordered datatable">
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
                                        <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Users Overview</td>
                                        <td>User Report</td>
                                        <td></td>

                                        <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>User Log</td>
                                        <td>User Report</td>
                                        <td></td>

                                        <td>
                                            <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                                <div class="box-footer">

                                </div>
                            </div>
                            <!-- /.box -->


                        </div>

                <div class="tab-pane" id="tab_2">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>


                        </div>

                    <div class="box-body">

                        <table class="table table-bordered datatable">
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
                                <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Course Overview</td>
                                <td>Course Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                        <div class="box-footer">

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_3">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>



                        </div>

                        <div class="box-body">

                        <table class="table table-bordered datatable">
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
                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mastermind Report</td>
                                <td>Mastermind Report</td>
                                <td></td>

                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        </div>
                        <div class="box-footer">

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_4">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>

                        </div>

                        <div class="box-body">

                        <table class="table table-bordered datatable">
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
                                <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Test Report</td>
                                <td>Test Report</td>
                                <td></td>

                                <td><a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                        <div class="box-footer">

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_5">
                    <div class="box">
                        <div class="box-header">


                            <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>

                        </div>

                     <div class="box-body">
                        <table class="table table-bordered datatable">
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
                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Survey Report</td>
                                <td>Survey Report</td>
                                <td></td>

                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>

                        <div class="box-footer">

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_6">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('/')}}/report/custom" class="btn btn-primary">Custom Reports</a>



                        </div>
                        <div class="box-body">

                        <table class="table table-bordered datatable">
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
                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Investment Report</td>
                                <td>Investment Report</td>
                                <td></td>

                                <td> <a href="{{url('/')}}/report/view" class="text-info"><i class="fa fa-eye"></i></a>
                                    <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        </div>
                        <div class="box-footer">

                        </div>
                    </div>
                </div>


            </div>

        </section>
    </div>


@endsection

