 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style.css"> 
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
     // echo $userid;
      
 ?>     


<?php

if($_POST['submit'] == "Update Coach")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `users` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Coach Updated Successfully!</h2>';
  echo $_POST['id'];
	echo "<br>";
	echo $_POST['first_name'];
	echo "<br>";
	echo $_POST['last_name'];
	echo "<br>"; 
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['phone'];
	echo "<br>";
  echo $_POST['active'];
	echo "<br>";
}

	
	


//  

$sql="UPDATE `users` SET `first_name` = '".$_POST['first_name']."' WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }



$sql="UPDATE `users` SET `last_name` = '".$_POST['last_name']."' WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }


  $sql="UPDATE `users` SET `email` = '".$_POST['email']."' WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
  
  $sql="UPDATE `users` SET `phone` = '".$_POST['phone']."' WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
  
 
  
  
  $sql="UPDATE `users` SET `active` = '".$_POST['active']."' WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
  

  if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
//echo $id;


     



}


?>



  </div>
  
  
  <?php  
  
  
  $query = "SELECT * FROM `users` WHERE `id` LIKE '$userid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$id= $setup['id'];
$password = MD5($setup['password']);
$fname = $setup['first_name'];
$lname = $setup['last_name'];
$email = $setup['email'];
$phone = $setup['phone'];
$confirm = $setup['active'];
         }

?>
     <div class="container">
  <form action="
  
  <?php 
  
  
  if ($success){
    // we want to redirect via PHP so that users do not get that "resubmit message"
    header('location: '.$_SERVER['PHP_SELF'].'?status=sent');
} else {
    // we want the form to show up again? so, pass an error
    $status = 'error';
} ?>" method="post"> 

 <br>
 


<h3> <b>Update Coach Password or School </b> </h3>
  <table width="auto" border="1">
  <tr>  
    <p>ID: <input type="varchar" name="id" value="<?php echo $id;?>" readonly/><br>
       

        First Name: <input type="varchar" name="first_name" size="35" value='<?php echo $fname; ?>'/> <br>
Last Name:  <input type="varchar" name="last_name" size="15" value='<?php echo $lname; ?>'/> <br>
    Email: <input type="varchar" name="email" size="35" value='<?php echo $email; ?>'/> <br>
      Phone: <input type="varchar" name="phone" size="35" value='<?php echo $phone; ?>'/> <br>
    Confirmed: <input type="varchar" name="active" size="9" value='<?php echo $confirm; ?>' readonly/> <br>

</div></th>
</div>

      <input name="submit" type="submit" value="Update Coach" />
      </h1>  
  </form>
<?php include("footer.php"); ?>

</body>
</html>
