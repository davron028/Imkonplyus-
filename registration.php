<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="registration-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="insert.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "checkValidation.php"; ?>	

<div class="container orient">
			<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 ramka">
			<div id="qori">
            <form class="form-horizontal" action="insert.php" role="form" method="POST">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="fullname" placeholder="Full Name" class="form-control" name="fullname" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="region" class="col-sm-3 control-label">Region</label>
                    <div class="col-sm-9">
                      <select id="region" name="region" class="form-control">
                            <option>Tashkent</option>
                            <option>Bukhara</option>
                            <option>Samarkand</option>
                            <option>Navoi</option>
                            <option>Andijon</option>
                            <option>Fergana</option>
                            <option>Kashkadarya</option>
                            <option>Khoresm</option>
                            <option>Namangan</option>
                            <option>Jizzakh</option>
                            <option>Surkhandarya</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-9">
                               <select id="gender" name="gender" class="form-control">
		                            <option>Male</option>
		                            <option>Female</option>
							</select>  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-info color">Register</button>
                    </div>
                </div>
            </form>
            </div>
            </div> 
        </div> 
</body>
</html>