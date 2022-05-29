<?php
include 'db.php';
$usderid = '';
$name = '';
$id = '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/jquery-tabledit@1.0.0/jquery.tabledit.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>USD 237 Subs</title>
    <link rel="icon" href="images/fav/favicon.ico" type="image/gif" sizes="16x16">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">     
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.tabledit.min.js"></script> 
  




<script type="text/javascript">
	$(document).ready(function(){
		$('.text_container').addClass("hidden");

		$('.text_container').click(function() {
			var $this = $(this);

			if ($this.hasClass("hidden")) {
				$(this).removeClass("hidden").addClass("visible");

			} else {
				$(this).removeClass("visible").addClass("hidden");
			}
		});
	});
</script>


<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: #black;
  margin-top: 20px;
}
</style>
</head>

<body>



    <nav class="green lighten-6" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="gs.php">Grade School</a></li>
        <li><a href="hs.php">High School</a></li>
         <li><a href="tc.php">Teacher Cover</a></li>
      </ul>
    </div>
  </nav>
  

  <?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>


  <div class="container">
    <div class="section">

  
    
      <div class="row">
        <font size="6"
          color="rgb(128, 128, 0)">
            Teacher Cover
        </font>
      </div>
    


  
 
    <div class="row">
    <div class="card large grey">
    <div class="col s12 m12 l12">
          <div class="section">
          <form action="connectsubTC.php" class="col s12 m12 l12">



          <div class="input-field col s6 m12 l12">
<!-- Date Entry Field-->
   
          </div>




  <div class="input-field col s6 m12 l12">


  
          <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name ASC")){

echo "<select name='name_id' class='form-control' id='name_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>
<!-- Sub Entry Field-->



 <!-- Leave Type Field-->
 <?php
           if($r_set = $conn->query("SELECT * from leavetype ORDER by lv_id ASC")){

echo "<select name='type' class='form-control' id='type'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[lv_id]>$row[type]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>

  <!-- Leave Pay- Job Field-->

  <?php
           if($r_set = $conn->query("SELECT * from pay ORDER by pay_id ASC")){

echo "<select name='pay_id' class='form-control' id='pay_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[pay_id]>$row[job]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>


   <!-- Leave Type Field-->
   <?php
           if($r_set = $conn->query("SELECT * from building ORDER by bld_id ASC")){

echo "<select name='school' class='form-control' id='job'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[bld_id]>$row[building]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>
 
 <div class="col s12 m3 l3">
  <!-- Leave Type Field-->
  <p>
      <label><h5></label>Pay
      <input type="decimal" id="pay1" name="pay1">
      1st Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='1' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>


<p><label><h5></label>Pay
      <input type="decimal" id="pay2" name="pay2">
      2nd Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='2' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

</p></div>
<div class="col s12 m3 l3">


<p><label><h5></label>Pay
      <input type="decimal" id="pay3" name="pay3">
      3rd Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='3' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

<p><label><h5></label>Pay
      <input type="decimal" id="pay4" name="pay4">
      4th Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='4' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

</p></div>
<div class="col s12 m3 l3">


<p><label><h5></label>Pay
      <input type="decimal" id="pay5" name="pay5">
      5th Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='5' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>


<p><label><h5></label>Pay
      <input type="decimal" id="pay6" name="pay6">
     6th Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='6' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

</p></div>
<div class="col s12 m3 l3">
<p><label><h5></label>Pay
      <input type="decimal" id="pay7" name="pay7">
     7th Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='7' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

<p><label><h5></label>Pay
      <input type="decimal" id="pay8" name="pay8">
      8th Hour</h5>
        <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, tsick_id from total_sick WHERE building = '2' ORDER by name asc")){

echo "<select name='8' class='form-control' id='tc_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[tsick_id]>$row[name]</option><br>";
}
echo "</select>";
} else {
echo $connection->error;
}
 ?>

</p></div>

<div class="col s12 m3 l3">

        <div> <H5>Notes</H5>
            <textarea id="notes" name ="notes" class="materialize-textarea" data-length="120"></textarea>
</div> </div>
<div class="col s12 m3 l3">      

  <input type="date" name="date" value="<?php echo date("Y-m-d"); ?>"/>
</div>
<div class="col s12 m3 l3">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
</div>
  
</button> 

  
  </form>
        </div>
          </div>
            </div>


    </body>
  </html>