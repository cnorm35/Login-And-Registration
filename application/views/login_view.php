<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/login.css">
</head>
<body>
	<div class='container'>
		<?php 
			if($this->session->flashdata('errors'))
			{
				 echo ($this->session->flashdata('errors'));
			}
			if($this->session->flashdata('success'));
			{
				echo '<p class="text-success">' . $this->session->flashdata('success') . '</p>';
			}
		?>
		<form action='/users/sign_in' method='post' class='form-signin'>
			<h3 class='form-signin-heading'>Login</h3>
			Email:<input type='text' class='form-control' name='email'/>
			Password:<input type='password' class='form-control' name='password'>
			<input type='submit' class='btn-btn-lg btn-info btn-block' value='Login'>
		</form>

		<form action='/users/process' method='post' class='form-signin'>
			<h3 class='form-signin-heading'>Or Register</h3>
			First Name: <input type='text' class='form-control' name='first_name'/>
			Last Name: <input type='text' class='form-control' name='last_name'/>
			Email Address: <input type='text' class='form-control' name='email'/>
			Password: <input type='password' class='form-control' name='password'/>
			Confirm Password: <input type='password' class='form-control' name='confirm_password'/>
			<input type='submit' class='btn-btn-lg btn-info btn-block' value='Register'>
		</form>
	</div>
</body>
</html>