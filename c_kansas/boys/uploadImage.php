 <?php
 
 session_start();
 $pid = $_SESSION['pid'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";




include_once("databaseconnect.php");

 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}






?> 
    


 
 
 
 
  <?php
  $sql = "SELECT roster.pid, roster.player_1, roster.grade, roster.tmid, 
  roster.image, team.school, users.email FROM roster 
  INNER JOIN team on roster.tmid = team.tmid
  LEFT JOIN users on roster.tmid = users.tmid
  WHERE roster.pid = '$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['player_1'];
        $pid = $row['pid'];
        $image = $row['image'];
        $email = $row['email'];
        $tmid = $row['tmid'];
       
       echo $image;
    }
} else {
    echo "0 results";
}

 
 
 
 
 
 
 
 
 
 
 
 if ($_SESSION['tmid'] = $tmid)
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
            if ($fileSize < 7148576) {


                    $fileNameNew = $pid.".".$fileActualExt;
                    $fileDestination = 'uploads/player/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination); 
                    
    $image_path = 'uploads/player/'.$fileNameNew;                         
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
   
   
  // Image resize 
   
                
               $src = imagecreatefromjpeg ($image_path );
    list($width, $height) = getimagesize ( $image_path );
 
   
       
    $newwidth = 450;
    $newheight = ($height / $width) * $newwidth;
    
    $tmp = imagecreatetruecolor($newwidth, $newheight);
    
    imagecopyresampled($tmp, $src, 0,0,0,0, $newwidth, $newheight, $width, $height);
    
    imagejpeg($tmp, "uploads/player/$fileNameNew", 70);
    
    
  
    
    imagedestroy($src);
    imagedestroy($tmp);
    
    
    
    
    

   
     $sql = "SELECT * FROM roster WHERE pid = $pid";
$result = $conn->query($sql);   
                     
       $sql = "UPDATE roster SET image = '$fileNameNew' WHERE pid= '$pid'";   
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




