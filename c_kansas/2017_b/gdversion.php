<?php
      $gdInfoArray = gd_info();
      $version = $gdInfoArray["GD Version"];
      echo "Your GD version is: ".$version;
      
    echo"<hr />";
    foreach ($gdInfoArray as $key => $value){
      echo "$key|$value<br />";
    
    }
?>