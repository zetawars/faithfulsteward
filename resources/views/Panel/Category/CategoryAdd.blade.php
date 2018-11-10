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
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Category Name</label>
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="row">
                        <br/>
                        <div class="col-md-3">
                            <label>Parent Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Finance</option>
                                <option>Relationship</option>
                                <option>Calling</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <br/>
                        <div class="col-md-3">
                           <button type="button" class="btn btn-primary">Add Cagtegory</button>


                        </div>
                    </div>
                </div>
                <div class="box-footer">

                </div>
            </div>

        </section>
    </div>
@endsection