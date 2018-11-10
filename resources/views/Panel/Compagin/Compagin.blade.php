@extends('Panel.Home.Layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Compagin</li>
            </ol>
            <h1>Compagins</h1>

        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('/')}}/compagin/add" class="btn btn-primary">Create Compagins</a>

                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">


                                <!-- /.box-header -->

                                <table class="table table-bordered datatable">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Compagin Name</th>
                                        <th>Date Created</th>
                                        <th>Status</th>
                                        <th>Opens</th>
                                        <th>Clicks</th>
                                        <th style="width: 25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Newsletter</td>
                                        <td>May-10-18</td>
                                        <td>In progress</td>
                                        <td>100</td>
                                        <td>1%</td>
                                        <td><a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info" ><i class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Newsletter C</td>
                                        <td>LDec-3-17</td>
                                        <td>Email Sent</td>
                                        <td>300</td>
                                        <td>10%</td>
                                        <td><a href="#/" class="text-primary"><i class="fa fa-eye"></i></a>
                                            <a href="#/" class="text-info" ><i class="fa fa-pencil-square-o"></i></a>
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

                <div class="box-footer">

                </div>



            <!-- Custom Tabs -->






        </section>
    </div>


@endsection

