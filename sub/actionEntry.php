<html><head>

     
              <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       
  <script src="js/tableedit/jquery.tabledit.min.js"></script> 
</head><html>



<?php
$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "sub2021");




$input = filter_input_array(INPUT_POST);    
$id = mysqli_real_escape_string($connect, $input["id"]);      
$name_id = mysqli_real_escape_string($connect, $input["name_id"]);
$sub_id = mysqli_real_escape_string($connect, $input["sub_id"]);
$type = mysqli_real_escape_string($connect, $input["type"]);
$pay_id = mysqli_real_escape_string($connect, $input["pay_id"]);
$length = mysqli_real_escape_string($connect, $input["length"]);
$dept_id = mysqli_real_escape_string($connect, $input["school"]);
$notes = mysqli_real_escape_string($connect, $input["notes"]);






if($input["action"] === 'edit')
{
$query = "
UPDATE sickdays 
SET  
name_id = '".$name_id."',  
sub_id = '".$sub_id."',
type = '".$type."',
pay_id = '".$pay_id."',
length = '".$length."',
school = '".$dept_id."',
notes = '".$notes."'

WHERE id = '".$input["id"]."'";






mysqli_query($connect, $query);

}

if($input["action"] === 'delete')
{
$query = "
DELETE FROM sickdays 
WHERE id = '".$input["id"]."'
";
mysqli_query($connect, $query);
}  

echo json_encode($input);


?>   