<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION);
$_SESSION = array();
header("Location: index.php");
?>