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

<style>  
  body {
    background-color: #ccd9cf;
        }
</style> 

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
    

 <?php

//include_once("header.php");
include_once("db.php");
 ?> 





<?php



//Get number of Name to Search For.
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
if($_POST['submit'] == "Update Tournament")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `tournament` WHERE `id` =  '$id' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$id = ($_POST[id]) ? $_POST[id] : $scores['id'];
$date = ($_POST[date]) ? $_POST[date] : $scores['date']; 
$name_id = ($_POST[name_id]) ? $_POST[name_id] : $scores['name_id']; 
$school = ($_POST[school]) ? $_POST[school] : $scores['school'];
$type = ($_POST[type]) ? $_POST[type] : $scores['type'];
$pay_id = ($_POST[pay_id]) ? $_POST[pay_id] : $scores['pay_id'];
$pay = ($_POST[tc_pay]) ? $_POST[tc_pay] : $scores['tc_pay'];
$length = ($_POST[length]) ? $_POST[length] : $scores['length'];
$tc_id = ($_POST[tc_id]) ? $_POST[tc_id] : $scores['tc_id'];
$pay1 = ($_POST[pay1]) ? $_POST[pay1] : $scores['pay1'];
$pay2 = ($_POST[pay2]) ? $_POST[pay2] : $scores['pay2'];
$pay3 = ($_POST[pay3]) ? $_POST[pay3] : $scores['pay3'];
$pay4 = ($_POST[pay4]) ? $_POST[pay4] : $scores['pay4'];
$pay5 = ($_POST[pay5]) ? $_POST[pay5] : $scores['pay5'];
$pay6 = ($_POST[pay6]) ? $_POST[pay6] : $scores['pay6'];
$pay7 = ($_POST[pay7]) ? $_POST[pay7] : $scores['pay7'];
$pay8 = ($_POST[pay8]) ? $_POST[pay8] : $scores['pay8'];


$notes = ($_POST[notes]) ? $_POST[notes] : $scores['notes'];
$duration = ($_POST[duration]) ? $_POST[duration] : $scores['duration'];
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Teacher Updated Successfully!</h2>';
	echo "<br>"; 
}

	
	
$i=0;

$sql="UPDATE `sickdays` SET 
".(( !$_POST['date'] ) ? "" : "`date` = '".$_POST[date]."', ")."
".(( !$_POST['name_id'] ) ? "" : "`name_id` = '".$_POST[name_id]."', ")."

".(( !$_POST['school'] ) ? "" : "`school` = '".$_POST[school]."', ")."
".(( !$_POST['type'] ) ? "" : "`type` = '".$_POST[type]."', ")."
".(( !$_POST['pay_id'] ) ? "" : "`pay_id` = '".$_POST[pay_id]."', ")."

".(( !$_POST['length'] ) ? "" : "`length` = '".$_POST[length]."', ")."
".(( !$_POST['tc_id'] ) ? "" : "`tc_id` = '".$_POST[tc_id]."', ")."
".(( !$_POST['tc_pay'] ) ? "" : "`tc_pay` = '".$_POST[tc_pay]."', ")."

".(( !$_POST['notes'] ) ? "" : "`notes` = '".$_POST[notes]."', ")."
".(( !$_POST['duration'] ) ? "" : "`duration` = '".$_POST[duration]."', ")."

`spam` = '1'


WHERE `id` = '$id'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  
  
  


}



?>


  <?php  
  echo $id;
  
  $sql = "SELECT * FROM `sickdays` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
// print_r  ($setup);
 
 
 //Tournament ID
 /*
 $date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$name_id = mysqli_real_escape_string($conn, $_REQUEST['name_id']);
$school = mysqli_real_escape_string($conn, $_REQUEST['school']);
$type = mysqli_real_escape_string($conn, $_REQUEST['type']);
$pay_id = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
$pay = mysqli_real_escape_string($conn, $_REQUEST['tc_pay']);
$length = mysqli_real_escape_string($conn, $_REQUEST['length']);
$sub_needed = mysqli_real_escape_string($conn, $_REQUEST['sub_needed']);
$tc_id = mysqli_real_escape_string($conn, $_REQUEST['tc_id']);
$pay1 = mysqli_real_escape_string($conn, $_REQUEST['pay1']);
$pay2 = mysqli_real_escape_string($conn, $_REQUEST['pay2']);
$pay3 = mysqli_real_escape_string($conn, $_REQUEST['pay3']);
$pay4 = mysqli_real_escape_string($conn, $_REQUEST['pay4']);
$pay5 = mysqli_real_escape_string($conn, $_REQUEST['pay5']);
$pay6 = mysqli_real_escape_string($conn, $_REQUEST['pay6']);
$pay7 = mysqli_real_escape_string($conn, $_REQUEST['pay7']);
$pay8 = mysqli_real_escape_string($conn, $_REQUEST['pay8']);
$one = mysqli_real_escape_string($conn, $_REQUEST['1']);
$two = mysqli_real_escape_string($conn, $_REQUEST['2']);
$three = mysqli_real_escape_string($conn, $_REQUEST['3']);
$four = mysqli_real_escape_string($conn, $_REQUEST['4']);
$five = mysqli_real_escape_string($conn, $_REQUEST['5']);
$six = mysqli_real_escape_string($conn, $_REQUEST['6']);
$seven = mysqli_real_escape_string($conn, $_REQUEST['7']);
$eight = mysqli_real_escape_string($conn, $_REQUEST['8']);
$notes = mysqli_real_escape_string($conn, $_REQUEST['notes']);
$duration = mysqli_real_escape_string($conn, $_REQUEST['duration']);
*/

