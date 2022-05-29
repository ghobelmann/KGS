<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = mysqli_real_escape_string($conn,$_POST['email']);
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { 
 $user = $result->fetch_assoc();


    if (MD5($_POST['password']) == $user['password'] AND $user['active'] == '1' ){
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];

        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header('location:../index.php');
    }
    else {
    
    
        $_SESSION['message'] = "You have entered wrong password, or your account is not activated, try again! or contact Greg Hobelmann at 785-620-7054";
        
        
        header("location: error.php");
    }// User exists
   
}    
    ?>
