<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>THINK IT HOME </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @section('css_ref')

            <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
        <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/iCheck/flat/blue.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    {{--new content ares 2--}}
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >
    @show

   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }
        .example-modal .modal {
            background: transparent !important;
        }
    </style>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{action('HomeController@index')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>IT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Welcome </b>{{Auth::user()->name}}</span>
        </a>

       <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <span class="hidden-xs"><i class="fa fa-user" aria-hidden="false"></i>  My Account</span>
                        </a>
                        <ul class="dropdown-menu">
                              <li class="user-footer">
                                <div class="col-lg-pull-0">
                                    <a href="auth/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
           <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                        {{--Add Ideas for the Page--}}
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i><span>Manage Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul style="display: block;" class="treeview-menu menu-open">
                                <li><a href="{{action('adminPagesController@newUsers')}}">
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        Add New User</a></li>
                                <li><a href="{{action('adminPagesController@updateUsersDetails')}}">
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        Update User Records</a></li>
                             </ul>
                        </li>

                    <li><a href="{{action('adminPagesController@manageSubmissions')}}"><i class="fa fa-file-text" aria-hidden="true"></i>
                            <span>Manage Submissions</span></a>

                    </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content_header')
        </section>






        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2016 <a href="http://almsaeedstudio.com">IDEA APP Admin Page</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            {{--<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>--}}
            {{--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>--}}
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            {{--<div class="tab-pane" id="control-sidebar-settings-tab">--}}
            {{--<form method="post">--}}
            {{--<h3 class="control-sidebar-heading">General Settings</h3>--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Report panel usage--}}
            {{--<input type="checkbox" class="pull-right" checked>--}}
            {{--</label>--}}

            {{--<p>--}}
            {{--Some information about this general settings option--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Allow mail redirect--}}
            {{--<input type="checkbox" class="pull-right" checked>--}}
            {{--</label>--}}

            {{--<p>--}}
            {{--Other sets of options are available--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Expose author name in posts--}}
            {{--<input type="checkbox" class="pull-right" checked>--}}
            {{--</label>--}}

            {{--<p>--}}
            {{--Allow the user to show his name in blog posts--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}

            {{--<h3 class="control-sidebar-heading">Chat Settings</h3>--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Show me as online--}}
            {{--<input type="checkbox" class="pull-right" checked>--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Turn off notifications--}}
            {{--<input type="checkbox" class="pull-right">--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}

            {{--<div class="form-group">--}}
            {{--<label class="control-sidebar-subheading">--}}
            {{--Delete chat history--}}
            {{--<a href="javascript:" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<!-- /.form-group -->--}}
            {{--</form>--}}
            {{--</div>--}}
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>



<!-- ./wrapper -->
@section('js_ref')
        <!-- jQuery 2.1.4 -->
<script src="{{asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/admin/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/admin/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/admin/dist/js/demo.js')}}"></script>

<script src="{{asset('/admin/plugins/ionslider/ion.rangeSlider.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('/admin/plugins/iCheck/icheck.min.js')}}"></script>
{{--flot charts--}}
{{--<script src="{{asset('/admin/plugins/flot/jquery.flot.min.js')}}"></script>--}}

{{-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized --}}
{{--<script src="{{asset('/admin/plugins/flot/jquery.flot.resize.min.js')}}"></script>--}}

{{-- FLOT PIE PLUGIN - also used to draw donut charts --}}
{{--<script src="{{asset('/admin//plugins/flot/jquery.flot.pie.min.js)}}"></script>--}}

{{--<script src="{{asset('/admin/plugins/flot/jquery.flot.categories.min.js')}}"></script>--}}

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Page Script -->



<script>
    //data Table load
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    //Update the current post
    function appendPost(){

        //CRF Protect
        $.ajaxSetup(
                {
                    headers: {
                        'X-CSRF-Token': $('input[name="_token"]').val()
                    }
                });

        $.ajax({
            method: "post",
            url: 'updatePost',
            data:{
                currentPost: $("#postMessage").val(),
                currentCat: $("#catId").val(),
            },

            success: function(data){
                $("#postMessage").val('');
                alert(data);
                $(".timeline").append("Hegjktkgjkgllo");
            }
        });
    }
</script>
@show
</body>
</html>
