<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">sign Up</h2>
		        <div class="login-wrap">
                    <font face='georgia' size='3'>NAME:</font>
		            <input type="text" class="form-control" placeholder="Enter Your Full Name" name="user_name" required="true" autofocus>
		            <br>
                    
                    <font face='georgia' size='3'>Email Id:</font>
                    <input type="email" name="email" placeholder="Email" autocomplete="off"  required="true" class="form-control placeholder-no-fix">
		            </br>
                    
                    <font face='georgia' size='3'>Contact:</font>
                     <input type="text" class="form-control"  required="true" placeholder="Enter Your Contact Number" name="contact_no" autofocus>
		            <br>
                      <font face='georgia' size='3'>Address:</font></br>
                     <textarea rows="4" name='address'  cols="20"></textarea>
		            <br>
                     
                      
                      <font face='georgia' size='3'>Choose A password:</font>
		            <input type="password" name="pwd" required="true" class="form-control" placeholder="pwd"></br>
                    
                    
                      <font face='georgia' size='3'>Renter the password:</font>
		            <input type="password"   name="cnf_pwd" required="true" class="form-control" placeholder="confirm password" ></br>
                    
                    
		          
		            <button class="btn btn-theme btn-block" href="index.html" name='sign_up' type="submit"></i> SIGN Up</button>
		            <hr>
                    
	
                    
                    
                    
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            
		
		        </div>
		
		         
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>


<?php

include "connect.php";

if(isset($_REQUEST['sign_up']))
{
    
    $name=$_POST['user_name'];
    $email=$_POST['email'];
    $contact=$_POST['contact_no'];
    $address=$_POST['address'];
    $password=$_POST['pwd'];
    $cnf_password=$_POST['cnf_pwd'];

    $key=md5('india');
    $salt=md5('india');
    
    function hashword($string,$salt)
    {
        $string = crypt($string, '$1$' . $salt . '$');
        return $string;
    }
    
    function encrypt($string,$key)
    {
        $string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,$key,$string,MCRYPT_MODE_ECB)));
        return $string;
    }
    
  
    if(strcmp($password,$cnf_password)==0)
    {
        
        $password = hashword($password,$salt);
        
    $qry= "insert into new_user values('".encrypt($name,$key)."','".encrypt($email,$key)."','".encrypt($contact,$key)."','".encrypt($address,$key)."','$password')";
   
    $result = @mysql_query($qry) or die(mysql_error());
 
   echo "<script>alert('Your Applicattion Form is submitted successfully');</script>";
   
 }
 
  else
 {

  echo "<script>alert('password doesnot match try again');</script>";
    
 }
 
 }

?>