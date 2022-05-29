<!doctype html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Creating-A-Live-Editable-Table-with-jQuery-Tabledit/jquery.tabledit.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


    <title>USD 237</title>
  </head>
  <body><center>
    <h1>Edit Entry</h1>
    <h2><a href="teacherReport.php">Home</a></h2>




</body>
</html>
     


<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include_once("db.php");

if (isset($_GET["id"])){
    $id = $_GET["id"];
   // echo $name_id;

    //code to print second form
    }
    else{
        echo "No ID found.";
    //code to print first form
    }




    $query = "SELECT *, sickdays.name_id, sickdays.sub_id, personnel.sub_name, total_sick.name as name
    FROM sickdays 
    LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
    LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
    LEFT JOIN personnel ON sickdays.sub_id = personnel.per_id 
    LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
    LEFT JOIN department ON sickdays.school = department.bld_id 
    LEFT JOIN time ON sickdays.length = time.time_id 
    WHERE id = $id";
$result = mysqli_query($conn, $query);  

//echo var_dump($result);
?>


    <body>  
     
    
         
  <div class="col-md-12">  
  

             
            <div class="table-responsive">  
    <h1 align="center"><font color="black"><?php echo $tourney; ?> </h1> 

 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th><th>Teacher ID</th><th>Name</th><th>Date</th><th>Type</th> <th>Pay</th><th>Length</th><th>Building</th><th>Sub ID</th>
<th>Sub Name</th>
      <th>Edit/Delete</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '<tr><td>'.$row["id"].'</td>';
      echo '<td>'.$row["name_id"].'</td>';  
      echo '<td>'.$row["name"].'</td>';
      echo '<td>'.$row["date"].'</td> ';  
      echo '<td>'.$row["lv_id"].'</td> ';  
      echo '<td>'.$row["pay_id"].'</td> ';  
      echo '<td>'.$row["time_id"].'</td> ';  
      echo '<td>'.$row["school"].'</td> ';  
      echo '<td>'.$row["sub_id"].'</td> ';  
      echo '<td>'.$row["sub_name"].'</td> '; 
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
      url:'actionEntry.php',
      columns:{
       identifier:[0, 'id'],
       editable:[ [1, 'name_id'], [3, 'date'], [4, 'type'],  [5, 'pay_id'], [6, 'length'], [7, 'school'], [8, 'sub_id']  ]
      },
      autoFocus: true,
      restoreButton:true, 
      autoRefresh: true,
         deleteButton: true,
           
      onSuccess:function(data, textStatus, jqXHR)  
      
            {
        javascript:location.reload(true) 
      }  
        
      
     });
      
});   


 </script>   

 
 

<hr>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <table>
    <th>Type</th>
    <tr><td>1 - Sick Day</td></tr>
    <tr><td>2 - Personal Day</td></tr>
    <tr><td>3 - Professional Day</td></tr>
    
</table>
    </div>
    <div class="col-sm">
    <table>
    <th>Pay</th>
    <tr><td>1 -Reg Ed Full Day</td></tr>
    <tr><td>2 - Reg Ed Half Day</td></tr>
    <tr><td>3 - Spec Ed Full Day</td></tr>
    <tr><td>4 - Spec Ed Half Day</td></tr>
    <tr><td>5 - Para 7.5 Full Day</td></tr>
    <tr><td>6 - Para 7.5 Half Day</td></tr>
    <tr><td>7 - Para 7.0 Full Day</td></tr>
    <tr><td>8 - Para 7.0 Half Day</td></tr>
    <tr><td>9 - Para 6.75 Full Day</td></tr>
    <tr><td>10 - Para 6.75 Half Day</td></tr>
    <tr><td>11 - Teacher Cover</td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>

    
</table>
    </div>
    <div class="col-sm">
    <table>
    <th>Time</th>
    <tr><td>1 - Full Day</td></tr>
    <tr><td>2 - Half Day</td></tr>
    <tr><td>3 - 1 Hour</td></tr>
    <tr><td>4 - 2 Hours</td></tr>
    <tr><td>5 - 3 Hours</td></tr>
    <tr><td>6 - 5 Hours</td></tr>
    <tr><td>7 - 6 Hours</td></tr>
    <tr><td>8 - 7 Hours</td></tr>

    
</table>
    
</table>
    </div>
    <div class="col-sm">
    <table>
    <th>Building</th>
    <tr><td>1 - Grade School</td></tr>
    <tr><td>2 - High School</td></tr>
    <tr><td>3 - Secretarial</td></tr>
    <tr><td>4 - Custodial</td></tr>
    <tr><td>5 - Transportation</td></tr>
    <tr><td>6 - Food Service</td></tr>
    
</table>
    
</table>
    </div>
    <div class="col-sm">
    <table>
    <th>Type</th>
    <tr><td>1 - Sick Day</td></tr>
    <tr><td>2 - Personal Day</td></tr>
    <tr><td>3 - Professional Day</td></tr>
    
</table>
    </div>
  </div></center>
</div>


   
    
    
    
