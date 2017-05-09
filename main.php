<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="insert.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container orient" >
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6 ramka">
	<div id="qori">
	<form action="login.php" class="form-horizontal">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		</div>
		<div class="checkbox">
			<label><input type="checkbox" name="remember">Remember me</label>
		</div>
		<button type="submit" class="btn btn-default">Login</button>
		<a href="registration.php" class="btn btn-info color">Registration</a>
	</form></div></div>
	<div class="col-sm-3"></div>
</div>
</body>
</html>



