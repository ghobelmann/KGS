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
 // $database = "golf_2017_g";
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
 ?> 
 
  <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid; 
      
 
 ?>     
  

  <body>

	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


<?php

$sql="SELECT * FROM tournament WHERE uid = '$userid'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $trny=$row["tournament"];
    $tid=$row["id"];
    $options.="<OPTION VALUE=\"$tid\">".$trny;

}


?>



    <form action="scorecards.php" method="GET">

  <td valign="top">Tournament
            <select name="id" required id="drop1" >
              <OPTIONVALUE=><?php echo $options ?></OPTION>
            </SELECT>

    <input type="submit" value="send">

	
	
</form>


</div>
</body>

	</div>

</html>