@extends('Panel.Home.Layout')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Biblical Finance</h1>

        </section>

        <section class="content">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">OverView</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Syllabus</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="box">
                                <div class="box-header" style="height: 350px">


                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="box box-solid" style="height: 350px">
                                <div class="box-header with-border">


                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <button type="button" class="btn btn-primary btn-block">
                                        In Progress - Resume
                                    </button>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            0%
                                        </div>
                                    </div>


                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><i class="fa fa-delicious"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;5 Modules</span></td>


                                    </tr>
                                    <tr>
                                        <td><i class="fa fa fa-edit"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;2c Lessons</span></td>

                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-clock-o"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;4 Hours</span></td>

                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-male"></i></td>
                                        <td></td>
                                        <td><a href="{{url('/')}}/learner/biography" class="text-aqua">&nbsp;Thomas Kofi Wilmo</a></td>

                                    </tr>
                                    </tbody>
                                </table>


                                <!-- /.box-body -->
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <p><i>If you are looking for you transformation in your finance,biblical finance
                                    101 is for you! this course will change your prespective on one of the most
                                    impactful but least understood topic in chemistry-the intersetion between faith
                                    and finance. It'll also provide you with the tools to become a better steward
                                    of the resources entrusted to you.<br>

                                    <br>What you'll learn:<br>
                                    -How to invest more into God's kingdom and still meet with day to day
                                    expenses.
                                    <br>-How to get out of debt, and stay out of debt
                                    <br>-Strategies to effectively oversee finances in your life
                                    <br>-how to create a Christ inspired budget</i>
                            </p>
                        </div>
                    </div>


                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-md-7">

                            <div class="box-body">
                                <h1>Modules</h1>
                                <div class="box-group" id="accordion">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <div class="panel box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                   aria-expanded="false" class="collapsed">
                                                    Intro
                                                    <i class="fa fa-chevron-down" style="margin-left: 650px"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="box-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                   class="collapsed" aria-expanded="false">
                                                    Module#1
                                                    <i class="fa fa-chevron-down" style="margin-left: 650px"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                   class="" aria-expanded="true">
                                                    Module#2
                                                    <i class="fa fa-chevron-down" style="margin-left: 650px"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse in" aria-expanded="true"
                                             style="">
                                            <div class="box-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="box box-solid" style="height: 350px">
                                <div class="box-header with-border">


                                </div>
                                <!-- /.box-header -->
                                <button type="button" class="btn btn-primary btn-block">
                                    In Progress - Resume
                                </button>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                        0%
                                    </div>

                                </div>



                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><i class="fa fa-delicious"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;5 Modules</span></td>


                                    </tr>
                                    <tr>
                                        <td><i class="fa fa fa-edit"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;2c Lessons</span></td>

                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-clock-o"></i></td>
                                        <td></td>
                                        <td><span>&nbsp;&nbsp;4 Hours</span></td>

                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-male"></i></td>
                                        <td></td>
                                        <td><a href="{{url('/')}}/learner/biography" class="text-aqua">&nbsp;Thomas Kofi Wilmo</a></td>

                                    </tr>
                                    </tbody>
                                </table>


                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.tab-pane -->

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

            <!-- nav-tabs-custom -->

        </section>
    </div>

@endsection