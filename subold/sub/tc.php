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
  

  <script>
//Time Picker:
$('.timepicker').pickatime({
    default: 'now',
    twelvehour: true, // change to 12 hour AM/PM clock from 24 hour
    donetext: 'OK',
  autoclose: true,
  vibrate: true // vibrate the device when dragging clock hand
});
</script>


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
  background-color: grey;
  margin-top: 20px;
}
</style>
</head>

<body>



    <nav>
    <nav class="green lighten-1" role="navigation">
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
    <div class="col s12 m6">
      <div class="card large red darken-1">
        <div class="card-content white-text">
          <span class="card-title">New Entry</span>
          <div class="section">
          <form action="connectsub.php" class="col s12 m12">



          <div class="input-field col s6 m12">
<!-- Date Entry Field-->
   
  </div>




  <div class="input-field col s6 m12">


          <?php
          $date = date('Y/m/d');
          //echo $date;
           if($r_set = $conn->query("SELECT name, id from total_sick WHERE building = '2' ORDER by name ASC")){

echo "<select name='name' class='form-control' id='name'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[name]</option><br>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>
<!-- Sub Entry Field-->

<?php
           if($r_set = $conn->query("SELECT sub_name, id from personnel ORDER by sub_name ASC")){

echo "<select name='sub_name' class='form-control' id='sub_name'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[sub_name]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>


 <!-- Leave Type Field-->
 <?php
           if($r_set = $conn->query("SELECT * from leavetype ORDER by id ASC")){

echo "<select name='type' class='form-control' id='type'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[type]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>

  <!-- Leave Pay- Job Field-->

  <?php
           if($r_set = $conn->query("SELECT * from pay ORDER by id ASC")){

echo "<select name='pay' class='form-control' id='job'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[job]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>

  <!-- Leave Type Field-->
   <?php

  
           if($r_set = $conn->query("SELECT * from time ORDER by id ASC")){

echo "<select name='length' type='int' class='form-control' id='length'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[length]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>

  <!-- Leave Type Field-->
    <?php
           if($r_set = $conn->query("SELECT * from building ORDER by id ASC")){

echo "<select name='school' class='form-control' id='job'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[building]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>



<div class="row">
        <div class="row">
  
        </div>
        <div class="row">
          <div class="input-field col s6">
            <textarea id="notes" name ="notes" class="materialize-textarea" data-length="120"></textarea>
            <label for="notes">Notes</label>
          </div>
        </div>
 
    </div>
<div class="input-field col s6 m6">
  <input type="date" name="date" value="<?php echo date("Y-m-d"); ?>"/>
</div>
<div class="input-field col s6 m6">
</div>
<div class="input-field col s6 m6">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
</div>
        </div>
          </div>
            </div>



  </button> 

  
  </form>


      </div>

      <!-- 
   Reg Ed Teacher Full Day	
   Reg Ed Teacher Half Day	
   Spec Ed Teacher Full Day	
   Spec Ed Teacher Half Day
Para 7.5 Full Day	
Para 7.5 Half Day	
Para 7.0 Full Day	 
Para 7.0 Half Day
Para 6.75 Full Day	
Para 6.75 Half Day	
ELL
No Sub Needed
 -->
    </div>

    <div class="col s12 m6">
      <div class="card large grey darken-6">
        <div class="card-content white-text">
          <span class="card-title">Today's Subs</span>
          <div class="section">

          <div class="col-md-12">  
       <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql = "SELECT *, (sickdays.id) as sid, personnel.id FROM sickdays 
        LEFT JOIN personnel ON sickdays.sub_name = personnel.id
        LEFT JOIN total_sick ON sickdays.name = total_sick.id
        LEFT JOIN time ON sickdays.length = time.duration
        WHERE date  = '$date' 
         ORDER BY date desc";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  
<h1 align="center"><font color="black">USD 237</h1> 


<table id="editable_table" class="table">
<thead>
<tr><th>Name</th><th>Sub</th>
<th>Length</th> <th>Edit</th>
</tr>
</thead>
<tbody>    <hr> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //$dur = new DateTime($row['duration']);

 // $dur = $row['duration'];
 // $myDur = DateTime::createFromFormat('h:i:s', $dur);
 // $formatdate = $myDur->format('h:i:s');
  
 // $formatdate = date_format($dur, 'h:i:s');
       // echo "<td>$row[sid]</td>";
        echo "<tr><td>$row[name]</td>";
        echo "<td>$row[sub_name]</td>";
        echo "<td>$row[length]</td>";
        echo "</td>";
        echo "<td>$row[id]</td></tr>";
}
}


?>
</tbody>
</table>
</div>  
</div>  
</body>  
</html> 
<script>  


$(document).ready(function(){  
$('#editable_table').Tabledit({
url:'actionPlayer.php',
columns:{
identifier:[1, 'id'],
editable:[ [2, 'name'], [3, 'sub_name']]
},
autoSelect : true,
autoFocus : true,

restoreButton : true, 
deleteButton : true,

 
onSuccess:function(data, textStatus, jqXHR)  
{
javascript:location.reload(true) 
} 

});

});   


</script>   

          <?php


  ?>


  </div>
  </div>
  </div>  
  </div>

<!--
<button onclick="myFunction()">Add New Sub or Teacher.</button>

<div id="myDIV">
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>


    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
</div>
-->
  <div class="col s12 m12">
      <div class="card large green darken-1">
        <div class="card-content white-text">
          <span class="card-title">Upcoming Subs</span>
          <div class="section">

          <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT *,  personnel.id FROM sickdays 
        INNER JOIN personnel ON sickdays.name = personnel.id
        LEFT JOIN time ON sickdays.duration = time.duration
        WHERE date  > '$date' 
         ORDER BY date desc";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  
<h1 align="center"><font color="black">USD 237</h1> 


<table id="editable_table" class="table">
<thead>
<tr>
<th>ID</th><th>Date</th><th>Name</th><th>Sub</th>
<th>Length</th> <th>Edit</th>
</tr>
</thead>
<tbody>    <hr> 
<?php    
while($row = mysqli_fetch_array($result))
{
        echo "<tr><td>$row[id]</td>";
        echo "<td>$row[date]</td>";
        echo "<td>$row[name]</td>";
        echo "<td>$row[sub_name]</td>";
        echo "<td>$row[duration]</td></tr>";

}
}


?>

  </div>
  </div>
  </div>  
  </div>
  </div>
  </div>  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>



      <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>



    </body>
  </html>