@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop

@section('content')

    @foreach($data as $value)
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times-circle" aria-hidden="true"></i>
                    </button>
                    <h3 class="timeline-title">{{$value->category}}</h3>
                </div>
                <div class="modal-body">
                    <img class="img-responsive pad" src="{{asset('Image/'.$value->Image)}}" alt="Photo">
                    <p>{{$value->post}}</p>
                </div>
                <div class="modal-footer">
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$value->date}} </i></small></p>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted by {{$value->name}} </i></small></p>

                    <input type="hidden" id="post_desc" value="{{$value->post}}" name="">
                    <input type="hidden" id="user_id" value="{{$value->user_id}}" name="">
                    <button class="btn btn-warning btn-flat reward" id="RewardButton">Reward</button>
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