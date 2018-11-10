@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>View Project</h1>

        </section>
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" placeholder="Love and Marriage">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control">A Corsue Designed to help couple develop a biblical view of marriage.
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>funding Target Date</label>
                                <input type="date" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>cost</label>
                                <input type="text" class="form-control" placeholder="$1000">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">

                            <label>Project Image(24*124px)</label>
                            <br>
                            <i class="fa fa-image (alias)"></i>

                            <div class="input-group">

                                <input type="disabled" class="form-control" id="info" readonly="" style="background: #fff;" placeholder="File Upload...">
                                <span class="input-group-btn">
											<span class="btn btn-primary  btn-file">
												Choose
												<input type="file">
											</span>
										</span>
                            </div>
                        </div>


                    </div>






                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-success">Save Changes</button>

                                <button class="btn btn-danger">Cancel</button>

                            </div>
                        </div>
                    </div>



                </div>


            </div>
        </section>
    </div>


@endsection


@section('scripts')

@endsection