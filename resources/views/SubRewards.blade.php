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
                    @foreach($submissions as $s)

                        @if($s->id%2 == 0)
                            <li>
                                <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel" data-postid="{{ $s->id }}">

                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ $s->name }}</h3>
                                        <h4 class="timeline-title">{{$s->post}}</h4>
                                        <p>{{$s->no_of_votes}}</p>

                                    </div>
                                    <div class="timeline-body">


                                        <form>
                                            <div class="img-push">
                                                <input type="hidden" id="post_desc" value="{{$s->post}}" name="">
                                                <input type="hidden" id="user_id" value="{{$s->user_id}}" name="">
                                                <button class="btn btn-block btn-danger btn-sm reward" id="RewardButton">Reward</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>


                        @else
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>


                                <div class="timeline-panel" data-postid="{{ $s->id }}">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{$s->name}}</h3>
                                        <h4 class="timeline-title">{{$s->post}}</h4>
                                        <p>{{$s->no_of_votes}}</p>


                                        <form method="post">
                                            <div class="img-push">
                                                <input type="hidden" id="post_desc" value="{{$s->post}}" name="">
                                                <input type="hidden" id="user_id" value="{{$s->user_id}}" name="">
                                                <button class="btn btn-block btn-danger btn-sm reward" id="RewardButton">Reward</button>

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
        $('.reward').click(function () {
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
                url: '/givereward',
                type: 'post',
                data: {
                    post_desc: $(this).siblings('#post_desc').val(),
                    user_id: $(this).siblings('#user_id').val()
                    // like_count: $(this).siblings('#no_of_likes').val()


                },

                success: function (data) {

                    //temp.siblings('span').text(data);
                    //temp.attr("disabled", true);
                    // temp.siblings('')

                    alert('User Rewarded for Submission..... :)')

                },
                error: function (data) {

                },
            });


        });

    </script>

    @stop