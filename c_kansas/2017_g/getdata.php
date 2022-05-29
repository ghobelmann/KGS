<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/style_nopict.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>




</head>


<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");
include_once ("connection.php");

//Find user logged in to select their tournaments only
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
$user = $_SESSION['username'];

?>




<?php
      include_once ("connection.php");
      
      if (!empty($_POST["sid"])) {
        $id = $_POST["sid"];
        
         $query = "SELECT * from roster WHERE sid = $id";
        $results = mysqli_query ($con, $query);
        
        foreach ($results as $player)   {
           ?>
        
            <option value="<?php echo $player["player_1"]; ?>"><?php echo $player["player_1"]; ?></option>
           <?php 
        }
      }
?>