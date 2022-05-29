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
 
 
 
<div id="wrapper">
<h1>Redmen Golf </h1>
<div id="nav">
	<?php include("menubar.php");?>
   <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?><br>
  <a href="admin_page.php">Admin Page</a><br>
  
  </p>
</div>
  <div id="content">


<h2>Welcome to Smith Center Redmen Golf WebSite 2014</h2>
	 <br>
<p>


<form action="connectcolumns.php" method="post">

		
	Columns
		<input type="int" name="numb">
   
      <input name="" type="submit" value="Enter Scores" />
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