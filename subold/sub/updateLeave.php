<!DOCTYPE html>
<html lang="en">
<head>






<script src="js/jquery.js"></script>
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



  </head>

  
  <nav>
    <nav class="green lighten-1" role="navigation">

    <div class="nav-wrapper">
    <img src="images/logo.png" alt="LOGO" width="50" height="50">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="gs.php">Grade School</a></li>
        <li><a href="hs.php">High School</a></li>
         <li><a href="tc.php">Teacher Cover</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <div class="section">

  
    <div class="col s12 m6">
  
          <div class="col-md-6">  
       <?php  
       
       include_once("db.php");
//Get number of Team to Search For.

$today = date("Y-n-j"); 
//Submit Query to MySql Database
//echo $today;
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$sql1 = "SELECT *  FROM leavetype";
$result = mysqli_query($conn,$sql1);

if ($result->num_rows > 0) {
  

          ?>   
  <div class="table-responsive">  


<table id="editable_table" class="table-editable">
<thead style='color:#0000ff'>
<tr><th>ID</th><th>Leave Type</th>
</tr>
</thead>
<tbody>    <hr> 
<?php    

while($row = mysqli_fetch_array($result))
{

  //Daily Sub
        echo "<tr><td  style='color:#0000ff'>$row[lv_id]</td>";
        echo "<td style='color:#0000ff'>$row[type]</td></tr>";
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
url:'leaveAction.php',
columns:{
    identifier : [0, 'lv_id'],
    editable:[[1, 'type']]
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