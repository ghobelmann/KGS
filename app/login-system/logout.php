<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logged Out</title>
  <?php include 'css/css.html'; ?>
  <meta http-equiv="Refresh" content="0; url=https://app.kansasgolfscores.com" />
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
     
    </div>
</body>
</html>
