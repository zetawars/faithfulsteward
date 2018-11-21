@extends('Panel.Home.Layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                My Courses

            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Current</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Completed</a></li>


                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">

                                    <a href="{{url('/')}}/learner/bilicalfinance">
                                        <img src="http://placehold.it/150x100" title="Click for Biblical Finance"
                                             alt="..." width="300" height="200"/></a>
                                </div>
                                <div class="col-md-2 col-md-offset-1">
                                    <a href="{{url('/')}}/learner/bilicalfinance">
                                        <img src="http://placehold.it/150x100" title="Click for Biblical Finance"
                                             alt="..." width="300" height="200"/></a>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <label>Biblical Finance 101</label>
                                </div>

                                <div class="col-md-2 col-md-offset-1">
                                    <label>Course #2</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <button type="button" class="btn btn-primary">Resume</button>
                                </div>

                                <div class="col-md-2 col-md-offset-1">
                                    <button type="button" class="btn btn-primary">Start Course</button>
                                </div>
                            </div>

                            <div class="box-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_2">
                    <div class="box">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">

                                    <img src="http://placehold.it/150x100" alt="..." width="300" height="200"/>
                                </div>
                                <div class="col-md-2 col-md-offset-1">
                                    <img src="http://placehold.it/150x100" alt="..." width="300" height="200"/>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <label>Course #3</label>
                                </div>

                                <div class="col-md-2 col-md-offset-1">
                                    <label>Course #4</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <button type="button" class="btn btn-primary">View
                                        Certificate
                                    </button>
                                </div>

                                <div class="col-md-2 col-md-offset-1">
                                    <button type="button" class="btn btn-primary">View
                                        Certificate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">

                        </div>
                    </div>

                </div>

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

        </section>

    </div>



@endsection
