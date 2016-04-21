@extends('pages.adminMasterPage')
{{--parent inherits from --}}
@section('css_ref')
    @parent


@stop

@section('content')
        <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="{{asset('/admin/bootstrap/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/admin/dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('/admin/dist/css/skins/_all-skins.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('/admin/plugins/iCheck/flat/blue.css')}}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
{{--new content ares 2--}}
    <link href="{{ asset('css/FrontEnd_css/wall.css') }}" rel="stylesheet" type="text/css" >


    <div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-9">
                        <label>Select Your Category</label>
                        <select id="catId" aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                            <option selected="selected">Administrative</option>
                            <option selected="selected">Payments Finance</option>
                            <option selected="selected">SIS</option>
                            <option selected="selected">Academic Division</option>
                        </select>
                        <div>&nbsp;</div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <textarea id="postId" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                                {{--<input id="exampleInputFile" type="file">--}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" onclick="appendPost()" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Send</button>
                            </div>
                        </div><!-- /.box-footer -->
                    </div><!-- /. box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->




    <div class="row">
        <div class="col-md-9">
            <div>

                <ul class="timeline">
                    @foreach($data as $d)

                        <?php
                        $t=$d->id;
                        $t = $t%2;
                        ?>
                        @if($t == 0)
                            <li>
                                <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{$d->category}}</h4>
                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$d->date}} </i></small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$d->post}}
                                        </p>
                                        <div>&nbsp;</div>
                                        <div>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                            <span class="pull-right text-muted">127 likes - 3 comments</span>
                                        </div>
                                        <div>&nbsp;</div>
                                        <form>
                                            <div class="img-push">
                                                <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if($t == 1)
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{$d->category}}</h4>
                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"> Posted on {{$d->date}} </i></small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$d->post}}</p>
                                        <div>&nbsp;</div>
                                        <div>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                            <span class="pull-right text-muted">127 likes - 3 comments</span>
                                        </div>
                                        <div>&nbsp;</div>
                                        <form>
                                            <div class="img-push">
                                                <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach

                </ul>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div><!-- /.row -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/admin/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/admin/dist/js/demo.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/admin/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Page Script -->
    <script>
//        $(function () {
//            //Add text editor
//            $("#compose-textarea").wysihtml5();
//        });




        //Update the current post
        function appendPost(){
//            console.log($("#postId").val());


            //CRF Protect
            $.ajaxSetup(
                    {
                        headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }
                    });


            $.ajax({
                method: "post",
                url: 'updatePost',
                data:{
                    currentPost: $("#postId").val(),
                },

                success: function(data){
                    $("#postId").val('');
                   alert(data);
                   $(".timeline").append("Hello");
                }
            });
        }
    </script>





@stop



@section('js_ref')
    @parent

@stop