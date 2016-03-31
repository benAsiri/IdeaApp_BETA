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