<?php

session_start();

if (!(isset($_SESSION['username']) || $_SESSION['username'] == '')) {
    header("location:login.php");
}

$dbcon = mysqli_connect('localhost', 'root', 'R45edm!@', 'ks_b_2018') or die(mysqli_error($dbcon));

$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($dbcon, $_SESSION['username']);

if ($password1 <> $password2) { echo "Your passwords do not match.";}

else if (mysqli_query($dbcon, "UPDATE data_logins SET password=md5('$password1') WHERE username='$username'"))
    {echo "You have successfully changed your password.";}

else { mysqli_error($dbcon); }

mysqli_close($dbcon);

?>