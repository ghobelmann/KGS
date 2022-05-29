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
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");




 ?> 

<div id="wrapper">

  <div id="content">    
  
  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?>  
<?php
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
?>  <center>
<div align="center"><span class="style1">WARNING, THIS WILL DELETE PLAYER FROM YOUR TOURNAMENT!!!</span>
</div>
<p class="style1">Name:</p>
<form action="deletevirtual.php" method="POST">
Submit id to Delete: 
  <input type="text" name="id" value="<?php echo $id; ?>" size="30">
Type YES to confirm: 
  <input type="text" name="confirm" value="" size="6">
<input type="submit" value="send">
</form>
</center>
</body>
</html>
