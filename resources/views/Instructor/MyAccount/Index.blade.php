@extends('Panel.Home.Layout') @section('content')


    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 50px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>


    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Home</a>
                </li>
                <li class="active">User Profile</li>
            </ol>
            <h1>User Proifle</h1>

        </section>


        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{url('/')}}/Admin/pages/dist/img/user1-128x128.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center">John Deere</h3>

                            <p class="text-muted text-center">Last Activity : 28 Oct 2018</p>

                            <!-- <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="pull-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">543</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong> Preferred Name</strong>
                            <p class="text-muted">John</p>

                            <strong>First Name</strong>
                            <p class="text-muted">John</p>


                            <strong>Last Name</strong>
                            <p class="text-muted">Deere</p>


                            <strong>Email Address/Username</strong>
                            <p>john@dreere.com</p>

                            <strong>Role(s)</strong>
                            <div>Administrator</div>
                            <div>Instructor</div>

                            <br>
                            <strong>
                                <p>Social Profile &nbsp;
                                    <a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#Social" aria-expanded="false" class="collapsed">
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                </p>

                            </strong>

                            <div id="Social" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            </div>



                            <strong>
                                <p>Address &nbsp;
                                    <a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#AddressDiv" aria-expanded="false" class="collapsed">
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                </p>

                            </strong>

                            <div id="AddressDiv" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                32 C Johar Town Lahore Punjab
                            </div>


                            <strong>
                                <p>Church Info &nbsp;
                                    <a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#ChurchInfo" aria-expanded="false" class="collapsed">
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                </p>

                            </strong>

                            <div id="ChurchInfo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            </div>





                        </div>



                    </div>
                    <!-- /.box -->
                    <div>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a>
                            </li>

                            <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false">Courses</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                            <button class="btn btn-default">
                                                <i class="fa fa-filter"></i>Filter Activity</button>
                                        </div>
                                    </div>
                                </div>




                                <div class="container mt-5 mb-5">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <h4>June 2018</h4>
                                            <ul class="timeline">
                                                <li>
                                                    <a target="_blank" href="https://www.totoprayogo.com/#">Logged In</a>
                                                    <a href="#" class="float-right"></a>
                                                    <p>20 June, 2018 at 03:05 PM</p>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://www.totoprayogo.com/#">Completed Lesson</a>
                                                    <a href="#" class="float-right"></a>
                                                    <p>20 June, 2018 at 03:05 PM</p>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://www.totoprayogo.com/#">Completed Lesson</a>
                                                    <a href="#" class="float-right"></a>
                                                    <p>20 June, 2018 at 03:05 PM</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#NoteTab" data-toggle="tab" aria-expanded="true">New Note</a>
                                        </li>
                                        <li class="">
                                            <a href="#EmailTab" data-toggle="tab" aria-expanded="false">Email</a>
                                        </li>
                                        <li class="">
                                            <a href="#LogTab" data-toggle="tab" aria-expanded="false">+Log</a>
                                        </li>
                                        <li class="">
                                            <a href="#TaskTab" data-toggle="tab" aria-expanded="false">+Task</a>
                                        </li>
                                        <li class="">
                                            <a href="#CalendarTab" data-toggle="tab" aria-expanded="false">+Calendar</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="NoteTab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="mytextarea" class="tinymce">Start typing a note</textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="pull-right">
                                                        <button class="btn btn-default">Done</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="EmailTab">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                                                </div>

                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                                </div>

                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="mytextarea" class="tinymce">Start typing email</textarea>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="pull-right">
                                                        <button class="btn btn-default">Send</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="tab-pane" id="LogTab">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Log Call</option>
                                                            <option>Log Email</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Wrong Number</option>
                                                            <option>No Answer</option>
                                                            <option>Busy</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>Describe the call.....</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="pull-right">
                                                        <button class="btn btn-default">Done</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="TaskTab">
                                            <div class="box-header ui-sortable-handle" style="cursor: move;">
                                                <i class="ion ion-clipboard"></i>
                                                <h3 class="box-title">Enter your task</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                                                <ul class="todo-list ui-sortable">
                                                    <li>
                                                        <!-- drag handle -->
                                                        <span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <!-- checkbox -->
                                                        <input type="checkbox" value="">
                                                        <!-- todo text -->
                                                        <span class="text">Design a nice theme</span>
                                                        <!-- Emphasis label -->
                                                        <small class="label label-danger">
                                                            <i class="fa fa-clock-o"></i> 2 mins
                                                        </small>
                                                        <!-- General tools such as edit or delete-->
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <input type="checkbox" value="">
                                                        <span class="text">Make the theme responsive</span>
                                                        <small class="label label-info">
                                                            <i class="fa fa-clock-o"></i> 4 hours
                                                        </small>
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <input type="checkbox" value="">
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="label label-warning">
                                                            <i class="fa fa-clock-o"></i> 1 day
                                                        </small>
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <input type="checkbox" value="">
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="label label-success">
                                                            <i class="fa fa-clock-o"></i> 3 days
                                                        </small>
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <input type="checkbox" value="">
                                                        <span class="text">Check your messages and notifications</span>
                                                        <small class="label label-primary">
                                                            <i class="fa fa-clock-o"></i> 1 week
                                                        </small>
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
													<span class="handle ui-sortable-handle">
														<i class="fa fa-ellipsis-v"></i>
														<i class="fa fa-ellipsis-v"></i>
													</span>
                                                        <input type="checkbox" value="">
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="label label-default">
                                                            <i class="fa fa-clock-o"></i> 1 month
                                                        </small>
                                                        <div class="tools">
                                                            <i class="fa fa-edit"></i>
                                                            <i class="fa fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix no-border">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Type</label>
                                                            <select class="form-control">
                                                                <option selected>Select</option>

                                                                <option>Item 1</option>
                                                                <option>Item 2</option>
                                                                <option>Item 3</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <label>Assigned To</label>
                                                            <select class="form-control">
                                                                <option selected>Select</option>

                                                                <option>Item 1</option>
                                                                <option>Item 2</option>
                                                                <option>Item 3</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Email Reminder</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="form-control">
                                                                        <option selected>The Day of</option>

                                                                        <option>Item 1</option>
                                                                        <option>Item 2</option>
                                                                        <option>Item 3</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control">
                                                                        <option selected>8:00 AM</option>

                                                                        <option>Item 1</option>

                                                                        <option>Item 2</option>
                                                                        <option>Item 3</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>&nbsp;</label>
                                                            <button type="button" style="margin-top:26px" class="btn btn-default pull-right">
                                                                <i class="fa fa-plus"></i>
                                                                Add item
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>


                                        <div class="tab-pane" id="CalendarTab">



                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="box box-solid">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">Draggable Events</h4>
                                                        </div>
                                                        <div class="box-body">
                                                            <!-- the events -->
                                                            <div id="external-events">
                                                                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                                                                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                                                                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 208.167px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Do homework</div>
                                                                <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                                                                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                                                                <div class="checkbox">
                                                                    <label for="drop-remove">
                                                                        <input type="checkbox" id="drop-remove">
                                                                        remove after drop
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                    </div>
                                                    <!-- /. box -->
                                                    <div class="box box-solid">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Create Event</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                                                <ul class="fc-color-picker" id="color-chooser">
                                                                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                                                                    <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /btn-group -->
                                                            <div class="input-group">
                                                                <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                                                                <div class="input-group-btn">
                                                                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-md-9">
                                                    <div class="box box-primary">
                                                        <div class="box-body no-padding">
                                                            <!-- THE CALENDAR -->
                                                            <div id="calendar"></div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                    </div>
                                                    <!-- /. box -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->







                                        </div>

                                    </div>


                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <div class="tab-pane" id="settings">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Course Title</th>
                                        <th>Status</th>
                                        <th>Registration Date</th>
                                        <th>Completion Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>Biblical Finance 101</td>
                                        <td>Not Started</td>
                                        <td>Mar-18-2018</td>
                                        <td></td>

                                    </tr>

                                    <tr>

                                        <td>Course #2</td>
                                        <td>In Progress</td>
                                        <td>Apr-30-2018</td>
                                        <td></td>

                                    </tr>


                                    </tbody>
                                </table>

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->



        </section>



    </div>



