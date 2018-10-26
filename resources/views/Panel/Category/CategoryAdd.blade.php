@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Add Category</h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="fom-control" name="" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control">
                                            <option>select</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" name="btn" class="btn btn-default">Add Category</button>
                            </div>
                        </div>




                    </form>


                </div>
            </div>


        </section>
    </div>
@endsection