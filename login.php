<?php
include "connection.php";

function Login()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['email']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
  $query = mysql_query("SELECT email,password FROM login where email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error());
  $row = mysql_fetch_array($query) or die(mysql_error());
  if(!empty($row['email']) AND !empty($row['password']))
  {
    $_SESSION['email'] = $row['password'];

      include 'empty.php';
  }
  else
  {
    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
  }
}
}
if(isset($_POST['submit']))
{
  Login();
}
?>