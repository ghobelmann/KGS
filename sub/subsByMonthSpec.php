<?php
include 'db.php';
$usderid = '';
$name = '';
$id = '';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (isset($_GET["month"])){
    $month = $_GET["month"];
   echo $month;

    //code to print second form
    }
    else{
        echo "No Names found.";
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



<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  font-size: 8px;
  background-color: grey;
  margin-top: 20px;
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


<div class="container">
    <div class="section">

  
    

    

    <div class="col s12 m12">

   
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



$sql1 = "SELECT *, (sickdays.id) as id, (personnel.per_id) as pid, 
        sum(pay.pay) as payTotal
        FROM sickdays 
        LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
        LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id
        LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id
        WHERE MONTH(sickdays.date) = '$month'
        AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9')
        ORDER BY sickdays.date asc";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  
while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<h4>Total Pay $$row[payTotal]</h4>";
        echo '<h4>Printed on - '.date("Y/m/d").'</h4>';
}
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



$sql1 = "SELECT DISTINCT *, sickdays.name_id, sickdays.sub_id, 
personnel.sub_name, total_sick.name as name, MONTH(sickdays.date)
FROM sickdays 
LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
LEFT JOIN personnel ON sickdays.sub_id = personnel.sub_id 
LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
LEFT JOIN time ON sickdays.length = time.time_id 
WHERE MONTH(sickdays.date) = '$month'
AND sickdays.pay_id IN ('3', '4', '5', '6', '7', '8', '9')
ORDER BY sickdays.date asc";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  


<table id="editable_table" class="table table-striped table-dark">
<thead>

<tr><th style='font-size: 12px; text-align:CENTER'>ID</th>
<th  style='font-size: 12px; text-align:CENTER'>Sub</th>
<th  style='font-size: 12px; text-align:CENTER'>Teacher</th>
<th  style='font-size: 12px; text-align:CENTER'>Date</th>
<th  style='font-size: 12px; text-align:CENTER'>Length</th>
<th  style='font-size: 12px; text-align:CENTER'>Pay</th>
<th  style='font-size: 12px; text-align:CENTER'>Type</th>
</tr>
</thead>
<tbody> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
  echo '<td><a href="editEntry.php?id='.$row['id'].'&month(date)=$month">'.$row['id'].'</font></a></td>';
  echo '<td><a href="subQuery.php?sub_id='.$row['sub_id'].'&month(date)=$month">'.$row['sub_name'].'</font></a></td>';
  echo '<td><a href="teacherQuery.php?name_id='.$row['name_id'].'">'.$row['name'].'</font></a></td>';
        echo "<td  style='font-size: 12px; text-align:CENTER'>$row[date]</td>";
        echo "<td  style='font-size: 12px; text-align:CENTER'>$row[length]</td>";
        echo "<td  style='font-size: 12px; text-align:CENTER'>$row[pay]</td>";
        echo "<td  style='font-size: 12px; text-align:CENTER'>$row[type]</td>";
        echo "<th style='font-size: 12px; text-align:left'>-  $row[notes]</td></tr>";
       
}
echo "</table>";
}


?>

<?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>


    <div class="col s12 m12">
  
</tbody>
</table>
</div>  
</div>  



  </div>

  
  </div>

  

