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

//$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2021-08-01' AND sickdays.date < '2021-09-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') 
AND school = '1'";
$result = mysqli_query($conn,$sql1);



if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '<table>';
        echo '<tr><td>Month</td><th>Special Ed </th></tr></thead><tbody> ';
             echo "<td>August</td>";
            echo "<td>$ $row[payTotal]</td>";
    
            
            
    }
}



$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2021-09-01' AND sickdays.date < '2021-10-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>September</td>";
            echo "<td>$ $row[payTotal]</td>";

            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2021-10-01' AND sickdays.date < '2021-11-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>October</td>";
            echo "<td>$ $row[payTotal]</td>";
     
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2021-11-01' AND sickdays.date < '2021-12-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>November</td>";
            echo "<td>$ $row[payTotal]</td>";
   
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2021-12-01' AND sickdays.date < '2022-01-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>December</td>";
            echo "<td>$ $row[payTotal]</td>";
        
            
            
    }
}


$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2022-01-01' AND sickdays.date < '2022-02-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>January</td>";
            echo "<td>$ $row[payTotal]</td>";
  
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2022-02-01' AND sickdays.date < '2022-03-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>February</td>";
            echo "<td>$ $row[payTotal]</td>";
     
            
            
    }
}


$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2022-03-01' AND sickdays.date < '2022-04-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>March</td>";
            echo "<td>$ $row[payTotal]</td>";
    
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2022-04-01' AND sickdays.date < '2022-05-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>April</td>";
            echo "<td>$ $row[payTotal]</td>";
     
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
WHERE sickdays.date > '2022-05-01' AND sickdays.date < '2022-06-01'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td>May</td>";
            echo "<td>$ $row[payTotal]</td>";
     
            
            
    }
}

$sql1 = "SELECT sickdays.pay_id, date, sum(pay.pay) as payTotal 
FROM sickdays LEFT JOIN pay ON sickdays.pay_id = pay.pay_id 
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9') ";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {

    while($row = mysqli_fetch_array($result))
    {
        
        echo '</tr><tr> ';
             echo "<td><b>Total</b></td>";
            echo "<td><b>$ $row[payTotal]</b></td>";
        echo '</table>';
            
            
    }
}



?>
  
          <span class="card-title"></span>
          <div class="section">

          <div class="col-md-12">  
    

  </div>

  
  </div>

  

