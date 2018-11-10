@extends('Panel.Home.Layout') @section('content')


    <style>
        i.headingicons {
            font-size: 40px;
            margin-top: 80px;
        }

        ul.todo-list {
            font-size: 18px;

        }

        .todo-list li {

            margin-top: 10px;
        }

        table.table-bordered{
            border: 1px solid black;

        }
        .table-bordered tr{

            border: 1px solid black;

        }


        .table-bordered > th{

            border: 1px solid black;

        }

        .table-bordered > thead{

            border: 1px solid black;

        }

        .table-bordered > tbody{

            border: 1px solid black;

        }

        .table-bordered  td{

            border: 1px solid black;

        }

    </style>

    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Reports</a>
                </li>
                <li class="active">Custom Report</li>
            </ol>
            <h1>Custom Report</h1>

        </section>
        <section class="content">
            <div style="background:lightgrey;width:100%;height:200px">
                <div class="form-group">
                    <div class="col-xs-12" style="margin-top:20px">
                        <center>
                            <p>Create a report to download
                                <br> Or Schedule it to automatically export to your email </p>
                        </center>
                    </div>
                </div>
                <div class="form-group" style="margin-top:30px">
                    <div class="col-xs-2">
                        <i class="fa fa-wrench headingicons"></i>
                    </div>

                    <div class="col-xs-2">
                        <i class="fa fa-wifi headingicons"></i>
                    </div>

                    <div class="col-xs-2">
                        <i class="fa fa-search headingicons"></i>
                    </div>

                    <div class="col-xs-2">
                        <i class="fa fa-calendar headingicons"></i>
                    </div>


                    <div class="col-xs-2">
                        <i class="fa fa-list headingicons"></i>
                    </div>

                    <div class="col-xs-2">
                        <i class="fa fa-download headingicons"></i>
                    </div>

                </div>

            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form id="example-form" action="#">
                        <div>
                            <h3>Report Type</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">What would you like to report on ?</label>
                                        <select class="form-control">
                                            <option>Assesment Results</option>
                                            <option>Item 1</option>
                                            <option>Item 2</option>
                                            <option>Item 3</option>

                                        </select>
                                    </div>
                                </div>

                            </section>
                            <h3>Table</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">What fields would you like to display?</label>
                                        <ul class="todo-list ui-sortable" style="font-size:20px">
                                            <li>
                                                <input type="checkbox" value="">
                                                <span class="text">Course Title</span>
                                            </li>
                                            <li>
                                                <input type="checkbox" value="">
                                                <span class="text">Categories</span>
                                            </li>
                                            <li>
                                                <input type="checkbox" value="">
                                                <span class="text">Active</span>
                                            </li>
                                            <li>
                                                <input type="checkbox" value="">
                                                <span class="text">Date Created</span>
                                            </li>
                                            <li>
                                                <input type="checkbox" value="">
                                                <span class="text">Average Rating</span>
                                            </li>


                                        </ul>


                                    </div>
                                </div>

                            </section>
                            <h3>Preview</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Preview Your Report</label>
                                        <label>Total Records int Reports: 2</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Average Ratings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </section>
                            <h3>Finish</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Report Name</label>
                                        <input type="text" class="form-control" placeholder="Text Input" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Format</label>
                                        <select class="form-control">
                                            <option>CSV</option>
                                            <option>PDF</option>
                                            <option>Excel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Email Address (Seperate Multiple emails with commas)</label>
                                        <textarea class="form-control">Text area</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Frequency</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Run Once</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>

                                        </select>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>





        </section>
    </div>



@endsection @section('scripts')
    <script>
        $(function() {


            var form = $("#example-form");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function(event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            });

        });
    </script>
@endsection