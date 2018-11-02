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
            <h1>Settings</h1>

        </section>
        <section class="content">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Brancing+layout</a></li>
                    <li><a href="#tab_3" data-toggle="tab">CMS</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Role+permissions</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Masterminds</a></li>
                    <li><a href="#tab_6" data-toggle="tab">Completion</a></li>
                    <li><a href="#tab_7" data-toggle="tab">Messages</a></li>
                    <li><a href="#tab_8" data-toggle="tab">More</a></li>

                </ul>
            </div>
            <div class="tab-pane" id="tab_1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Date format</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>item 1</option>
                                <option>item 2</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Registration Field</label>

                        <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <label>First Name</label>
                                    &nbsp;&nbsp;<input type="radio" name="firstname" id="firstname" value="option1" checked="">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <label>Last Name</label>
                                    &nbsp;&nbsp;<input type="radio" name="lastname" id="lastname" value="option1" checked="">

                                </div>

                            </div>
                        </div>




                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-lg" >+&nbsp;&nbsp;&nbsp;Add Field</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label>Login</label>
                            <br>
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                               Disable User Ability to Change Password
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Enforce Strong Password
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Enforce Medium Strong Password
                            </label>
                        </div>
                    </div>
                </div>


            </div>


        </section>
    </div>


@endsection