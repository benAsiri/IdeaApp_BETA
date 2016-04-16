@extends('pages.adminMasterPage')
@section('css_ref')
    @parent
@stop
@stop


@section('content')

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