
<?php


 if(isset($_REQUEST['login']))
{ 
    
    
    include "connect.php";
    $email=$_POST['email'];
    $password=$_POST['pwd'];
  
     $key=md5('india');
     $salt=md5('india');
  
    function decrypt($string,$key)
    {
        $string = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$key,base64_decode($string),MCRYPT_MODE_ECB));
        return $string;
    }
    
     function encrypt($string,$key)
    {
        $string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,$key,$string,MCRYPT_MODE_ECB)));
        return $string;
    }
    
      function hashword($string,$salt)
    {
        $string = crypt($string, '$1$' . $salt . '$');
        return $string;
    }
    
    
  
 $email=encrypt($email,$key);
$password = hashword($password,$salt);
        
        
        
 
$qry="select name from new_user where email='$email' and password='$password'";
$rs=@mysql_query($qry) or die(mysql_error());

 if($row=mysql_fetch_array($rs))  
 {           
  session_start();
 // $x=decrypt($row[0],$key);
  $_SESSION['uname']=decrypt($row[0],$key);
  //$row[0];
// echo $row[0];
  header("location:index.php");  
   
  } 
  
  else
  {
     
    echo("<script>alert('Invalid Username Or Password');</script>");
   
    return false;
     header("location:login.php"); 
  } 
    
    
}

  ?>
  







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
	  	
		      <form class="form-login" method="post" >
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="email" name="email"  class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password"  name="pwd" class="form-control" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                            
                             <a  href="home.html"> HOME</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit" name="login"> SIGN IN</button>
		            <hr>
		             </form>	 
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="new_account.php"> 
		                    Create an account
		                </a>
                       
		            </div>
		
		        </div>
		       
		          <!-- Modal for forgot password -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
                  
                  
                  
                  

                  
		
		 
	  	
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
