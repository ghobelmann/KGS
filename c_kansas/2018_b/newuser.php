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
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");

//INITIAL PAGE SETTINGS-----------
?>

<div id="wrapper">
<h1>Redmen Golf </h1>
<div id="nav">
	<?php include("menubar.php");?>
   <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?><br>
  <a href="admin_page.php">Admin Page</a><br>
  
  </p>
</div>
  <div id="content">


<h2>Welcome to Smith Center Redmen Golf WebSite </h2>
     <p><img src="../images/SCHSLogos/fullbody.png" height="80" width="40" alt="frontpage">
	 <br>
<p>
  <div align="center"><strong>Please Fill in Each Field to be Added as a Member. </strong></div>
  <form action="connectuser.php" method="post">
    <p>First Name:
        <input type="varchar" name="first_name" />
      Last Name:
		<input type="varchar" name="last_name" size="20"/>
</p>
    <p>User Name:
      <input type="varchar" name="username" />
Password:
<input type="varchar" name="password" size="20"/><br><br>
email:
<input type="varchar" name="email" size="30"/>
</p>
    <p>Please check which you would like to be. </p>
    <p>Member
      <input type="checkbox" name="mem" value="yes">
      Substitute
      <input type="checkbox" name="sub" value="yes">
</p>
    <p>
      <input name="" type="submit" value="Enter Player" />
</p>
  </form>	

</p>

     <div id="footer">
<p> Copyright &copy 2012 MCL <br>
</p>
</div>
</div> 
</div>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


</body>
</html>



</body>
</html>