$date = $setup['date'];
$name_id = $setup['name_id'];
$tournament = $setup['tournament'];
$school = $setup['school'];
$type = $setup['type'];
$pay_id = $setup['pay_id'];
$tc_pay = $setup['tc_pay'];
$length = $setup['length'];
$tc_id = $setup['tc_id'];
$duration = $setup['duration'];
$notes = $setup['notes'];
/*
$pay1 = $setup['pay1'];
$pay2 = $setup['pay2'];
$pay3 = $setup['pay3'];
$pay4 = $setup['pay4'];
$pay5 = $setup['pay5'];
$pay6 = $setup['pay6'];
$pay7 = $setup['pay7'];
$pay8 = $setup['pay8'];

$one = $setup['1'];
$two = $setup['2'];
$three = $setup['3'];
$four = $setup['4'];
$five = $setup['5'];
$six = $setup['6'];
$seven = $setup['7'];
$eight = $setup['8'];
*/
         }

?>
  
  <form action="<?php 
  
  
  if ($success){
    // we want to redirect via PHP so that users do not get that "resubmit message"
    header('location: '.$_SERVER['PHP_SELF'].'?status=sent');
} else {
    // we want the form to show up again? so, pass an error
    $status = 'error';
}


 ?>" method="post"> 
 
        </div>
 
 
 
 
 
 
 
 
 

 
        

            <div class="col-lg-12 mb-4" class="bg-light">

 
  <br>
 <center>    <h1> <b>Update Teacher Cover Information</b>    </h1>
 
 

    
    <p><input type="hidden" name="id" value="<?php echo $id;?>"/><br>



    Date: <input type="date" name="date" id="datepicker" size="15" value='<?php echo $date; ?>'/>
    Name ID: <input type="int" name="name_id" size="15" value='<?php echo $name_id; ?>'/> <br><br> <br>
    School: <input type="int" name="school" size="5" value='<?php echo $school; ?>'/>        
    Sub: <input type="int" name="tc_id" size="5" value='<?php echo $tc_id; ?>'/> 
    Pay ID: <input type="int" name="pay_id" size = "5" value='<?php echo $pay_id; ?>'/> 
    Amount: <input type="int" name="tc_pay" size = "5" value='<?php echo $tc_pay; ?>'/> 
    Notes: <input type="varchar" name="notes" size = "25" value='<?php echo $notes; ?>'/> <br>  <br>

    

        <input name="submit" colspan="2" type="submit" value="Update Tournament" />    
       </div>      
  </form>
<center>
22	Chris Goedert<br>
24	Rob Buckmaster<br>
28	Debbie Conrad<br>
32	Patrick Miller<br>
43	Greg Hobelmann<br>
44	Brock Hutchinson<br>
48	Greg Koelsch<br>
49	Thelma Koops<br>
53	Nicholas Linn<br>
57	Julie Molzahn<br>
75	Darren Sasse<br>
81	Amy Terrill<br>
86	Tim Wilson<br>
87	Kelli Schmidt<br>
90	Kelli Armknecht<br>
95	Marsha Allen<br>
103	Wanda Dietz<br>
105	Julie Hutchinson<br>
107	Shelly Strine<br>
123	Kellee Murphy<br>
167	Teri Overmiller<br>
176	Rebekah Miller<br>
178	Miranda Christner<br>
179	Tamra Frank<br>
180	Monica Wagner<br>
205	Michelle Elliott<br>
207	Sherri Frieling<br>
209	Miranda Attwood<br>
226	Denyse Kattenberg<br>
230	Rachel Harvey<br>
231	Charlene Harvey<br>
239	Cierra Wallgren<br>
259	Megan Hendrich<br>
260	David Edell<br>
261	Sherry Weatherholt<br>

</body>
</html>
