@extends('pages.adminMasterPage')
@section('css_ref')
    @parent
@stop


@section('content')
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css">
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
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css">


    <div class="row">
        <div class="col-md-12">

            <div>
                <ul class="timeline">
                    @foreach($comments as $c)

                        @if($c->id%2 == 0)
                            <li>
                                <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel" data-postid="{{ $c->id }}">
                                    <div class="timeline-heading">

                                        <h3 class="timeline-title">{{$c->name}}</h3>

                                        <h5 class="timeline-title">{{$c->post}}</h5>

                                        <div><h4 class="timeline-title">{{$c->comment}}</h4></div>

                                        <div><h3 class="timeline-title">{{$c->no_of_votes}}</h3></div>

                                    </div>
                                    <div class="timeline-body">


                                        <form>
                                            <div class="img-push">
                                                <input type="hidden" id="comment_desc" value="{{$c->comment}}" name="">
                                                <input type="hidden" id="user_id" value="{{$c->uid}}" name="">
                                                <button class="btn btn-block btn-danger btn-sm comreward" id="RewardButton">Reward</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>



                        @else
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel" data-postid="{{ $c->id }}">
                                    <div class="timeline-heading">

                                        <h3 class="timeline-title">{{$c->name}}</h3>

                                        <h5 class="timeline-title">{{$c->post}}</h5>

                                        <div><h4 class="timeline-title">{{$c->comment}}</h4></div>

                                        <div><h3 class="timeline-title">{{$c->no_of_votes}}</h3></div>


                                        <form>
                                            <div class="img-push">
                                                <input type="hidden" id="comment_desc" value="{{$c->comment}}" name="">
                                                <input type="hidden" id="user_id" value="{{$c->uid}}" name="">

                                                <button class="btn btn-block btn-danger btn-sm comreward" id="RewardButton">Reward</button>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </li>
                        @endif


                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop


@section('js_ref')
    @parent

    <script>
        $('.comreward').click(function () {
            var temp = $(this);
//            console.log($(this).attr("data-temp"));
            console.log();
            $.ajaxSetup(
                    {
                        headers: {
                            'X-CSRF-Token': "{!! csrf_token() !!}"
                        }
                    });

            $.ajax({
                url: '/givecomreward',
                type: 'post',
                data: {
                    comment_desc: $(this).siblings('#comment_desc').val(),
                    user_id: $(this).siblings('#user_id').val()
                    // like_count: $(this).siblings('#no_of_likes').val()


                },

                success: function (data) {

                    //temp.siblings('span').text(data);
                    //temp.attr("disabled", true);
                    // temp.siblings('')

                    alert('User Rewarded for comment..... :)')

                },
                error: function (data) {

                },
            });


        });

    </script>

@stop