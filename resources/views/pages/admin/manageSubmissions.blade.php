@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop

@section('content')
    <form method="POST" action="{{url('/sortSubmissions')}}" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="Manufacturer" > Show by </label>

        <select id="Make" name="Make" >
            <option value="select your option">select your option</option>
            <option value="vote">Highest Liked</option>
            <option value="most disliked">most disliked</option>
        </select>

        <input type="submit" name="search" value="Search" class="btn btn-sm btn-info btn-flat "/>
    </form>

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
                <input type="hidden" id="dis" name="dis" value="{{$value->id}}"/>
                <button type="button" id="btn" name="btn" class="btn btn-sm btn-info btn-flat pull-left">Delete this post</button>
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
        $(document).ready(function(){
            $('#btn').click(function(){
                var next=$(this).siblings('#dis').val();
                var p = $(this).parent().parent();
                $.ajax({
                    method: "GET",
                    url: "/deletePost",
                    data : { pid : next },
                    success: function (data) {
                        p.hide();
                        alert(data);
                        //window.location.href = "{{action('WelcomeController@resetPassword')}}"
                    },
                    error: function (data){
                        alert(data);
                    }
                })
            })
        });
    </script>
@stop