<?php

include "connection.php";
 
 
$name = mysqli_real_escape_string($conn, $_POST['name1']);
$email = mysqli_real_escape_string($conn, $_POST['email1']);
$comment = mysqli_real_escape_string($conn, $_POST['comments']);


 
// attempt insert query execution
$sql = "INSERT INTO comment (name, email, comment) VALUES ('".$_POST["name1"]."','".$_POST["email1"]."', '".$_POST["comments"]."')";


if(isset($_POST["otpravit"])){
	$result = mysqli_query($conn, $sql);
    header('Location: index.php#contact');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>