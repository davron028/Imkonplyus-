<?php

include "connection.php";
 
 
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$region = mysqli_real_escape_string($conn, $_POST['region']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);


 
// attempt insert query execution
$sql = "INSERT INTO registration (fullname, email, password, region, gender) VALUES ('".$_POST["fullname"]."','".$_POST["email"]."', '".$_POST["password"]."', '".$_POST["region"]."', '".$_POST["gender"]."')";


if(mysqli_query($conn, $sql)){
  include "main.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>