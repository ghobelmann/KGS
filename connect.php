 
 <html><head>
 
 <meta http-equiv="Refresh" content="2; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
 
 </head></html>
 
 
 
 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();

$page = $_GET["referrer"];
   echo $page;
//include_once("headerb.php");
include_once("databaseconnect.php");

switch ($page) {
    case "enterpayments":
       if(!empty($_POST['paid']))
{
$paid = $_POST['paid'];
}  
echo $paid;
  if(!empty($_POST['amount']))
{
$amount = $_POST['amount'];
} echo $amount;
  if(!empty($_POST['tmid']))
{
$tmid = $_POST['tmid'];
} echo $tmid;
  $sql= "UPDATE `team` SET `paid`= '$paid' ,`amount`= '$amount' WHERE `tmid` LIKE '$tmid'";
  if
 (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }  
       break;
       
   
    case "enterschedule":

    
      $sql="INSERT INTO schedule (tmid, tournament, date)
VALUES
('$_POST[tmid]','$_POST[tournament]','$_POST[date]')";    
if
 (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  } 
    
    
    
    
    
        break;
    case "enterplayer":
    
       $sql = "SELECT roster.player_1 FROM roster WHERE username = '$_POST[player_1]' AND tmid = '$_POST[tmid]' ";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player has Already been Entered in the Database.</h1>";
	}else{

$sql = "INSERT INTO roster (player_1, grade, tmid, username, password)
VALUES
('$_POST[player_1]', '$_POST[grade]', '$_POST[tmid]', '$_POST[player_1]', 'ddb4f7101fe9b068f6299fae6f3d8765')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error entering Player: " . $sql . "<br>" . $conn->error;
}}   }

        break;
        
        
        case "enterteam":
        
          $sql="INSERT INTO trnyteams (tmid, tid)
VALUES
('$_POST[tmid]', '$_POST[tid]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
        
        
        
        break;
        
        
    default:
        echo "Error connecting";
}
?>


 
 
 
 
 