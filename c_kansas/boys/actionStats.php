<?php

    if(!empty($_GET['id']))
{
$id = $_GET['id'];
}  
  echo $id;

 // echo $trny;
    $connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");




$input = filter_input_array(INPUT_POST);
$id = mysqli_real_escape_string($connect, $input["id"]);
$tfairways = mysqli_real_escape_string($connect, $input["tfairways"]);
$fairways = mysqli_real_escape_string($connect, $input["fairways"]);
$gir = mysqli_real_escape_string($connect, $input["gir"]);
$putts = mysqli_real_escape_string($connect, $input["putts"]);
$Tputts = mysqli_real_escape_string($connect, $input["Tputts"]);
$updownc = mysqli_real_escape_string($connect, $input["updownc"]);
$updown = mysqli_real_escape_string($connect, $input["updown"]);
$ssc = mysqli_real_escape_string($connect, $input["ssc"]);
$ss = mysqli_real_escape_string($connect, $input["ss"]);
$pen = mysqli_real_escape_string($connect, $input["pen"]);
$ace = mysqli_real_escape_string($connect, $input["ace"]);
$dbleagle = mysqli_real_escape_string($connect, $input["dbleagle"]);
$eagle = mysqli_real_escape_string($connect, $input["eagle"]);
$birdie = mysqli_real_escape_string($connect, $input["birdie"]);
$par1 = mysqli_real_escape_string($connect, $input["par1"]);
$bogie = mysqli_real_escape_string($connect, $input["bogie"]);
$doubleb = mysqli_real_escape_string($connect, $input["doubleb"]);
$triple = mysqli_real_escape_string($connect, $input["triple"]);
$other = mysqli_real_escape_string($connect, $input["other"]);
$place = mysqli_real_escape_string($connect, $input["place"]);
$score = mysqli_real_escape_string($connect, $input["score"]);
$include = mysqli_real_escape_string($connect, $input["include"]);




if($input["action"] === 'edit')
{
 $query = "
 UPDATE stats 
 SET  
tfairways = '".$tfairways."',
fairways = '".$fairways."',
gir = '".$gir."',
putts = '".$putts."',
Tputts = '".$Tputts."',
updownc = '".$updownc."',
updown = '".$updown."',
ssc = '".$ssc."',
ss = '".$ss."',
pen = '".$pen."',
ace = '".$ace."',
dbleagle = '".$dbleagle."',
eagle = '".$eagle."',
birdie = '".$birdie."',
par1 = '".$par1."',
bogie = '".$bogie."',
doubleb = '".$doubleb."',
triple = '".$triple."',
other = '".$other."',
place = '".$place."',
score = '".$score."',
include = '".$include."'

 WHERE id = '".$input["id"]."'";




 
 mysqli_query($connect, $query);

}

 if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM scores 
 WHERE pid = '".$input["pid"]."'
 ";
 mysqli_query($connect, $query);
}   

echo json_encode($input);

?>   