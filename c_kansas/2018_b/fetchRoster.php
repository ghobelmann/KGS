<?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}
$sql = "SELECT * FROM roster ORDER by id desc";
$res = mysqli_query($conn,$sql);
$result = array();














while ( $row = mysqli_fetch_array($res) )
  array_push($result, array('id' => $row[0],
                            'player_1' => $row[1],
                            'school' => $row[2],));
                            
   echo json_encode(array("result" => $result));                        


?>