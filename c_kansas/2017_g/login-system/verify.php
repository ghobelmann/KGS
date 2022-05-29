<?php 

    if(!isset($_SESSION)) 
    { 
        session_start();
        session_regenerate_id(); 
        var_dump($_SESSION);
    } 

 error_reporting(E_ALL & ~E_NOTICE);
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require '../databaseconnect.php';


// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $_GET['email']; 
    echo $email;
    
    




    $sql = "SELECT * FROM users WHERE email='$email' AND active='0'";
        $result=mysqli_query($conn,$sql);  
    if ( $result->num_rows == 0 )   
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        
        
        
        
        
        $sql="UPDATE users SET active='1' WHERE email='$email'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
        
        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: error.php");
}     
?>