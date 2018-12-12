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
                    <a href="{{url('/')}}/category/add"  class="btn btn-outline-success">More</a>
                </div>

                <div class="box-body">
                  <div class="row">
                      <div class="col-md-3">
                          <label>Preferred Name</label>
                          <input type="text" class="form-control" placeholder="John"/>
                      </div>
                  </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="John"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Deere"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Email/Username</label>
                            <input type="text" class="form-control" placeholder="John@deere.com"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Role/Type</label><br/>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Learner
                                </label>
                                <label>
                                    <input type="checkbox"> Instructor
                                </label>
                                <label>
                                    <input type="checkbox"> Admin
                                </label>
                                <label>
                                    <input type="checkbox"> Accountability Partner
                                </label>
                                <label>
                                    <input type="checkbox"> Lead
                                </label>
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url('/')}}/course"  class="btn btn-success">Save Changes</a>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>


                <!-- /.box-body -->
            </div>



        </section>
    </div>


@endsection