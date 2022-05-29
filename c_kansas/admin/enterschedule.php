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
     
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

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
 ?> 
 
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $trny;
      
 ?> 

<script>
$(function() {
$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
</head>

	<?php 
  $query = "SELECT `tmid` FROM `users` WHERE id  = '$userid'";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
  $team = $row['tmid'];
 
  echo "<h3>You are logged in as $userid from $team High School</h3>";
  ?>
  
  
  

<?php

$sql="SELECT * FROM team ORDER by school asc";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>

<script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>


<div id="Layer1" style="position:absolute; width:551px; height:453px; z-index:1; left: 188px; top: 130px;">

         <h2>This is for the schedule on the front page, not for you setting up to run a tournament</h2>
       <h2>In order to not have duplicate tournaments in the database, just enter the tournament you host.</h2>

       

  
<form id="myForm" action="connectschedule.php" method="post">
      <td valign="top">Your School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT> <br>
      
          		Course:
        <input type="varchar" name="tournament" size="20" value=" " required/>    <br>
        
        
    		Date of Tournament 
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/>


             <div>
  <input name="" type="submit" value="Enter Tournament" />
  </div>
  
  
</form>
  
<span id="result"></span>


  
<?php include("footer.php"); ?>
</div>
</body>
</html>
                                                                                