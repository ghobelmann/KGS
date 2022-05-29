<html>
<head> 
<meta http-equiv="refresh" content="0; url=manageentries.php">
</head>

</html>                              
                                    
                                    
                                 
<?php


//INITIAL PAGE SETTINGS-----------
  session_start();
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
if(authorize("superadmin,admin") != "success") die('You do not have permission to enter scores, <a href="login.php">Login first</a>');
//INITIAL PAGE SETTINGS-----------

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
$user = $_SESSION['username'];


  if(!empty($_POST['tournament']))
{
$tournament = $_POST['tournament'];
}
 echo $tournament;

?>


 <?php 
  
 $connect = mysqli_connect("107.180.2.60","admin_kgs","usd_237","golf_2016_g"); 
 $output = '';  

$sql = "SELECT * FROM `scores` WHERE tournament = 'Eastern Kansas League Round 1' ORDER by total ASC"; 

 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>Id</th>  
                     <th>Name</th>  
                     <th>School</th> 
                     <th>Points  (You can Edit Points Here)</th>   
                     <th>Total</th>  
                     <th>Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="player_1" data-id1="'.$row["id"].'">'.$row["player_1"].'</td>  
                     <td class="team" data-id2="'.$row["id"].'"> '.$row["team"].'</td>
                     <td class="points" data-id2="'.$row["id"].'"contenteditable>'.$row["points"].'</td>    
                     <td class="total" data-id3="'.$row["id"].'" >'.$row["total"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="player_1"></td>  
                <td id="school"></td>  
                <td id="points"contenteditable></td> 
                <td id="total" ></td>   
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
 echo $output;  
 ?>  
