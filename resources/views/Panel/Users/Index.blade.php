@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Users</li>
            </ol>
            <h1>Users</h1>

        </section>
        <section class="content">

            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="{{url('/')}}/users/add" class="btn btn-default">Add User</a></li>


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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Last Login</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Deere</td>
                                        <td>john@gmail.com</td>
                                        <td>Admin</td>
                                        <td>4 minutes ago</td>
                                        <td>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Mary Joe</td>
                                        <td>mj23@gmail.com</td>
                                        <td>Learner</td>
                                        <td>2 Weeks ago</td>
                                        <td>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">View</a>
                                            <a href="{{url('/')}}/course/manage" class="btn btn-default">Edit</a>
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

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

            <!-- nav-tabs-custom -->

        </section>
    </div>


@endsection

