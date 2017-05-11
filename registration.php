<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="registration-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
include ('insert.php');
$User= new User();

$fullnameErr = $emailErr = $genderErr = $passwordErr = "";
$fullname = $email = $gender = $password = $region ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $region=$_POST["region"];

  if (empty($_POST["fullname"])) {
    $fullnameErr = "Name is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $fullnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
   if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password contains one caputal letter and sign
    if (!preg_match("/([0-9])(?=^\w{8,20}$)(?=\w*[A-Z])^\w+$/",$password)) {
      $passwordErr = "At most one capital letter and digit allowed"; 
    }
  }

  if ($_POST["password"] == $_POST["confirm_password"]) {
   $password = "Correct";
  }
  else {
   $passwordErr = "You wrote two different password";
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if($password&&$fullname&&$email&&$gender)
  {

    $result=$User->signUp($fullname,$email,$password,$region,$gender);
    if($result){
        header("Location: main.php");
    } 
  }
  else{
    header("Location: registration.php");
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
<div class="container orient">
			<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 ramka">
			<div id="qori">
            <form class="form-horizontal" action="" role="form" method="POST">
                <h2>Регистрация</h2>
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
                               <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                              <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                              <span class="error">* <?php echo $genderErr;?></span>
                              <br><br>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="submit" class="btn btn-info color" value="Register">
                    </div>
                </div>
            </form>
            </div>
            </div> 
        </div> 
</body>
</html>