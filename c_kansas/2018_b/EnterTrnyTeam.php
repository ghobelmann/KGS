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
 
   ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
       
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?>


<div id="wrapper">
<div id="content">
<p>

<?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);
} else {
die('Error: '.mysqli_error($conn));
}

$sql="SELECT * FROM team ORDER by school ASC";
$result=mysqli_query($conn,$sql);
$teams="";
while ($row=mysqli_fetch_array($result)) {
$team=$row["school"];
$tmid=$row["tmid"];
$teams.="<OPTION VALUE=\"$tmid\">".$team;
}
?>

  <hr>

  <div align="left"><strong><h2>If a team is not in drop down list enter them here. </h2></strong></div>

<form action="connecttm.php" method="post">
  School : 
          <select name="tmid" required />
          <OPTION VALUE=><?php echo $teams ?></OPTION>
          </SELECT>

Tournament:
        <input type="varchar" name="tid" size="40" value="<?php echo $data['tournament']; ?>"/>
Tournament ID:
		<input type="int" name="tid" size="1" value="<?php echo $data['id']; ?>"/>
<input name="" type="submit" value="Enter Team" />
</p>
  </form>
</div> 
</body>

</html>