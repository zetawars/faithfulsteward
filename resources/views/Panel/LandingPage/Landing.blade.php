@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Compagin</li>
            </ol>
            <h1>Landing Pages</h1>

        </section>
        <section class="content">


            <div class="box">
                <div class="box-header">

                    <a href="{{url('/')}}/landing/add" class="btn btn-primary">Create Landing Pages</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">


                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Landing Pages</th>
                                    <th>Type</th>
                                    <th>Visitors</th>
                                    <th>Leads/Registration</th>
                                    <th style="width: 25%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Biblical Finance 101</td>
                                    <td>Course Page</td>
                                    <td>1000</td>
                                    <td>100</td>
                                    <td><a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                        <a href="#/" class="text-info"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#/" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Car Buying</td>
                                    <td>Lead Magnet</td>
                                    <td>30000</td>
                                    <td>300</td>
                                    <td><a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
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

