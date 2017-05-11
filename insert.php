<?php 
/**
* 
*/
class User
{
	
	function signUp($fullname,$email,$password,$region,$gender)
	{
	include "connection.php";
	
	// attempt insert query execution
	$sql = "INSERT INTO registration (fullname, email, password, region, gender) VALUES ('".$fullname."','".$email."', '".$password."', '".$region."', '".$gender."')";

	$result = mysqli_query($conn, $sql);
	
	mysqli_close($conn);	
	 return true;
	// close connection
	}
}


		
 ?>