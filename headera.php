




 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("dbconnectg.php");
//include_once("analyticstracking.php"); 

$sql = "SELECT id FROM `users` WHERE email = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: '.mysqli_error());
}


?>






       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
    //  echo $userid;
      
 ?> 

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.kansasgolfscores.com">KansasGolfScores.com</a>
	    <?php echo $user; ?>
    </div>
  
  	<a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="trnysetup.php">Setup New Tournament</a>
    <a class="navbar-brand" href="enterroster.php">Enter/Edit Roster</a>
    <a class="navbar-brand" href="editteam.php">Edit School Info</a>
    <a class="navbar-brand" href="editcoach.php">Edit Coach</a>
    <a class="navbar-brand" href="login-system/login.php"> Login</a>
    <a class="navbar-brand" href="login-system/logout.php">Log Out</a>
        <a class="navbar-brand"  href="Tournament Tips.pdf">Tournament Tips</a>
        <a class="navbar-brand"  href="Setup Tournament Instructions.pdf">Setting Up Tournament Instructions</a>
         <a class="navbar-brand" href="roster6A.php">Enter Roster for Other Schools</a>
   
          <!--   <li><a href="login-system/forgot.php">Forgot or Change Password</a></li>   -->
   </div> 
</nav>
</body>
</html>