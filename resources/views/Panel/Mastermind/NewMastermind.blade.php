@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Add Mastermind</h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Course</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Start Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>End Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Maximam no. of Students</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <label>Mastermind Fee</label>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">


                                    <label>
                                        <input type="checkbox"> Fee
                                    </label>


                            </div>
                            <div class="col-md-2">
                                <label>
                                    <input type="checkbox"> Adminssion Cost
                                </label>
                            </div>
                            <div class="col-md-2">

                                    <input type="email" class="form-control" placeholder=".."/>

                            </div>




                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Instructor Commission</label>

                                <div class="row">

                                </div>
                            </div>

                        </div>
                    </form>


                </div>
            </div>


        </section>
    </div>
        @endsection