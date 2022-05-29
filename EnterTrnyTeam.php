

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

 if(!empty($_GET['id']))
{
$id = $_GET['id'];
} 
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="./vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
<center>       
<a href="index.php">  Home</a></h4>
</center>       
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
      <hr>
  <button class="block">  
<center>       
<a href="roster6A.php">Add Players for Other Teams</a></h4>
</center>  </h4>
       <h4 class="card-header bg-dark">  
<center> 
<a href = "EnterTrnyTeam.php?id=<?php echo $id; ?>">Add Team to Your Tournament</a></h4>


 </head> 

<body>	
 
 
 
         <?php
         
         

 
  $sql = "SELECT team.tmid, users.tmid, users.first_name,
  team.state,  
  users.last_name, image, school 
  FROM team INNER JOIN users on team.tmid = users.tmid 
  WHERE team.tmid = $tmid LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $school = $row['school'];
        $tmid = $row['tmid'];
        $first = $row['first_name'];
        $last = $row['last_name'];
        $state = $row['state'];
      // echo $image;
    }
} else {
    echo "no players";
}
 //  echo $school; echo $tmid; echo $first; echo $last;  echo $state;




if(!empty($_GET['id']))
{
$id = $_GET['id'];
}



      
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
   //   echo $userid;
      
 ?>


<p>

<?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);
} else {
die('Error: '.mysqli_error($conn));
}

$sql="SELECT * FROM team WHERE state = '$state' ORDER  by school ASC";
$result=mysqli_query($conn,$sql);
$teams="";
while ($row=mysqli_fetch_array($result)) {
$team=$row["school"];
$tmid=$row["tmid"];
$teams.="<OPTION VALUE=\"$tmid\">".$team;
}
?>


  <div align="left"><strong><h1>If a team is not in drop down list enter them here. </h1></strong></div>

<form action="connecttm.php" method="post">
  <h4>School : 
          <select name="tmid" required />
          <OPTION VALUE=><?php echo $teams ?></OPTION>
          </SELECT>    </h4>

<h4>Tournament:
        <input type="varchar" name="tid" size="40" value="<?php echo $data['tournament']; ?>"/>  </h4>
<h4>Tournament ID:
		<input type="int" name="tid" size="1" value="<?php echo $data['id']; ?>"/>   </h4>
<input name="" type="submit" value="Enter Team" />
</p>
  </form>

</body>

</html>