@extends('Panel.Home.Layout')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <h1>Courses</h1>

    </section>
    <section class="content">

        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">In progress</a></li>
                <li><a href="#tab_2" data-toggle="tab">Completed</a></li>
                <li><a href="#tab_3"data-toggle="tab">Live</a></li>



            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="box">
                    <div class="box-header">

                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin-left: 30px">
                                <label class="form-group">Course #2</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default" style="margin-left: 20px">Continue Editing</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>

            </div>
            <div class="tab-pane" id="tab_2">
                <div class="box">
                    <div class="box-header">

                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin-left: 30px">
                                <label class="form-group">Course #3</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-lg" style="margin-left: 30px">Review</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>

            </div>
            <div class="tab-pane" id="tab_3">
                <div class="box">
                    <div class="box-header">

                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin-left: 30px">
                                <label class="form-group">Biblical Finance 101</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-lg" style="margin-left: 30px">view</button>
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

        <!-- nav-tabs-custom -->

    </section>
</div>


@endsection

