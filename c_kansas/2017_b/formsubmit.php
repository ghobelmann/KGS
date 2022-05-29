<?php
  /* Do work */
  if(isset($_REQUEST["destination"])){
      header("Location: {$_SERVER["HTTP_REFERER"]}");
  }else if(isset($_SERVER["HTTP_REFERER"])){
      header("Location: {$_SERVER["HTTP_REFERER"]}");
  }else{
       /* some fallback, maybe redirect to index.php */
  }
  
  ?>