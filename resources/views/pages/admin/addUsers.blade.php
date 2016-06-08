@extends('pages.admin.MasterPage')
{{--parent inherits from --}}
@section('css_ref')
@parent
@stop

@section('content')
        <!-- general form elements -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Add a New User</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Something went wrong: </strong>
    <br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
</div>
    @endif
    <form method="post" action="{{ url('ManageUsers/AddUsers') }}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        <div class="box-body">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" placeholder="Enter Name" type="text">
            </div>

            <div class="form-group">
                <label>Select User Type</label>
                <select name="cat" class="form-control">
                    <option>New User</option>
                    <option>New Admin</option>
                </select>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" placeholder="Enter Email" type="email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="password" placeholder="Password" type="password">
            </div>

            <div class="form-group">
                <label>Re-type Passward</label>
                <input class="form-control" id="re-password" placeholder="Retype Password" type="password">
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add New Users to the Database</button>
        </div>
    </form>
</div><!-- /.box -->

<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">User Table</h3>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">User Details</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>USER TYPE</th>
                <th>EMAIL</th>
                <th>CREATED DATE</th>
                </thead>
                {{--@foreach($user as $a )--}}
                    {{--<tr>--}}
                        {{--<td>{{$a['id']}}</td>--}}
                        {{--<td>{{$a['name']}}</td>--}}
                        {{--<td>{{$a['user_type']}}</td>--}}
                        {{--<td>{{$a['email']}}</td>--}}
                        {{--<td>{{$a['created_at']}}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>


@stop

@section('js_ref')
    @parent

@stop