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
	<h3>Welcome <?php echo $this->session->userdata['first_name']; ?> <small><a href='/users/log_out'>Log Off</a></small></h3>
	<h4>User Information</h4>
	<p>First Name: <?php echo $this->session->userdata['first_name'] ?></p>
	<p>Last Name: <?php echo $this->session->userdata['last_name'] ?></p>
	<p>Email Address: <?php echo $this->session->userdata['user_email'] ?></p>

</body>
</html>