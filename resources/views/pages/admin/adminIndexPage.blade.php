@extends('pages.adminMasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent


@stop

@section('content')
        <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="{{asset('/admin/bootstrap/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/admin/dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('/admin/dist/css/skins/_all-skins.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('/admin/plugins/iCheck/flat/blue.css')}}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">



{{--new content ares 2--}}
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >


    <div>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                        <textarea id="compose-textarea" class="form-control" style="height: 100px" placeholder="Type your status...">

                        </textarea>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                            </div>
                        </div><!-- /.box-footer -->
                    </div><!-- /. box -->
                </div><!-- /.col -->


            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->






    <div class="row">
        <div class="col-md-9">

            <div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Administrative</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/26 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Please make room for the students in common rooms.We are facing a loy of difficulty when the exams are near.
                                </p>
                            </div>
                        </div>
                    </li>

                    <br/>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Academic</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/28 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Please improve the internet connection at the 3rd floor reading room</p>

                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Others</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/28 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>There are less tables and chairs for students to have their meals at 1st floor
                                    cafeteria.Can you please expand the facilities at there??
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Cleaning Service</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/28 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>It's depressing to see an old man sweeping the other area under the scorching sun. Please look in to the welfare of the cleaning service than this. </p>

                            </div>
                        </div>
                    </li>
                    <li>
                    <li>
                        <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Labs</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/30 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Please don't switch off the AC in the labs after 5.30 in weekends. It's too hot inside.
                                </p>
                            </div>
                        </div>
                    </li>


                    <li class="timeline-inverted">
                        <div class="timeline-badge success"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Sports</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/30 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Thank you for the relevant officials,about taking steps to provide coach for each
                                    and every sport in the university
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Payments</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/31 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>It take a whole lot of time to get the refund of payments. Please be efficient on the refunding like when paying.                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge success"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Administration</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/30 </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>When meeting the acdemic officials there should be a system where we can get an appointment previously and meet. Otherwise there's a lot of time wastage.
                                </p>
                            </div>
                        </div>
                    </li>

                </ul>




                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->


        </div>
        <!-- /.col -->
    </div><!-- /.row -->


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/admin/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/admin/dist/js/demo.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/admin/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();
        });
    </script>


@stop



@section('js_ref')
    @parent

@stop