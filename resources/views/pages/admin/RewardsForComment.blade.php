@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop

@section('content')

    @foreach($comments as $c)
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times-circle" aria-hidden="true"></i>
                    </button>

                </div>
                <div class="modal-body">
                    <p><small class="text-muted"><i class="glyphicon glyphicon"> Sumbmission </i></small></p>
                    <p>{{$c->post}}</p>
                    <p><small class="text-muted"><i class="glyphicon glyphicon"> Comments for submission </i></small></p>
                    <h4>{{$c->comment}}</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon"> No of likes for comment :{{$c->no_of_votes}} </i></small></p>

                </div>
                <div class="modal-footer">

                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted by {{$c->name}} </i></small></p>

                    <input type="hidden" id="comment_desc" value="{{$c->comment}}" name="">
                    <input type="hidden" id="user_id" value="{{$c->uid}}" name="">
                    <button class="btn btn-warning btn-flat comreward" id="RewardButton">Reward</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>

        <br>
    @endforeach




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