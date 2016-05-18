@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent
@stop

@section('content')

<h1>Dashboard<small> User posts</small></h1>

<div class="info-box">
    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
    <div class="info-box-content">
        <span class="info-box-text">Uploads</span>
        <span class="info-box-number">13,648</span>
    </div><!-- /.info-box-content -->
</div>

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

<div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Total Users</span>
            <span class="info-box-number">3,139</span>
        </div><!-- /.info-box-content -->
</div><!-- /.info-box -->

<div class="box box-primary">
    <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">Current Statistical Analysis</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas height="300" width="467" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 467px; height: 300px;" class="flot-base"></canvas><canvas height="300" width="467" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 467px; height: 300px;" class="flot-overlay"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70.5px; left: 292px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 210.5px; left: 270px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 129.5px; left: 111px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
    </div><!-- /.box-body-->
</div>

@stop

@section('js_ref')
    @parent

@stop