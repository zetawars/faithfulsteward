@extends('Panel.Home.Layout')

@section('content')
    <style>
        i.headingicons {
            font-size: 60px;

        }
        span.text{
            font-size: 20px;
        }
    </style>
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Compagin</li>
            </ol>
            <h1>Compagins</h1>

        </section>
        <section class="content">

            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="#tab_1" data-toggle="tab" active>Overview</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Courses</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Achievements</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Investments</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Profile</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Activity</a></li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">




                    <div class="row">
                        <div class="col-md-1">
                            <i class="fa fa-user headingicons"></i>

                        </div>

                        <div class="col-md-2">
                            <span class="text">Thomas Wilmot Kofi</span>
                            <span class="text">tk.wilmot@rogers.com</span>
                        </div>


                        </div>
                    <br>
                        <div class="row">

                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" class="form-group checked"> Admin
                            </label>

                                <label>
                                    <input type="checkbox" class="form-group checked"> Learner
                                </label>


                                <label>
                                    <input type="checkbox" class="form-group checked"> Instructor
                                </label>


                                <label>
                                    <input type="checkbox" class="form-group checked"> Accountability Partner
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                <div class="row">
                    <div class="col-md-4">

                        <!-- small box -->
                        <div class="small-box bg-gray">
                            <div class="inner">
                                <h3>Active</h3>

                                <i class="fa fa-check"></i>
                            </div>
                            <div>
                                {{--<i class="ion ion-bag"></i>--}}
                            </div>
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        </div>

                    </div>
                    <div class="col-md-4">

                        <!-- small box -->
                        <div class="small-box bg-gray">
                            <div class="inner">
                                <h3>Last Login</h3>

                                <span>1 Week ago</span>
                            </div>
                            <div class="icon">

                            </div>
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        </div>

                    </div>
                </div>


                </div>

                <div class="tab-pane" id="tab_2">


                </div>

                <div class="tab-pane" id="tab_3">


                </div>

                <div class="tab-pane" id="tab_4">


                </div>

                <div class="tab-pane" id="tab_5">


                </div>


                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

            <!-- nav-tabs-custom -->

        </section>
    </div>


@endsection

