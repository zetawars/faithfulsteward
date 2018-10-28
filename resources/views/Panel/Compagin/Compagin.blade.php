@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Compagin</li>
            </ol>
            <h1>Compagins</h1>

        </section>
        <section class="content">

            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="{{url('/')}}/compagin/add" class="btn btn-default">Create Compagins</a></li>


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
                                        <th>Compagin Name</th>
                                        <th>Date Created</th>
                                        <th>Status</th>
                                        <th>Opens</th>
                                        <th>Clicks</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Newsletter</td>
                                        <td>May-10-18</td>
                                        <td>In progress</td>
                                        <td>100</td>
                                        <td>1%</td>
                                        <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Newsletter C</td>
                                        <td>LDec-3-17</td>
                                        <td>Email Sent</td>
                                        <td>300</td>
                                        <td>10%</td>
                                        <td><a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">edit</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>

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

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

            <!-- nav-tabs-custom -->

        </section>
    </div>


@endsection

