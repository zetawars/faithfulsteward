
@extends('Panel.Home.Layout')

@section('content')


    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Course Catelog</h1>

        </section>
        <section class="content">

            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Course Type</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked> Self_Directed
                                    </label>
                                </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Instructor led
                                </label>
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Course Name</label>
                           <br>

                            <button type="button" class="btn btn-default">Search Course Name</button>
                        </div>
                        </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{url('/')}}/learner/bilicalfinance">
                            <img src="http://placehold.it/150x100"  title="Click for Biblical Finance" alt="..." width="300" height="200" /></a>

                                <label>Biblical Finance 101</label>
                            <label>Instructor 222</label>
                            <label>Type: self-paid</label>
                            <label>Price:free</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('/') }}/learner/coursedetail" role="button" class="btn btn-primary">View the Course</a>
                                </div>
                            </div>
                    </div>

                            <div class="col-md-2 col-md-offset-1">
                                <a href="{{url('/')}}/learner/bilicalfinance">
                                    <img src="http://placehold.it/150x100"  title="Click for Biblical Finance" alt="..." width="300" height="200" /></a>

                                <label>Biblical Finance 101</label>
                                <label>Instructor 222</label>
                                <label>Type: self-paid</label>
                                <label>Price:free</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary">View the Course</button>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="box-footer">

                </div>
            </div>








    </section>
    </div>


@endsection


