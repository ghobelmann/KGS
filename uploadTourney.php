 <?php
 
 session_start();
//On page 2
$tid = $_SESSION['tid'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

    echo $tid;


include_once("databaseconnect.php");

 //authentication for coaches to get to their pages, not for public pages.






?> 
    


 
 
 
 
  <?php
  $sql = "SELECT * FROM tournament WHERE id = '$tid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $tid = $row['id'];
        $image = $row['image'];
       
       echo $image;
    }
} else {
    echo "no tournament selected";
}

 
 
 
 
 
 
 
 
 
 
 

  $file = $_FILES['file'];
  print_r($file);
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
            if ($fileSize < 7148576) {


                    $fileNameNew = $tid.".".$fileActualExt;
                    $fileDestination = 'uploads/tournament/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination); 
                    
    $image_path = 'uploads/tournament/'.$fileNameNew;                         
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

   
   
  // Image resize 
   
                
               $src = imagecreatefromjpeg ($image_path );
    list($width, $height) = getimagesize ( $image_path );
 
   
       
    $newwidth = 600;
    $newheight = ($height / $width) * $newwidth;
    
    $tmp = imagecreatetruecolor($newwidth, $newheight);
    
    imagecopyresampled($tmp, $src, 0,0,0,0, $newwidth, $newheight, $width, $height);
    
    imagejpeg($tmp, "uploads/tournament/$fileNameNew", 75);
    
    
  
    
    imagedestroy($src);
    imagedestroy($tmp);
    
    
    
    
    

   
     $sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);   
                     
       $sql = "UPDATE tournament SET image = '$fileNameNew' WHERE id= '$tid'";   
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




