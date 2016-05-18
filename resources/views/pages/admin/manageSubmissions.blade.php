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
                <h4 class="modal-title">{{$value->category}}</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive pad" src="{{asset('Image/'.$value->Image)}}" alt="Photo">
                <p>{{$value->post}}</p>
            </div>
            <div class="modal-footer">
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$value->date}} </i></small></p>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted by {{$value->name}} </i></small></p>
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>

    <br>
@endforeach




@stop

@section('js_ref')
    @parent

@stop