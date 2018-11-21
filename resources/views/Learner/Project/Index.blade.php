@extends('Panel.Home.Layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Projects

            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <h2>Current Projects</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/150x100" title="Click for Biblical Finance" alt="..." width="300" height="200"></a>
                        </div>
                           <div class="col-md-4">
                            <h3>Project Name</h3>
                           <h4> Project Overview..</h4>
                               <h4>project Cost</h4>
                           </div>

                        <div class="col-md-3">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;">
                                    <span class="my-centered">60% Complete</span>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-block">Invest in Project</button>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>General Investment</h2>
                            <br/>
                            <h4>Not in intrested in the current project,</h4>
                            <h4>but desiring to invest in the ministry?</h4>
                            <br/>
                            <button type="button" class="btn btn-primary">Invest One</button>&nbsp;
                            <button type="button" class="btn btn-primary">Recurring Investment</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Past Projects</h2>
                            <br />
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                                <div class="item">
                                    <img src="{{ url('/') }}/Admin/dist/img/user2-160x160.jpg" alt="User Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>



@endsection
