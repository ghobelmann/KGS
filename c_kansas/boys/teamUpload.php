 <?php
 session_start();
include_once("databaseconnect.php");

 //authentication for coaches to get to their pages, not for public pages.


?> 
    

  


<?php

//Get number of Name to Search For.
if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}

echo $tmid;
?>  
 
 
 
 
 
 
 
 
  <?php
  $sql = "SELECT tmid, image FROM team 
  WHERE tmid = $tmid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tmid = $row['tmid'];
        $image = $row['image'];
       
       echo $image;
    }
} else {
    echo "no image";
}
?>
 
 
 







      


 <?php
 
 if (isset($_POST['submit'])) 
 {
  $file = $_FILES['file'];
  // print_r($file);
  $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];    
        
        
        
                        
        
        
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
      
      $allowed = array('jpg');
      
      if(in_array($fileActualExt, $allowed))
  {
          if ($fileError === 0)  
      {
            if ($fileSize < 10000000) { 
            
            $fileNameNew = $tmid.".".$fileActualExt;
          $fileDestination = 'uploads/team/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination); 
                    
              
    $image_path = 'uploads/team/'.$fileNameNew;          

                    
            //  echo "Upload Success";
            
          } else {
            echo "Your file is too big!";
            }
        } else {
       echo "There was an error uploading your file!";
              }
    } else { 
    echo "File type not Allowed!"; 
     } 
   }   
   
               $src = imagecreatefromjpeg ($image_path );
    list($width, $height) = getimagesize ( $image_path );
 
   
       
    $newwidth = 450;
    $newheight = ($height / $width) * $newwidth;
    
    $tmp = imagecreatetruecolor($newwidth, $newheight);
    
    imagecopyresampled($tmp, $src, 0,0,0,0, $newwidth, $newheight, $width, $height);
    
    imagejpeg($tmp, "uploads/team/$fileNameNew", 33);
    
    imagedestroy($src);
    imagedestroy($tmp);
    

   
   
   
   
   
   
      
     $sql = "SELECT * FROM team WHERE $tmid = tmid";
$result = $conn->query($sql);   
                     
       $sql = "UPDATE team SET image = '$fileNameNew' WHERE tmid= '$tmid'";   
        $result = $conn->query($sql);   
 ?>  
 

    
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">



</head>

<TITLE>Enter Roster</TITLE>
<meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>">




</BODY>
</HTML>




