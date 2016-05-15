@extends('pages.adminMasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop
@section('content')

@section('css_ref')
    @parent
@stop

@section('content_header')

@stop

@section('content')

    {{--new content ares 2--}}

    <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
        </div><!-- /.info-box-content -->
    </div>

    <br>

    <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Comments</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
        </div><!-- /.info-box-content -->
    </div>

    <br>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Change My Details</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> Retype Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Update Password</button>
            </div><!-- /.box-footer -->
        </form>
    </div>



@stop



@section('js_ref')
    @parent

    {{--Master page eke tiyana java script ref okkoma methanata enawa--}}

@stop









@stop

@section('js_ref')
    @parent
@stop