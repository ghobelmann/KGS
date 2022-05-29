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
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include_once("databaseconnect.php");
include_once("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>




<?php include("databaseconnect.php"); ?>




<?php
if(!empty($_POST['confirm']))
{
$confirm = $_POST['confirm'];
}

if ($confirm == "YES")
{
$sql="DELETE FROM scores WHERE id ='$_POST[id]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  echo $delete;
}
else
{
//echo $failure;
  }

}



?>
<?php include("footer.php"); ?>
</div>
</body>
</html>
