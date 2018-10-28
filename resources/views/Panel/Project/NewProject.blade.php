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
            <h1>Add Project</h1>

        </section>
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Project Name</label>
                               <input type="text" class="form-control" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control">Text Are</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Cost</label>
                                <input type="text" class="form-control" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Funding Target Date</label>
                               <select class="form-control">
                                   <option>Select date</option>
                               </select>
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