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

 $sql = "DELETE FROM roster WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  