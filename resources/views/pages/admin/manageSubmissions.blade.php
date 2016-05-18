@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop

@section('content')

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times-circle" aria-hidden="true"></i>
                </button>
                <h4 class="modal-title">Modal Info</h4>
            </div>
            <div class="modal-body">
                <p>One fine body</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>

    <br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times-circle" aria-hidden="true"></i>
                </button>
                <h4 class="modal-title">Modal Info</h4>
            </div>
            <div class="modal-body">
                <p>One fine body</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>



@stop

@section('js_ref')
    @parent

@stop