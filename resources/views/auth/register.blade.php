<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="{{asset('/admin/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('/admin/dist/css/AdminLTE.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('/admin/plugins/iCheck/square/blue.css')}}">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="hold-transition register-page">
<div class="register-box">
	<div class="register-logo">
		<a href="#l"><b>Admin</b>LTE</a>
	</div>

	<div class="register-box-body">
		<p class="login-box-msg">Register a new membership</p>
		<form action="/auth/register" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group{{ $errors->has('name' ) ? ' has-error' : ''}}">
				<input type="text" class="form-control" placeholder="Full name"  value="{{ old('name') }}">
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>

			<div class="form-group{{ $errors->has('email' ) ? ' has-error' : ''}}">
				<input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>

			<div class="form-group{{ $errors->has('dob' ) ? ' has-error' : ''}}">
				<input type="date" class="form-control" placeholder="Date of Birth : dd/mm/yyyy" name="dob" value="{{ old('dob') }}">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

			<div class="form-group{{ $errors->has('dept' ) ? ' has-error' : ''}}">
				<input type="text" class="form-control"  placeholder="Department" name="dept" value="{{ old('dept') }}">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

			<div class="form-group{{ $errors->has('password' ) ? ' has-error' : ''}}">
				<input type="password" class="form-control" name="password" placeholder="Password">
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>

			<div class="form-group{{ $errors->has('password_confirmation' ) ? ' has-error' : ''}}">
				<input type="password" class="form-control" name="password_confirmation" placeholder="Re-Type Password">
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>

			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> I agree to the <a href="#">terms</a>
						</label>
					</div>
				</div><!-- /.col -->

				<div class="col-xs-12">
					<br>
					<div class="container">
						<div class="row">
							@if (count($errors) > 0)
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
				</div><!-- /.col -->
			</div>
		</form>

		<a href="auth/login" class="text-center">I already have a membership</a>
	</div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('/admin/plugins/iCheck/icheck.min.js')}}"></script>
{{--date picker--}}
<script src="{{asset('/admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('/admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('/admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>


</body>
</html>

</body>
</html>

















	{{--<div class="container-fluid">--}}
		{{--<div class="row">--}}
			{{--<div class="col-md-8 col-md-offset-2">--}}
				{{--<div class="panel panel-default">--}}
					{{--<div class="panel-heading">Register</div>--}}
					{{--<div class="panel-body">--}}
						{{--@if (count($errors) > 0)--}}
							{{--<div class="alert alert-danger">--}}
								{{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
								{{--<ul>--}}
									{{--@foreach ($errors->all() as $error)--}}
										{{--<li>{{ $error }}</li>--}}
									{{--@endforeach--}}
								{{--</ul>--}}
							{{--</div>--}}
						{{--@endif--}}

						{{--<form class="form-horizontal" role="form" method="POST" action="/auth/register">--}}
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

							{{--<div class="form-group{{ $errors->has('name' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">Name</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group{{ $errors->has('email' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">E-Mail Address</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group{{ $errors->has('dob' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">Date of Birth</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="email" class="form-control" name="dob" value="{{ old('dob') }}">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group{{ $errors->has('dept' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">Faculty</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="email" class="form-control" name="dept" value="{{ old('dept') }}">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group{{ $errors->has('password' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">Password</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="password" class="form-control" name="password">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group{{ $errors->has('password_confirmation' ) ? ' has-error' : ''}}">--}}
								{{--<label class="col-md-4 control-label">Confirm Password</label>--}}
								{{--<div class="col-md-6">--}}
									{{--<input type="password" class="form-control" name="password_confirmation">--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="form-group">--}}
								{{--<div class="col-md-6 col-md-offset-4">--}}
									{{--<button type="submit" class="btn btn-primary">--}}
										{{--Register--}}
									{{--</button>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</form>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--@endsection--}}