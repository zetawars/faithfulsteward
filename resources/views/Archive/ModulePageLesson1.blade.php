@extends('Panel.Home.Layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quiz

            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">

            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h2>Lesson 1</h2>


                            <div class="box border-success">
                                <a href="{{ url('/') }}/learner/coursedetail" role="button" class="text-blue">Read the Text given</a><br/>
                                <a href="{{ url('/') }}/learner/coursedetail" role="button" class="text-blue">Download Today file</a>

                           </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">

                                <table class="table table-bordered">
                                    <thead>Course Progress</thead>
                                    <tbody>
                                    <tr>

                                        <td><h3>Module 1</h3></td>

                                    </tr>
                                    <tr>

                                        <td><a href="{{ url('/') }}/learner/coursedetail" role="button" class="text-blue">Lesson 1</a></td>

                                    </tr>
                                    <tr>

                                        <td>Lesson 2</td>

                                    </tr>


                                    </tbody>
                                </table>



                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h4>Overall Rating </h4>

                        </div>
                        <div class="col-md-3">
                            <h4>3/5</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Your Rating </h4>

                        </div>
                        <div class="col-md-3">
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <button type="button" class="btn btn-primary">Complete Lesson / Move to Next Lesson</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>



@endsection
