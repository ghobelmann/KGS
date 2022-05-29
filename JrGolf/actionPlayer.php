                                              <?php

    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}  


 // echo $trny;
$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "JrGolf");




$input = filter_input_array(INPUT_POST);    
$id = mysqli_real_escape_string($connect, $input["id"]);      
$card = mysqli_real_escape_string($connect, $input["card"]);
$teetime = mysqli_real_escape_string($connect, $input["teetime"]);






if($input["action"] === 'edit')
{
 $query = "
 UPDATE scores 
 SET  
card = '".$card."',  
teetime = '".$teetime."'
 WHERE id = '".$input["id"]."'";




 
 mysqli_query($connect, $query);

}

 if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM scores 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}  

echo json_encode($input);

?>   