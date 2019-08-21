{{-- <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		{{ csrf_field() }}

		<fieldset>
			<legend>login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" value="{{$name}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="Login"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<div>{{session('message')}}</div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="template/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/css/util.css">
	<link rel="stylesheet" type="text/css" href="template/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-33">
						User Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="uname" placeholder="Name" value="{{ $name }}">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="" value="Login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	<!--===============================================================================================-->
	<script src="template/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="template/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="template/vendor/bootstrap/js/popper.js"></script>
	<script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="template/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="template/vendor/daterangepicker/moment.min.js"></script>
	<script src="template/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="template/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="template/js/main.js"></script>
	<div>{{session('message')}}</div>
</body>
</html>