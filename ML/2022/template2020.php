

<!DOCTYPE html>

<html lang="en">

  <head>


	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">




<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}        
//include("header.php");
//include("menubar.php");


if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
  


    <title>KansasGolfScores.com</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="modern-business.css" rel="stylesheet">
    
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
    <style>
    body {background-color: black;}
  #grad {
  background: linear-gradient(white, gray);
}
</style>



<?php



include_once("databaseconnect.php");

?>   


</head>
<body>
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">

      <h1 class="my-4"><center>Smith Center Mens League 2020
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
      
                       




  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>





