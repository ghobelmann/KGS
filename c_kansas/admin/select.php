<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 
   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headera.php");
include_once("databaseconnect.php");


//include_once("analyticstracking.php");

        $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      

 $output = '';
                  //echo $userid;  
 ?> 


 <?php  
$sql = "SELECT scores.pid, roster.player_1, 
roster.grade, team.school, users.tmid FROM scores 
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN users on scores.tmid = users.tmid 
WHERE users.id = $userid"; 
 $result = mysqli_query($conn,$sql);
// var_dump($result);    
 $output    .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">PID</th>  
                     <th width="40%">Name</th>  
                     <th width="40%">School</th>  
                     <th width="40%">Grade</th>  
                     <th width="10%">Delete</th>  
                </tr>';

 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result)) 
    //var_dump($output);
      {  
           $output .= '  
                <tr>  
<td>'.$row["pid"].'</td>  
<td class="player_1" data-id1="'.$row["pid"].'" contenteditable>'.$row["player_1"].'</td>  
<td class="school" data-id2="'.$row["pid"].'" contenteditable>'.$row["school"].'</td>  
<td class="grade" data-id3="'.$row["pid"].'" contenteditable>'.$row["grade"].'</td>  


<td><button type="button" name="delete_btn" data-id3="'.$row["pid"].'" 
class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }    
      $output .= '  
           <tr>  
                <td></td>  
                <td pid="player_1" contenteditable></td>  
                <td pid="school" contenteditable></td>  
                <td pid="grade" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 //echo $output;  
 ?>  
          