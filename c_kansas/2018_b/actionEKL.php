                                                                                   <?php


 // echo $trny;
$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");




$input = filter_input_array(INPUT_POST);    
$id = mysqli_real_escape_string($connect, $input["id"]);      
$points = mysqli_real_escape_string($connect, $input["points"]);


 echo $id;



if($input["action"] === 'edit')
{
 $query = "
 UPDATE scores 
 SET  
points = '".$points."' 

 WHERE id = '".$input["id"]."'";




 
 mysqli_query($connect, $query);

}

/* if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM scores 
 WHERE pid = '".$input["pid"]."'
 ";
 mysqli_query($connect, $query);
}   */

echo json_encode($input);

?>   