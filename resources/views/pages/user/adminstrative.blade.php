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
    {{--Rating CSS--}}
    <link href="{{ asset('/admin/plugins/starratings/css/star-rating.css') }}" rel="stylesheet" type="text/css">

    <div class="row">
        <div class="col-md-12">

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
                                <img class="img-responsive pad" src="{{asset('Image/'.$d->Image)}}" alt="Photo">
                                <p>{{$d->post}}</p>
                                <div>&nbsp;</div>
                                <div>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <span class="pull-right text-muted">{{$d->no_of_votes}} likes - 3 comments</span>
                                </div>
                                <div>&nbsp;</div>
                                <form>
                                    <div class="img-push">
                                        <button class="btn btn-block btn-info btn-sm">COMMENT ABOUT IT</button>
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
                                <img class="img-responsive pad" src="{{asset('Image/'.$d->Image)}}" alt="Photo">
                                <p>{{$d->post}}</p>
                                <div>&nbsp;</div>
                                <div>
                                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <span class="pull-right text-muted">{{$d->no_of_votes}} likes - 3 comments</span>
                                </div>
                                {{--<div>&nbsp;</div>--}}
                                <form>
                                    <div class="img-push">
                                        <button class="btn btn-block btn-danger btn-sm" id="commentButton">COMMENT ABOUT IT</button>
                                        <button class="btn btn-block btn-success btn-sm" id="viewButton">VIEW ALL COMMENTS</button
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


    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="comment-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Comment </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" name="comment-body" id="comment-body" rows="2"> </textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="view-comment-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">All comments for this post </h4>
                    <h5 class="modal-title" id="commentCount"> </h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <table class="table table-bordered" id="commentBody">

                            </table>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

@stop



@section('js_ref')
    @parent

    {{--all javascripts comes under master page comes here --}}
    <script src="{{asset('/admin/plugins/starratings/js/star-rating.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('#rateID').rating({
                min:1,
                max:5,
                size:'xs'
            });

            $('#rateID').on('rating.change', function(event, value, caption) {
                var p = $(this).parents('.timeline-panel');
                console.log(p.find('#post_id').val());

                $.ajaxSetup(
                        {
                            headers: {
                                'X-CSRF-Token': "{!!csrf_token()!!}"
                            }
                        });

                $.ajax({
                    url: '/rating',
                    type: 'post',
                    data: {
                        post_id: p.find('#post_id').val(),
                        newRating: value,
                    },

                    success: function (data) {
                        alert (data);
                    },
                    error: function (data) {

                    },
                });
//
            });

        });
    </script>
@stop