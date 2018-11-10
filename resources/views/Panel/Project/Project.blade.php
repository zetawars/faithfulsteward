@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Project</li>
            </ol>
            <h1>Projects</h1>

        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('/')}}/project/add" class="btn btn-primary">Add projects</a>
                </div>
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-12">


                                <table class="table table-bordered datatable">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Project Name</th>
                                        <th>Created</th>
                                        <th>Target</th>
                                        <th>Invested</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Love & Marriage</td>
                                        <td>June-23-17</td>
                                        <td>$1000</td>
                                        <td>$1200</td>
                                        <td><a href="{{url('/')}}/project/view" class="text-primary"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>The llth flour</td>
                                        <td>Apr 21-18</td>
                                        <td>$10000</td>
                                        <td>$5000</td>
                                        <td><a href="{{url('/')}}/project/view" class="text-primary"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->


                        </div>
                    </div>
                <div class="box-footer">

                </div>

            </div>


        </section>
    </div>


@endsection

