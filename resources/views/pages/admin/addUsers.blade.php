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
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        <div class="box-body">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" id="name" placeholder="Enter Name" type="text">
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
                <input class="form-control" id="email" placeholder="Enter Email" type="email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input class="form-control" id="password" placeholder="Password" type="password">
            </div>

            <div class="form-group">
                <label>Re-type Passward</label>
                <input class="form-control" id="password" placeholder="Retype Password" type="password">
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
    <!-- /.box-header -->
    <div class="box-body">
        <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table aria-describedby="example1_info" role="grid" id="example1"
                           class="table table-bordered table-striped dataTable">
                        <thead>
                        <tr role="row">
                            <th aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending"
                                style="width: 164px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0"
                                class="sorting_asc">Rendering engine
                            </th>
                            <th aria-label="Browser: activate to sort column ascending" style="width: 202px;"
                                colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Browser
                            </th>
                            <th aria-label="Platform(s): activate to sort column ascending" style="width: 178px;"
                                colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">
                                Platform(s)
                            </th>
                            <th aria-label="Engine version: activate to sort column ascending" style="width: 139px;"
                                colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Engine
                                version
                            </th>
                            <th aria-label="CSS grade: activate to sort column ascending" style="width: 98px;"
                                colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">CSS grade
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td>1.9</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even" role="row">
                            <td class="sorting_1">Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td>1</td>
                            <td>A</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="1" rowspan="1">Rendering engine</th>
                            <th colspan="1" rowspan="1">Browser</th>
                            <th colspan="1" rowspan="1">Platform(s)</th>
                            <th colspan="1" rowspan="1">Engine version</th>
                            <th colspan="1" rowspan="1">CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>


@stop

@section('js_ref')
    @parent

@stop