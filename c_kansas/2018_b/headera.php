




 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.kansasgolfscores.com">KansasGolfScores.com</a>
	    <?php echo $user; ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Virtual Tournament <span class="caret"></span></a>
          <ul class="dropdown-menu">
    
			       <li><a href="virtual.php">Run a Virtual Tournament</a></li>
 
          </ul>
		  
		  
                              		  
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tournaments.php">Tournaments</a></li>
          </ul>
	</li>

      
      
       
          </ul>
		</li>
          </ul>
		</li>
	</li>
     
	
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-system/index.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  

</body>
</html>