@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h1>Categories</h1>

        </section>
        <section class="content">

            <!-- Custom Tabs -->


            <div class="box">
                <div class="box-header">
                    <a href="{{url('/')}}/category/add" class="btn btn-primary">Add Category</a>
                    <h3 class="box-title"></h3>
                </div>

                <div class="box-body">


                    <table class="table table-bordered datatable">

                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Category Name</th>
                            <th>Parent Category</th>
                            <th></th>
                            <th></th>
                            <th style="width: 25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Finance</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Marriage</td>
                            <td>Relationship</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Parenting</td>
                            <td>Relationship</td>
                            <td></td>
                            <td></td>
                            <td><a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>


    <div class="box-footer">

    </div>

    <br>

    </div>

    <!-- /.tab-pane -->

    <!-- /.tab-content -->

    <!-- nav-tabs-custom -->

    </section>
    </div>


@endsection

