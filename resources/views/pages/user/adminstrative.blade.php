@extends('pages.adminMasterPage')
@section('css_ref')
    @parent
@stop



@section('content')
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >
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

    <div class="row">
        <div class="col-md-9">

            <div>
                <ul class="timeline">
                    @foreach($data as $d)

                       <?php
                            $t=$d->id;
                        $t = $t%2;
                            ?>
                        @if($t == 0)
                    <li>
                        <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{$d->category}}</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$d->date}} </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{$d->post}}
                                </p>
                                <div>&nbsp;</div>
                                <div>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <span class="pull-right text-muted">{{$d->no_of_votes}} likes - 3 comments</span>
                                </div>
                                <div>&nbsp;</div>
                                <form>
                                    <div class="img-push">
                                        <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                           @endif
                           @if($t == 1)
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{$d->category}}</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$d->date}} </i></small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{$d->post}}</p>
                                <div>&nbsp;</div>
                                <div>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <span class="pull-right text-muted">{{$d->no_of_votes}} likes - 3 comments</span>
                                </div>
                                <div>&nbsp;</div>
                                <form>
                                    <div class="img-push">
                                        <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </li>
                           @endif
                    @endforeach

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

    {{--all javascripts comes under master page comes here --}}

@stop