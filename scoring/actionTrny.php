                                          <html><head>


                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
    
     
              <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       
        <script src="../includes/jquery.tabledit.min.js"></script> 
</head><html>
   
<?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  


 // echo $trny;
 $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");




$input = filter_input_array(INPUT_POST);             
$status = mysqli_real_escape_string($connect, $input["status"]);
$par = mysqli_real_escape_string($connect, $input["par"]);
$rating = mysqli_real_escape_string($connect, $input["rating"]);
$date = mysqli_real_escape_string($connect, $input["date"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE tournament 
 SET  
status = '".$status."', 
par = '".$par."', 
rating = '".$rating."', 
date = '".$date."'
 WHERE  id = '".$input["id"]."' ";




 
 mysqli_query($connect, $query);

}

 if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM tournament 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}  



echo json_encode($input);

?>   




  