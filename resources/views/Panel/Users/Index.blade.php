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


                <div class="box">
                    <div class="box-header">

                            <a href="{{url('/')}}/users/add" class="btn btn-primary">Add User</a>
                            <h3 class="box-title"></h3>


                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                    <table class="table table-bordered datatable">
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
                                                <a href="{{url('/')}}/users/profile" class="text-primary"><i class="fa fa-eye"></i>></a>
                                                <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Mary Joe</td>
                                            <td>mj23@gmail.com</td>
                                            <td>Learner</td>
                                            <td>2 Weeks ago</td>
                                            <td>
                                                <a href="{{url('/')}}/users/profile" class="text-primary"><i class="fa fa-eye"></i>></a>
                                                <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->


                            </div>

                    <div class="footer">

                    </div>
                </div>

                </div>



        </section>
    </div>


@endsection

