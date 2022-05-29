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
<a href="indexg.php">  Home</a></h4>
</center>       
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-10">
          
 
 
 <?php
      
 
 //authentication for coaches to get to their pages, not for public pages.


include_once("dbconnectg.php");




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
  
/*
  $sql="UPDATE `users` SET `password` = MD5('".$_POST['password']."') WHERE `users`.`id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }

   */
   
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
/* $password = MD5($setup['password']);   */
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
  <table class="table">
  <th>  
    <tr align="justify">ID: <input type="varchar" name="id" value="<?php echo $id;?>" readonly/><br>
    </tr><tr align="justify">First Name: <input type="varchar" name="first_name" size="35" value='<?php echo $fname; ?>'/> <br>
    </tr><tr align="justify">Last Name:  <input type="varchar" name="last_name" size="15" value='<?php echo $lname; ?>'/> <br>
    </tr><tr align="justify">Email: <input type="varchar" name="email" size="35" value='<?php echo $email; ?>'/> <br>
    </tr><tr align="justify"> Phone: <input type="varchar" name="phone" size="35" value='<?php echo $phone; ?>'/> <br>
    </tr><tr align="justify">Confirmed: <input type="varchar" name="active" size="9" value='<?php echo $confirm; ?>' readonly/> <br>
    </table>
</div></div></div></div></div></div></th>

      <input name="submit" type="submit" value="Update Coach" />
      </h1>  
  </form>
<?php include("footer.php"); ?>

</body>
</html>
