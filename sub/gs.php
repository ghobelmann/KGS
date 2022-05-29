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

<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>USD 237 Subs</title>
    <link rel="icon" href="images/fav/favicon.ico" type="image/gif" sizes="16x16">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- Latest compiled and minified CSS -->
  <!-- Need This One!!! -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <script type='text/javascript'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

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
</style>
<style>

.button {
  border: none;
  color: white;
  padding: 4px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: green; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: black;
  color: white;
}

.button2 {
  background-color: red; 
  color: white; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: black;
  color: white;
}



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

    <div class="nav-wrapper">
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
            Grade School
        </font>
          <button class="button button1"><a href="teacherReport.php">Teacher Reports</a></button>
          <button class="button button2"><a href="subReport.php">Sub Reports</a></button>
          <button class="button button1"><a href="dailyReport.php">Date Reports</a></button>
          <button class="button button2"><a href="reportSub.php">Run Sub Reports</a></button>

      </div>
    


  
 
    <div class="row">
    <div class="col s12 m6">
      <div class="card large blue-grey darken-1">
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
           if($r_set = $conn->query("SELECT tsick_id, name from total_sick WHERE building = '1' ORDER by name ASC")){

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

<?php
           if($r_set = $conn->query("SELECT sub_name, per_id from personnel ORDER by sub_name ASC")){

echo "<select name='sub_id' class='form-control' id='sub_id'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[per_id]>$row[sub_name]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>


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

  
           if($r_set = $conn->query("SELECT * from time ORDER by time_id ASC")){

echo "<select name='length' type='int' class='form-control' id='length'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[time_id]>$row[length]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>

  <!-- Leave Type Field-->
    <?php
           if($r_set = $conn->query("SELECT * from building ORDER by bld_id ASC")){

echo "<select name='school' class='form-control' id='school'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[bld_id]>$row[building]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}
 ?>


<div class="input-field col s6 m6">
<h4>Comments</h4>
<div class="form-group">
  <textarea class="form-control rounded-0" name="notes" rows="4"></textarea>
</div></div>
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
      <div class="card large blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Today's Subs</span>
          <div class="section">

          <div class="col-md-12">  
       <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT *, (sickdays.id) as id, (personnel.per_id) as pid FROM sickdays 
        LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id
        LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
        LEFT JOIN time ON sickdays.length = time.time_id
        WHERE date  = '$today' AND tc_id = '0'
        ORDER BY date desc";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  


<table id="editable_table" class="table-editable">
<thead>
<tr><th>Name</th><th>Sub</th>
<th>Length</th> <th>Edit</th>
</tr>
</thead>
<tbody>    <hr> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<tr><td>$row[name]</td>";
        echo "<td>$row[sub_name]</td>";
        echo "<td>$row[type]</td>";
        echo "<td>$row[id]</td></tr>";
}
}


?>
</tbody>
</table>
</div>  
</div>  

<script>  


$(document).ready(function(){  
$('#editable_table').Tabledit({
url:'actionTeacher.php',
columns:{
    identifier : [3, 'id'],
    editable:[[0, 'name_id'],[1, 'sub_id'], [2, 'type']]
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




  </div>

  
  </div>

  
  </div>  

  
  </div>
