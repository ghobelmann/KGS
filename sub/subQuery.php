<?php
include 'db.php';
$usderid = '';
$name = '';
$id = '';
?>

<?php

// Perform query
if ($result = mysqli_query($conn, "SELECT * FROM `sickdays`")) {
  echo "Returned rows are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}
//echo var_dump('$age');
  

if (isset($_GET["sub_id"])){
    $sub_id = $_GET["sub_id"];
   echo $sub_id;

    //code to print second form
    }
    else{
        echo "No Name found.";
    //code to print first form
    }
//fetch.php
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

table {
            width: 90%;
            border: none;
            padding: 2px 2px;
            text-align: center;
            text-decoration: none;
           /* display: inline; */
            font-size: 16px;
            margin: 40px 5px;
            transition-duration: 0.4s;
            cursor: pointer;
            align: center;
            border: 1px solid black;
        }

        th, td {
            
            border: none;
            padding: 2px 2px;
            text-align: center;
            text-decoration: none;
           /* display: inline; */
            font-size: 16px;
            margin: 40px 5px;
            transition-duration: 0.4s;
            cursor: pointer;
            align: center;
            border: 1px solid black;
        }
    


</style>
</head>

<body>




  <?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>


    <div class="col s12 m12">

    <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT *, (sickdays.id) as id, (personnel.per_id) as pid, total_sick.name, 
        sum(pay.pay) as payTotal
        FROM sickdays 
        LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
        LEFT JOIN personnel ON sickdays.sub_id = personnel.sub_id
        LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
        WHERE sickdays.sub_id = '$sub_id' AND month(date) = '11'
        GROUP by sickdays.sub_id
        ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<center><tr><td><h1>Sub Report for: $row[sub_name]</h1></td></center>";
}
}


?>
  
          <span class="card-title"></span>
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



$sql1 = "SELECT *, (sickdays.id) as id, (personnel.per_id) as pid 
        FROM sickdays 
        LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
        LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
        LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id
        LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
        LEFT JOIN time ON sickdays.length = time.time_id
        WHERE sickdays.sub_id = '$sub_id' AND month(date) = '11'
        ORDER BY date ASC";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  


<table id="editable_table" class="table-editable">
<thead>
<tr><th>Edit</th><th>Teacher</th><th>Date</th><th>Pay</th>
<th>Length</th><th>Type</th><th>Notes</th>
</tr>
</thead>
<tbody> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<td>$row[id]</td>";
        echo "<td>$row[name]</td>";
        //echo "<td>$row[sub]</td>";
        echo "<td>$row[date]</td>";
        echo "<td>$row[pay]</td>";
        echo "<td>$row[length]</td>";
        echo "<td>$row[type]</td>";
        echo "<td>$row[notes]</td></tr>";
        
        
}
}
echo "</table>";

?>

<?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>


    <div class="col s12 m12">

  


       <span class="card-title"></span>
          <div class="section">

          <div class="col-md-12">  
      

<?php   
//Get number of Team to Search For.
if (isset($_GET["sub_id"])){
  $sub_id = $_GET["sub_id"];
 // echo $name_id;

  //code to print second form
  }
  else{
      echo "No Name found.";
  //code to print first form
  }

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT *
    FROM sickdays 
    
    LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
    WHERE sickdays.tc_id = '$sub_id' AND month(date) = '11'";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   

<table>
<thead>
<tr><th>ID</th><th>Teacher Covered For</th><th>Date</th><th>Pay</th>
</tr>
</thead>
<tbody> 
<?php    


while($row = mysqli_fetch_array($result))
{
    $date = '';
     echo "<tr><td>$row[id]</td>";
        echo "<td>$row[name]</td>";
        echo "<td>$row[date]</td>";
        echo "<td>$row[tc_pay]</td>";
        echo "<td> $row[notes]</td></tr>";

}
}
echo "</table>";

?>

<?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
 <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT (sickdays.id) as id, (total_sick.tsick_id) as pid, sickdays.name_id, 
(total_sick.name) as name, sickdays.date, sickdays.type, sickdays.notes,
    sum(sickdays.tc_pay) as payTotal
    FROM sickdays 
    LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id
    LEFT JOIN total_sick ON sickdays.tc_id = total_sick.tsick_id
    WHERE sickdays.tc_id = '$sub_id' AND month(date) = '11'";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   

<?php    


while($row = mysqli_fetch_array($result))
{
    $date = '';
  //Daily Sub
        echo " <td><h1> Teacher Cover Pay $$row[payTotal]</td></h1></tr>";
}
}
echo "</table>";

?>

    <div class="col s12 m12">


    <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT *, (sickdays.id) as id, (personnel.per_id) as pid, 
        sum(pay.pay) as payTotal
        FROM sickdays 
        LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
        LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id
        LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
        WHERE sickdays.sub_id = '$sub_id' AND month(date) = '11'
        GROUP by sickdays.sub_id
        ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  
while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<h1>Sub Pay $$row[payTotal]</h1>";
        echo '<h1>Monthly Total_______________';
        echo '<h1><right>Signature____________________________</h1>';
}
}


?>


  </div>

  
  </div>

  

