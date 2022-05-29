 <?php     

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
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/style_nopict.css">



</head>

<TITLE>Enter Roster</TITLE>
<meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>">




</BODY>
</HTML>

<?php 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  
$sql = "SELECT roster.player_1 FROM roster WHERE username = '$_POST[player_1]'";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player has Already been Entered in the Database.</h1>";
	}else{

$sql = "INSERT INTO roster (player_1, grade, tmid, username, password)
VALUES
('$_POST[player_1]', '$_POST[grade]', '$_POST[tmid]', '$_POST[player_1]', 'b8c1ae9d8de885822d9165006ca35270')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}   }
?>


