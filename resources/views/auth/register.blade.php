<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="">



					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FaithfulSteward | Registration Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ url('/') }}/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ url('/') }}/Admin/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ url('/') }}/Admin/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ url('/') }}/Admin/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ url('/') }}/Admin/plugins/iCheck/square/blue.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="{{url('/')}}/register">
				<b>Faithful</b>Steward</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Register a new membership</p>
			<form action="{{ route('register') }}" method="post">
				@include('errors') @csrf
				<div class="form-group has-feedback">
					<!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
					<input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}"
					 placeholder="Enter your First Name" required autofocus>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					@if ($errors->has('firstname'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('firstname') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group has-feedback">
					<!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
					<input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}"
					 placeholder="Enter your lastname" required autofocus>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					@if ($errors->has('lastname'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('lastname') }}</strong>
					</span>
					@endif
				</div>



				<div class="form-group has-feedback">
					<!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
					 required placeholder="Enter your Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif

				</div>

				<div class="form-group has-feedback">
					<!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
					 required placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif

				</div>

				<div class="form-group has-feedback">
					<!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>

				<div class="form-group row mb-0">
					<div class="col-xs-8">
                    <div class="checkbox icheck">
							<label>
								<input type="checkbox"> I agree to the
								<a href="#">terms</a>
							</label>
						</div>
					
					</div>
                    <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
							{{ __('Register') }}
						</button>
                    </div>
				</div>
			</form>


			{{--
			<div class="social-auth-links text-center">--}} {{--
				<p>- OR -</p>--}} {{--
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
					<i class="fa fa-facebook"></i> Sign up using--}} {{--Facebook
				</a>--}} {{--
				<a href="#" class="btn btn-block btn-social btn-google btn-flat">
					<i class="fa fa-google-plus"></i> Sign up using--}} {{--Google+
				</a>--}} {{--
			</div>--}}

			<a href="login.html" class="text-center">I already have a membership</a>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery 3 -->
	<script src="{{ url('/') }}/Admin/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ url('/') }}/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="{{ url('/') }}/Admin/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>

</html>