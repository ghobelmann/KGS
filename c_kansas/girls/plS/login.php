<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$username = mysqli_real_escape_string($conn,$_POST['username']);
$result = mysqli_query($conn,"SELECT * FROM roster WHERE username='$username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that username doesn't exist!";
    header("location: error.php");
}
else { 
 $user = $result->fetch_assoc();


    if (MD5($_POST['password']) == $user['password'] AND $user['active'] == '2' ){
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['pid'] = $user['pid'];

        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header('location:../playerStatEntry.php');
    }
    else {
    
    
        $_SESSION['message'] = "You have entered wrong password, or your account is not activated, try again! or contact Greg Hobelmann at 785-620-7054";
        
        
        header("location: error.php");
    }// User exists
   
}    
    ?>
