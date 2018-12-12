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
                    <a href="{{url('/')}}/edituser/course"  class="btn btn-outline-success">Courses</a>
                    <a href="{{url('/')}}/edituser/more"  class="btn btn-outline-success active">More</a>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Church</label>
                            <input type="text" class="form-control" placeholder="Faith Sansctuary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Time zone</label>
                            <select class="form-control">
                                <option>GMT</option>
                                <option>Itme 1</option>
                                <option>Item 2</option>
                                <option>Item 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Skype</label>
                            <input type="text" class="form-control" placeholder="nothinglikeadeere">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="@therealdeer">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="deereman">
                        </div>
                    </div>
                    <br/>

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