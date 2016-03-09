<?php


session_start();
if(isset( $_SESSION['uname']))
{
    session_destroy();

header('location:login.php'); // Redirecting To Home Page

    
  }
else
{
    header('location:login.php');  
}


?>