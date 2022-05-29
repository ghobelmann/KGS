<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

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

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 

<div id="wrapper">

  <div id="content">



<br>  <br>


<a href="edit_roster.php">View/Edit Roster Table</a>  <br>  <a href="edit_roster_id.php">View/Edit by id</a>

<br><br>

<a href="enterteam.php">Enter Teams into Teams Table</a>

<br><br>
<a href="teamclasses.php">Edit Team Classifications</a>


<br><br>
<a href="paid.php">Update Payments</a>


<br><br>
<a href="allusers.php">View all Coaches</a> 

<br><br><b>
<a href="masterTrny.php">View all Scorecards</a>

<br><br>
<a href="coachesdirectory.php">Coaches Directory</a>

<br><br>

<a href="noscores.php">View No Scores in Vitual table</a>

<br><br>

<a href="kcarankings.php">KCA Rankings</a>

<a href="http://www.usd237.com/scgolf/kca/index.php">KCA Voting Page</a>

<br><br>

<a href="http://www.usd237.com/scgolf/kca/results.php">KCA Voting Results Page</a>
    <br><br>
<a href="http://www.usd237.com/scgolf/kca/enterquestion.php">Enter Questions on Survey</a>
    <br><br>
<a href="http://www.usd237.com/scgolf/kca/selectall.php">See who took survey</a>
    <br><br>
<a href="http://www.usd237.com/scgolf/kca/selectallQuestions.php">See who wrote questions</a>


<br><br>


<a href="deletewarn.php">Truncate all tables except data_logins and Schedule</a><br><br>



