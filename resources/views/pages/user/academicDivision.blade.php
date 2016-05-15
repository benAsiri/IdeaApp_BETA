@extends('pages.adminMasterPage')
@section('css_ref')
    @parent
@stop
@stop


@section('content')

    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css">

    <div class="row">
        <div class="col-md-9">

            <div>
                <ul class="timeline">
                    @foreach($data as $d)

                        <?php
                        $t = $d->id;
                        $t = $t % 2;
                        ?>
                        @if($t == 0)
                            <li>
                                <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{$d->category}}</h4>

                                        <p>
                                            <small class="text-muted"><i class="glyphicon glyphicon-time"> Posted
                                                    on {{$d->date}} </i></small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <img class="img-responsive pad" src="{{asset('Image/'.$d->Image)}}" alt="Photo">
                                        <p>{{$d->post}}
                                        </p>

                                        <div>&nbsp;</div>
                                        <div>
                                            <input type="hidden" id="post_id" value="{{$d->id}}" name="">
                                            <button class=" btn btn-default btn-xs like" data-temp="button1"><i
                                                        class="fa fa-thumbs-o-up"></i> Like
                                            </button>
                                            <button class="btn btn-default btn-xs dislike"><i
                                                        class="fa fa-thumbs-o-down"></i> Dislike
                                            </button>
                                                <span id="no_of_likes" data-temp="spam1" class="pull-right text-muted">{{$d->no_of_votes}}
                                                likes -  {{$d->no_of_dislikes}}  dislikes</span>
                                        </div>
                                        <div>&nbsp;</div>
                                        <form>
                                            <div class="img-push">
                                                <input class="form-control input-sm"
                                                       placeholder="Press enter to post comment" type="text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if($t == 1)
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{$d->category}}</h4>

                                        <p>
                                            <small class="text-muted"><i class="glyphicon glyphicon-time"> Posted
                                                    on {{$d->date}} </i></small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <img class="img-responsive pad" src="{{asset('Image/'.$d->Image)}}" alt="Photo">
                                        <p>{{$d->post}}</p>

                                        <div>&nbsp;</div>
                                        <div>
                                            <input type="hidden" id="post_id" value="{{$d->id}}" name="">

                                            <button class="btn btn-default btn-xs like"><i class="fa fa-thumbs-o-up"></i>
                                                Like
                                            </button>
                                            <button class="btn btn-default btn-xs dislike" data-temp="button2"><i
                                                        class="fa fa-thumbs-o-down"></i>Dislike
                                            </button>
                                            <span class="pull-right text-muted">{{$d->no_of_votes}}
                                                likes - {{$d->no_of_dislikes}}  dislikes</span>
                                        </div>
                                        <div>&nbsp;</div>
                                        <form>
                                            <div class="img-push">
                                                <input class="form-control input-sm"
                                                       placeholder="Press enter to post comment" type="text">
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

    {{--<script>--}}
    {{--var urlLike='{{route('Like')}}';--}}
    {{--</script>--}}

@stop



@section('js_ref')
    @parent



    {{--all javascripts comes under master page comes here --}}
    <script>

        //        Following ajax part is written to increment the like

        $('.like').click(function () {
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
                url: '/likeIncrease',
                type: 'post',
                data: {
                    post_id: $(this).siblings('#post_id').val(),
                    user_id: "{{Auth::user()->id}}"
                  // like_count: $(this).siblings('#no_of_likes').val()


                },

                success: function (data) {

                    temp.siblings('span').text(data);
                    temp.attr("disabled", true);
                    // temp.siblings('')

                },
                error: function (data) {

                },
            });


        });



        //        This ajax part decrement the number of likes

        $('.dislike').click(function () {
            var temp = $(this);
//          console.log($(this).attr("data-temp"));
            console.log();
            $.ajaxSetup(
                    {
                        headers: {
                            'X-CSRF-Token': "{!! csrf_token() !!}"
                        }
                    });

            $.ajax({
                url: '/likeDecrease',
                type: 'post',
                data: {
                    post_id: $(this).siblings('#post_id').val(),
                    user_id: "{{Auth::user()->id}}",
                    //like_count: $(this).siblings('#no_of_likes').val()


                },

                success: function (data) {

                    temp.siblings('span').text(data);
                    temp.attr("disabled", true);
                    // temp.siblings('')

                },
                error: function (data) {

                },
            });


        });


    </script>

@stop