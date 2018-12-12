@extends('Panel.Home.Layout') @section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Home</a>
                </li>
                <li class="active">Courses</li>
            </ol>
            <h1>Contacts</h1>

        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('/')}}/course/newcourse" class="btn btn-outline-success">User Info</a>
                    <a href="{{url('/')}}/mastermind/new" class="btn btn-outline-success">Details</a>
                    <a href="{{url('/')}}/category/add"  class="btn btn-outline-success">Activity</a>
                    <a href="{{url('/')}}/edituser/course"  class="btn btn-outline-success active">Courses</a>
                    <a href="{{url('/')}}/edituser/more"  class="btn btn-outline-success">More</a>
                </div>

                <div class="box-body">
                    <table class="table table-bordered datatable">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Course Name</th>

                            <th>Instructor</th>
                            <th>Status</th>
                            <th style="width: 25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Biblical Finance1</td>
                            <td>Admin</td>
                            <td>Inactive</td>
                            <td>
                                <a href="#"><i class="fa fa-user"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-refresh"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Test Course</td>
                            <td>Learner</td>
                            <td>Active</td>
                            <td>
                                <a href="#"><i class="fa fa-user"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-refresh"></i></a>

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
                </div>


                <!-- /.box-body -->
            </div>



        </section>
    </div>


@endsection