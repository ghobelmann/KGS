<?php
include 'db.php';
$usderid = '';
$name = '';
$id = '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
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
body {background-color: white;}
h1   {color: blue;}
p    {color: red;}
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
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: red; 
  color: white; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}



<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: White;
  margin-top: 20px;
}

p {
  color: black;
}

h1 {
  color: green;
}
</style>

<nav>
    <nav class="green lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
        <li><a href="gs.php">Grade School</a></li>
        <li><a href="hs.php">High School</a></li>
         <li><a href="tc.php">Teacher Cover</a></li>
      </ul>


  </nav>

</head>
  

  <?php
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_GET["month"])){
  $month= $_GET["month"];
 echo $month;
}
?>

<body>
  <div class="container">
    <div class="section">

  
    
      <div class="row">
   
    
        <button class="button button1"><a href="teacherReport.php">Teacher Reports</a></button>
          <button class="button button2"><a href="subReport.php">Sub Reports</a></button>
          <button class="button button1"><a href="tcReport.php">Teacher Cover</a></button>
          <button class="button button2"><a href="dailyReport.php">Daily Reports</a></button>
          <button class="button button1"><a href="monthlyReport.php">Monthly Reports</a></button>
          <button class="button button2"><a href="printReport.php">Print Sub Reports</a></button>

      </div>
    


  
 
    <div class="row">
    <div class="col s12 m12">

     
        <div class="card-content white-text">
          <div class="section">
          <form action="teacher.php" class="col s12 m12">
      <div class="input-field col s12 m12">


  <?php
//index.php
$connect = new PDO("mysql:host=localhost; dbname=sub2021", "root", "4Chr!5t3|6");

$query = "SELECT DISTINCT sickdays.name_id, total_sick.name, sickdays.sub_id, 
personnel.sub_name, total_sick.name, MONTH(sickdays.date)
FROM sickdays LEFT JOIN personnel ON sickdays.tc_id = total_sick.tsick_id 
LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
LEFT JOIN time ON sickdays.length = time.time_id 
WHERE MONTH(date) = '$month'
GROUP by sickdays.name_id
ORDER BY total_sick.name asc";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>

  <div class="container">
   <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker" multiple>
   <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["name_id"].'">'.$row["name"].'</option>'; 
   }
   ?>
   </select>
   <input type="hidden" name="hidden_country" id="hidden_country" />
   <div style="clear:both"></div>
   <br />
   <div class="table-responsive-md">
    <table class="table table-bordered table-striped class=w3-table w3-blue">
     <thead>
      <tr>
       <th style="color:#000000">Teacher</th>
       <th style="color:#000000">Date</th>
       <th style="color:#000000">Type</th>
       <th style="color:#000000">Pay</th>
       <th style="color:#000000">Teacher Cover</th>
       <th style="color:#000000">Edit</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
   <br />
   <br />
   <br />
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();
 
 function load_data(query='')
 {
  $.ajax({
   url:"fetchSubMonthly.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }

 $('#multi_search_filter').change(function(){
  $('#hidden_country').val($('#multi_search_filter').val());
  var query = $('#hidden_country').val();
  load_data(query);
 });
 
});
</script>
<script src="js\bootstrap-select-1.13.14\js\bootstrap-select.js"></script>  
<script>
  $(document).ready(function () {
    $('.selectpicker').selectpicker();
  });
</script>


    </div>

    <?php   
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$SQL1 = "SELECT DISTINCT *, sickdays.name_id, sickdays.sub_id, 
personnel.sub_name, total_sick.name as name, MONTH(sickdays.date)
FROM sickdays 
LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
LEFT JOIN personnel ON sickdays.sub_id = personnel.sub_id 
LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
LEFT JOIN time ON sickdays.length = time.time_id 
WHERE MONTH(sickdays.date) = '$month'
GROUP by sickdays.sub_id
ORDER BY sickdays.sub_id asc";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  


<table id="editable_table" class="table table-striped table-dark">
<thead>
<tr> <td><?php // echo $row['name'];?></td></tr>
<tr><th>Name</th><th>Sub</th><th>Date</th>
<th>Length</th><th>Type</th>
</tr>
</thead>
<tbody> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<tr><td style='text-align:left'>$row[name]</td>";
        echo "<td>$row[sub_name]</td>";
        echo "<td>$row[date]</td>";
        echo "<td>$row[length]</td>";
        echo "<td>$row[type]</td></tr>";
        echo "<tr><th style='text-align:right'>Notes: </th><td colspan = '5' style='text-align:left'> $row[notes]</td></tr>";
        echo "<tr><hr></tr>";
}
}
echo "</table>";

?>


  </div>

  
  </div>

  
  </div>  

  
  </div>

  
