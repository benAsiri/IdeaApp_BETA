@extends('pages.adminMasterPage')
@section('css_ref')
    {{--Master page eke tiyana css ref okkoma methanata enawa--}}

    {{--comment short cut ( ctrl + /)--}}
    @parent
@stop
{{--meh section eke end eka --}}

{{--@section('content_header')--}}
    <h1>MY PROFILE</h1>
@stop


@section('content')

    {{--new content ares 2--}}
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{('/admin/dist/img/user2-160x160.jpg')}}"
                         alt="User profile picture">

                    <h3 class="profile-username text-center">{{$user->fname." ".$user->lname }}</h3>

                    <p class="text-muted text-center">Software Engineer</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>


                    {{--
                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>


                                        <p>
                                            <span class="label label-danger">UI Design</span>
                                            <span class="label label-success">Coding</span>
                                            <span class="label label-info">Javascript</span>
                                            <span class="label label-warning">PHP</span>
                                            <span class="label label-primary">Node.js</span>
                                        </p>
                    --}}

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Administrative</h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/27 </i></small></p>
                                </div>
                                <div class="timeline-body">
                                    <p>Please manage to avoid the queue at the cashier.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Academic</h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on 2016/3/28 </i></small></p>
                                </div>
                                <div class="timeline-body">
                                    <p>PLease improve the internet connection at the 3rd floor reading room</p>

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
                    </ul>




                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->


        </div>
        <!-- /.col -->
    </div><!-- /.row -->


@stop



@section('js_ref')
    @parent

    {{--Master page eke tiyana java script ref okkoma methanata enawa--}}

@stop