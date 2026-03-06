<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register | Aplikasi</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}">
</head>

<body class="login-page">

	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('landingpage') }}">
					<img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{ url('/login') }}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('assets/vendors/images/register-page-img.png') }}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register</h2>
						</div>

						<form action="{{ route('jemaah.register.submit') }}" method="POST">
							@csrf

							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
							</div>

							<div class="input-group custom">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" required>
							</div>

							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
							</div>

							<div class="input-group custom">
								<input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password" required>
							</div>

							<button type="submit" class="btn btn-primary btn-lg btn-block">
								Sign Up
							</button>

							<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>

							<div class="input-group mb-0">
								<a class="btn btn-outline-primary btn-lg btn-block" href="{{ url('/login') }}">
									Back To Login
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
</body>
</html>