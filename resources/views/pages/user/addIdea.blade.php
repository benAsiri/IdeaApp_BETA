@extends('pages.adminMasterPage')

@section('content')

    {{--<table>--}}
    {{--@foreach($ideas as $idea)--}}
    {{--<tr>--}}
    {{--<td>{{$idea->category}}</td>--}}
    {{--<td>{{$idea->post}}</td>--}}
    {{--<td>--}}
        {{--<form method="post" action="{{ URL::to('/picture/{pic}') }}" enctype="multipart/form-data">--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
            {{--<input type="hidden" name="id" value="{{$idea->id }}"/>// get the Id for the Image--}}
            {{--<label for="pic">Choose an Image</label>--}}
            {{--<input id="file" name="file" type="file"/>--}}
            {{--<button type="submit" class="btn bg-success"><i class="fa fa-edit"></i> Edit your profile picture</button>--}}
         {{--</form>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table>--}}




    {{--<div class="box">--}}
        {{--<div class="box-header">--}}
            {{--<h3 class="box-title">Idea Grid</h3>--}}
        {{--</div>--}}
        {{--<!-- /.box-header -->--}}
        {{--<div class="box-body no-padding">--}}
            {{--<table class="table table-striped">--}}
                {{--@foreach($ideas as $idea)--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<th style="width: 180px">Category</th>--}}
                        {{--<th>Idea</th>--}}
                        {{--<th>Add Image</th>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>{{$idea->category}}</td>--}}
                        {{--<td>{{$idea->post}}</td>--}}
                        {{--<td>--}}
                            {{--<form method="post" action="{{ URL::to('/picture/{pic}') }}" enctype="multipart/form-data">--}}
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
                                {{--get the Id for the Image--}}
                                {{--<input type="hidden" name="id" value="{{$idea->id }}"/>--}}
                                {{--<label for="pic">Choose an Image</label>--}}
                                {{--<input id="file" name="file" type="file"/>--}}
                                {{--<button type="submit" class="btn btn-info"></i> Add A photo</button>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--@endforeach--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}



    {{--Inserting Ideas Frontend--}}

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-success">
                <div class="box-header with-3d-shadow">
                    <form method="post" action="{{ action('ImageController@picture') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        {{--<input type="hidden" name="id" value="{{$idea->id }}"/>--}}
                        <label>Select You Category</label>
                        <select name="cat" class="form-control">
                            <option>Administrative</option>
                            <option>Academic Division</option>
                            <option>Cleaning Services</option>
                            <option>Payments</option>
                            <option>Student Union</option>
                            <option>Finance</option>
                            <option>Labs</option>
                            <option>Student Clubs</option>
                        </select>
                        <br>
                        <label>Share Your Idea</label>
                        <textarea class="form-control" name="idea" rows="3" placeholder="Here.."></textarea>
                        <br>
                        <label for="pic">Choose an Image</label>
                        <input id="file" name="file" type="file"/>
                        <br>
                        <button type="submit" class="btn btn-info pull-left">Add My Idea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--{{var_dump($ideas)}}--}}

@stop

@section('js_ref')
    @parent
    {{--all javascripts comes under master page comes here --}}
@stop