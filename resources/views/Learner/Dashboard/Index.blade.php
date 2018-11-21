@extends('Panel.Home.Layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                My Dashboard

            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">

            <h4>Hi (user name), Welcome back!</h4>
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>7</h3>

                            <p>Login This Month</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>21</h3>

                            <p>Total Lessons Completed</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>15</h3>

                            <p>Lessons Remaining</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">


                            <i class="fa fa-image"></i>


                        </div>
                        <div class="col-md-2">


                            Biblical Finance 101


                        </div>
                        <div class="col-md-5 progress">

                            <a href="#" class="progress-bar progress-bar-green"role="progressbar" aria-valuenow="40" aria-valuemin="0"aria-valuemax="100" style="width: 40%"></a>


                                    <span class="sr-only">40% Complete (success)</span>

                        </div>
                        <div class="col-md-2">


                            <a href="{{ url('/') }}/learner/coursedetail" class="btn btn-primary">
                                Resume
                            </a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">


                            <i class="fa fa-image"></i>


                        </div>
                        <div class="col-md-2">

                        Course #@2


                        </div>
                        <div class="col-md-5 progress">

                            <a href="#" class="progress-bar progress-bar-green"role="progressbar" aria-valuenow="40" aria-valuemin="0"aria-valuemax="100" style="width: 40%"></a>


                            <span class="sr-only">40% Complete (success)</span>

                        </div>
                        <div class="col-md-2">


                            <a href="#" class="btn btn-primary">
                                Resume
                            </a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">


                            <i class="fa fa-image"></i>


                        </div>
                        <div class="col-md-2">


                         Course #3

                        </div>
                        <div class="col-md-5 progress">

                            <a href="#" class="progress-bar progress-bar-green"role="progressbar" aria-valuenow="40" aria-valuemin="0"aria-valuemax="100" style="width: 40%"></a>


                            <span class="sr-only">40% Complete (success)</span>

                        </div>
                        <div class="col-md-2">


                            <a href="#" class="btn btn-primary">
                                Resume
                            </a>

                        </div>
                    </div>

                    <div  class="row">
                        <div class="col-md-6">
                            <h3>Kigndom Investment Opportunities</h3>
                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-md-2">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                        </div>
                        <div class="col-md-2">
                         <h3>Project Name
                            Project overview....<br>

                                <br>  project cost</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    67% Funded
                            </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary">Invest in project</button>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </div>



@endsection
