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
                    <a href="{{url('/')}}/edituser/detail" class="btn btn-outline-success active">Details</a>
                    <a href="{{url('/')}}/category/add"  class="btn btn-outline-success">Activity</a>
                    <a href="{{url('/')}}/edituser/course"  class="btn btn-outline-success">Courses</a>
                    <a href="{{url('/')}}/edituser/more"  class="btn btn-outline-success">More</a>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="45 Denwick Ave">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="Calendon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Zip/Postal Code</label>
                            <input type="text" class="form-control" placeholder="PLC2K5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Country</label>
                            <select class="form-control">
                                <option>item1</option>
                                <option>item2</option>
                                <option>item3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-5">
                            <label>Avatar</label><br/>
                            <img src="avatar.png" alt="Avatar" class="avatar">
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