@endsection


@section('scripts')
    <script>
        $(function () {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function init_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex        : 1070,
                        revert        : true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    })

                })
            }

            init_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear()
            $('#calendar').fullCalendar({
                header    : {
                    left  : 'prev,next today',
                    center: 'title',
                    right : 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    month: 'month',
                    week : 'week',
                    day  : 'day'
                },
                //Random default events
                events    : [
                    {
                        title          : 'All Day Event',
                        start          : new Date(y, m, 1),
                        backgroundColor: '#f56954', //red
                        borderColor    : '#f56954' //red
                    },
                    {
                        title          : 'Long Event',
                        start          : new Date(y, m, d - 5),
                        end            : new Date(y, m, d - 2),
                        backgroundColor: '#f39c12', //yellow
                        borderColor    : '#f39c12' //yellow
                    },
                    {
                        title          : 'Meeting',
                        start          : new Date(y, m, d, 10, 30),
                        allDay         : false,
                        backgroundColor: '#0073b7', //Blue
                        borderColor    : '#0073b7' //Blue
                    },
                    {
                        title          : 'Lunch',
                        start          : new Date(y, m, d, 12, 0),
                        end            : new Date(y, m, d, 14, 0),
                        allDay         : false,
                        backgroundColor: '#00c0ef', //Info (aqua)
                        borderColor    : '#00c0ef' //Info (aqua)
                    },
                    {
                        title          : 'Birthday Party',
                        start          : new Date(y, m, d + 1, 19, 0),
                        end            : new Date(y, m, d + 1, 22, 30),
                        allDay         : false,
                        backgroundColor: '#00a65a', //Success (green)
                        borderColor    : '#00a65a' //Success (green)
                    },
                    {
                        title          : 'Click for Google',
                        start          : new Date(y, m, 28),
                        end            : new Date(y, m, 29),
                        url            : 'http://google.com/',
                        backgroundColor: '#3c8dbc', //Primary (light-blue)
                        borderColor    : '#3c8dbc' //Primary (light-blue)
                    }
                ],
                editable  : true,
                droppable : true, // this allows things to be dropped onto the calendar !!!
                drop      : function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject')

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject)

                    // assign it the date that was reported
                    copiedEventObject.start           = date
                    copiedEventObject.allDay          = allDay
                    copiedEventObject.backgroundColor = $(this).css('background-color')
                    copiedEventObject.borderColor     = $(this).css('border-color')

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove()
                    }

                }
            })

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function (e) {
                e.preventDefault()
                //Save color
                currColor = $(this).css('color')
                //Add color effect to button
                $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
            })
            $('#add-new-event').click(function (e) {
                e.preventDefault()
                //Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                //Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color'    : currColor,
                    'color'           : '#fff'
                }).addClass('external-event')
                event.html(val)
                $('#external-events').prepend(event)

                //Add draggable funtionality
                init_events(event)

                //Remove event from text input
                $('#new-event').val('')
            })
        })
    </script>
@endsection