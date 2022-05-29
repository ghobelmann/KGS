 <?php     
       ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
 ?>  
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">

 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script>
/*
const firebase = require("firebase");
// Required for side-effects
require("firebase/firestore");

// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
     apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
  authDomain: "leaderboard-58001.firebaseapp.com",
  databaseURL: "https://leaderboard-58001.firebaseio.com",
  projectId: "leaderboard-58001",
  storageBucket: "leaderboard-58001.appspot.com",
  messagingSenderId: "397076014204",
  appId: "1:397076014204:web:2cc69833c6ded4f60515f9",
  measurementId: "G-BE24RVGM5Y"
  });
  
var db = firebase.firestore();

var menu =[  
    {  
       "tid":652,
       "name":"Test Tournament 2020",
       "date":"2020-01-21",
       "playerName":"Austin Hobelmann",
       "score":"81"
    },
    {  
       "tid":652,
       "name":"Test Tournament 2020",
       "date":"2020-01-21",
       "playerName":"Aaron Moss",
       "score":"84"
    }
 ]

menu.forEach(function(obj) {
    db.collection("tournaments").add({
        tid: obj.tid,
        name: obj.name,
        date: obj.date,
        playerName: obj.playerName,
        score: obj.score
    }).then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
});


    */
    </script>


</head>

<TITLE>Finalize Tournament</TITLE>
<meta http-equiv="Refresh" content="2; url=index.php">



</BODY>

</HTML>

<?php 

if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
echo $tid; 
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    

$sql = "SELECT complete from scores2 where tid ='$tid' ";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result))  {
		echo "<h1>ERROR: Tournament has already been Finalized<br>";
	}else{
  
            }  
            
            
     $sql4 = "UPDATE tournament SET `complete` = '2' WHERE id = '$tid'"; 
 $result = mysqli_query($conn,$sql4)  or die(mysqli_error()) ;          
            
    
       
$sql3 = "INSERT INTO scores2 (pid, uid, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18,  
front, back, last6, last3, teetime, total, teamPlace, tmid, card, tid, spam, manualscore, complete, round, status, man) 
SELECT pid, uid, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18,  
front, back, last6, last3, teetime, total, teamPlace, tmid, card, tid, spam, manualscore, complete, round, status, man
FROM scores
WHERE tid = '$tid' AND total != '0'";     

if ($conn->query($sql3) === TRUE) {
    echo "<h1>Tournament Closed Successfully</h1>";
     echo "<a href='indexg.php'>Back to Home</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}} 

$sql5 = "UPDATE scores SET `complete` = '2' WHERE tid = '$tid'"; 
 $result = mysqli_query($conn,$sql5)  or die(mysqli_error()) ; 
 
 
 $sql2 = "UPDATE scores2 SET `complete` = '2' WHERE tid = '$tid'"; 
 $result = mysqli_query($conn,$sql2)  or die(mysqli_error()) ; 
 
  
if ($conn->query($sql) === TRUE) {
    echo "<h1>Tournament Finalized successfully</h1>";



 }
 
  



?>
