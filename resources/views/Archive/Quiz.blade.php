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
                            <h2>Question No 1.</h2>
                            <select class="form-control">
                                <option>option1</option>
                                <option>option2</option>
                                <option>option3</option>
                            </select>

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

                                       <td><a href="{{ url('/') }}/archive/lesson" role="button" class="text">Lesson 1</a></td>

                                   </tr>
                                   <tr>

                                       <td><a href="#/" role="button" class="text">Lesson 2</a></td>


                                   </tr>


                                   </tbody>
                               </table>



                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-primary">Previous Question</button>
                            <button type="button" class="btn btn-primary">Next Question</button>
                            <button type="button" class="btn btn-primary">Submit Quiz and Complete Lesson</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>



@endsection
