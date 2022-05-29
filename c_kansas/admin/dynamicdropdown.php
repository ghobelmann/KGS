<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	

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
   echo $user;             
?>

   <div class="school">
    <label>School</label>
      <form action="connectcard4team.php" method="post">
      <select name="team" onchange="getId(this.value);">
        <option value="">Select school</option>

        <?php      
        
                
        $query2 = "SELECT * FROM `tournament` WHERE user = '$_SESSION[username]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results2 = @mysql_query($query2))
{
$data = mysql_fetch_assoc($results2);
        }
   
        
          $query = "SELECT roster.sid, roster.school as school, roster.player_1,
          trnyteams.team, trnyteams.tournament
           FROM roster, trnyteams, tournament WHERE trnyteams.team = roster.school AND 
            trnyteams.tournament = '$data[tournament]' 
            AND tournament.user = '$_SESSION[username]' GROUP by team";
            
          $results = mysqli_query($con, $query);
          
          foreach ($results as $school){
          ?>
              <option value="<?php echo $school["sid"]; ?>"><?php echo $school["school"]; ?></option>
              <?php
          }
          ?>
            </select>
            </div>
            
            
            <div class="player">
                              <label>Player</label>
                              <select name="1" id="playerName">
                              <option value=""></option>
                              
                              </select>
                      
            <script>
              function getId(val){
                      $.ajax({
                         type: "POST",
                         url: "getdata.php",
                         data: "sid="+val,
                        success: function(data){
                              $("#playerName").html(data);
                        }
                      });
                     }
              </script>
              
              
              
            
             
            
                  		Card:
		 <select name="position1" required> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
</select> 

            		<input type="checkbox" name="jv1" value="yes">
JV
		  
Tee Time/Hole Number:
		<input type="varchar" name="teetime1" size="10" value=""/>
  

		<input type="checkbox" name="noteam1" value="yes">
No Team

Front 9: <input type="int" name="front1" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['name']))
    {
      $name = $_GET['name'];
    }
//Submit Query to MySql Database
  $query = "SELECT scores.front, scores.tid FROM scores, tournament WHERE scores.tid = '$trny' AND player_1 = '$name' LIMIT 1";
  $result = mysql_query($query)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysql_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 


Back 9: <input type="int" name="back1" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['name']))
    {
      $name = $_GET['name'];
    }
//Submit Query to MySql Database
  $query = "SELECT scores.back, scores.tid FROM scores, tournament WHERE scores.tid = '$trny' AND player_1 = '$name' LIMIT 1";
  $result = mysql_query($query)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysql_fetch_array( $result )) {
    echo $row['back']; 
}?>"/> 
         </div>
         
         
         
</p><br>
                   
		<input type="varchar" name="tournament" size="40" value="<?php echo $data['tournament']; ?>" readonly hidden/>

		<input type="int" name="tid" size="1" value="<?php echo $data['id']; ?>" readonly hidden/>


        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly  hidden/>
        
                 <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly hidden/>
        
     
</p>





_______________________________________________________________________________________________________________________________

      <select name="team" onchange="getId2(this.value);">
        <option value="">Select school</option>
  <?php      
        
                
        $query2 = "SELECT * FROM `tournament` WHERE user = '$_SESSION[username]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results2 = @mysql_query($query2))
{
$data = mysql_fetch_assoc($results2);
        }
   
        
          $query = "SELECT roster.sid, roster.school as school, roster.player_1,
          trnyteams.team, trnyteams.tournament
           FROM roster, trnyteams, tournament WHERE trnyteams.team = roster.school AND 
            trnyteams.tournament = '$data[tournament]' 
            AND tournament.user = '$_SESSION[username]' GROUP by team";
            
          $results = mysqli_query($con, $query);
          
          foreach ($results as $school){
          ?>
              <option value="<?php echo $school["sid"]; ?>"><?php echo $school["school"]; ?></option>
              <?php
          }
          ?>
            </select>
            </div>
            
            
            <div class="player">
                              <label>Player</label>
                              <select name="2" id="playerName">
                              <option value=""></option>
                              
                              </select>
                      
            <script>
              function getId2(val){
                      $.ajax({
                         type: "POST",
                         url: "getdata.php",
                         data: "sid="+val,
                        success: function(data){
                              $("#playerName").html(data);
                        }
                      });
                     }
              </script>
              
              
              
            
             
            
                  		Card:
		 <select name="position2" required> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
</select> 

            		<input type="checkbox" name="jv2" value="yes">
JV
		  
Tee Time/Hole Number:
		<input type="varchar" name="teetime2" size="10" value=""/>
  

		<input type="checkbox" name="noteam2" value="yes">
No Team

Front 9: <input type="int" name="front2" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['name']))
    {
      $name = $_GET['name'];
    }
//Submit Query to MySql Database
  $query = "SELECT scores.front, scores.tid FROM scores, tournament WHERE scores.tid = '$trny' AND player_1 = '$name' LIMIT 1";
  $result = mysql_query($query)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysql_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 


Back 9: <input type="int" name="back2" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['name']))
    {
      $name = $_GET['name'];
    }
//Submit Query to MySql Database
  $query = "SELECT scores.back, scores.tid FROM scores, tournament WHERE scores.tid = '$trny' AND player_1 = '$name' LIMIT 1";
  $result = mysql_query($query)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysql_fetch_array( $result )) {
    echo $row['back']; 
}?>"/> 
         </div>
         
         
         
</p><br>
                       <input name="" type="submit" value="Enter Player" />
		<input type="varchar" name="tournament" size="40" value="<?php echo $data['tournament']; ?>" readonly hidden/>

		<input type="int" name="tid" size="1" value="<?php echo $data['id']; ?>" readonly hidden/>


        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly hidden />
        
                 <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly hidden/>
        
     
</p>
_______________________________________________________________________________________________________________
 
  </form>


 
            
  