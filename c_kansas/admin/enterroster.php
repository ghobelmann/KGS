 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	
 
 
 
 
 
 
 
 
 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php") 
 ?> 

<div id="wrapper">
<div id="content">



  
  Click on the Classicfication for your school.<br>



     
       
         
           
  

  <table style="width:70%">
  <tr>
    <td><h2><a href="roster6A.php">6A Schools</a> </h2>  </td>
    <td><h2><a href="roster5A.php">5A Schools</a> </h2></td> 
     </tr>
    <td><h2><a href="roster4A.php">4A Schools</a> </h2></td>
  <td><h2><a href="roster321A.php">321A Schools</a> </h2></td>

  </tr>
    <tr>
        <td><h2><a href="roster0A.php">Other Schools</a> </h2></td>
  </tr>
</table>


  
<?php include("footer.php"); ?>

</body>
</html>
                                                                                