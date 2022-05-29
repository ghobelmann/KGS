           <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>
  

</head><body>	



   




<?php
include("databaseconnect.php");

if(!empty($perm))
{
$perm;
echo $perm;
}
 //authentication for coaches to get to their pages, not for public pages.
if ($perm > '5') {
    echo "Permission Granted";
} else {
header("Location: index.php", TRUE, 303);
exit;
}

include_once("headera.php");
//include_once("analyticstracking.php");  
 ?> 


       <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    </nav>

  <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#">  </a>
            <div class="card-body">
              <h4 class="card-title">
                <h4>State Usage</h4>

       <table class='table'">
  <tr>
    <th>State</th>
    <th>Coaches</th>
    <th>Golfers</th>
    <th>Tournaments</th>
      <th>Total Income</th>
  </tr>
  
  
  
    
 <!-- Colorado Stats -->
  
  <tr> <td>Colorado</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "co_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as coloradocoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $colorado_coaches = $row["coloradocoaches"];
    }
} else {
    echo "0 results";
}
 echo $colorado_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as coloradoplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $colorado_players = $row["coloradoplayers"];
    }
} else {
    echo "0 results";
}
 echo $colorado_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as coloradotrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $colorado_trny = $row["coloradotrny"];
    }
} else {
    echo "0 results";
}
 echo $colorado_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as coloradoincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $colorado_income = $row["coloradoincome"];
    }
} else {
    echo "0";
}
 echo $colorado_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>
  
  
  
  
  
  
  
  
  
    
 <!-- Idaho Stats -->
  
  <tr> <td>Idaho</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "id_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as idahocoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idaho_coaches = $row["idahocoaches"];
    }
} else {
    echo "0 results";
}
 echo $idaho_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as idahoplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idaho_players = $row["idahoplayers"];
    }
} else {
    echo "0 results";
}
 echo $idaho_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as idahotrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idaho_trny = $row["idahotrny"];
    }
} else {
    echo "0 results";
}
 echo $idaho_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as idahoincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idaho_income = $row["idahoincome"];
    }
} else {
    echo "0";
}
 echo $idaho_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>
  
  
  
  
  
  
 <!-- Kansas Stats -->
  
  <tr> <td><a href="enterpayments.php">Kansas</a></td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ks_b_2018";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as kancoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $kan_coaches = $row["kancoaches"];
    }
} else {
    echo "0 results";
}
 echo $kan_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as kanplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $kan_players = $row["kanplayers"];
    }
} else {
    echo "0 results";
}
 echo $kan_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as kantrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $kan_trny = $row["kantrny"];
    }
} else {
    echo "0 results";
}
 echo $kan_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as kanincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $kan_income = $row["kanincome"];
    }
} else {
    echo "0 results";
}
 echo $kan_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>
  
  
  
  
  
  
   
 <!-- Missouri Stats -->
  
  <tr> <td>Missouri</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "mo_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as moscoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $mos_coaches = $row["moscoaches"];
    }
} else {
    echo "0 results";
}
 echo $mos_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as mosplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $mos_players = $row["mosplayers"];
    }
} else {
    echo "0 results";
}
 echo $mos_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as mostrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $mos_trny = $row["mostrny"];
    }
} else {
    echo "0 results";
}
 echo $mos_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as mosincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $mos_income = $row["mosincome"];
    }
} else {
    echo "0";
}
 echo $mos_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>






    
 <!-- Montana Stats -->
  
  <tr> <td>Montana</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "mt_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as montanacoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $montana_coaches = $row["montanacoaches"];
    }
} else {
    echo "0 results";
}
 echo $montana_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as montanaplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $montana_players = $row["montanaplayers"];
    }
} else {
    echo "0 results";
}
 echo $montana_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as montanatrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $montana_trny = $row["montanatrny"];
    }
} else {
    echo "0 results";
}
 echo $montana_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as montanaincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $montana_income = $row["montanaincome"];
    }
} else {
    echo "0";
}
 echo $montana_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>






     
 <!-- Nebsaska Stats -->
  
  <tr> <td>Nebraska</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ne_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as nebcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $neb_coaches = $row["nebcoaches"];
    }
} else {
    echo "0 results";
}
 echo $neb_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as nebplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $neb_players = $row["nebplayers"];
    }
} else {
    echo "0 results";
}
 echo $neb_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as nebtrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $neb_trny = $row["nebtrny"];
    }
} else {
    echo "0 results";
}
 echo $neb_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as nebincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $neb_income = $row["nebincome"];
    }
} else {
    echo "0";
}
 echo $neb_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>







    
 <!-- Nevada Stats -->
  
  <tr> <td>Nevada</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "nv_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as nevadacoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nevada_coaches = $row["nevadacoaches"];
    }
} else {
    echo "0 results";
}
 echo $nevada_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as nevadaplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nevada_players = $row["nevadaplayers"];
    }
} else {
    echo "0 results";
}
 echo $nevada_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as nevadatrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nevada_trny = $row["nevadatrny"];
    }
} else {
    echo "0 results";
}
 echo $nevada_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as nevadaincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nevada_income = $row["nevadaincome"];
    }
} else {
    echo "0";
}
 echo $nevada_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>

         
 <!-- NewHampshire Stats -->
  
  <tr> <td>New Hampshire</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "nh_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as newHampshirecoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newHampshire_coaches = $row["newHampshirecoaches"];
    }
} else {
    echo "0 results";
}
 echo $newHampshire_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as newHampshireplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newHampshire_players = $row["newHampshireplayers"];
    }
} else {
    echo "0 results";
}
 echo $newHampshire_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as newHampshiretrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newHampshire_trny = $row["newHampshiretrny"];
    }
} else {
    echo "0 results";
}
 echo $newHampshire_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as newHampshireincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newHampshire_income = $row["newHampshireincome"];
    }
} else {
    echo "0";
}
 echo $newHampshire_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>
  
 <!-- New Mexico Stats -->
  
  <tr> <td>New Mexico</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "nm_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as newmexicocoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newmexico_coaches = $row["newmexicocoaches"];
    }
} else {
    echo "0 results";
}
 echo $newmexico_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as newmexicoplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newmexico_players = $row["newmexicoplayers"];
    }
} else {
    echo "0 results";
}
 echo $newmexico_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as newmexicotrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newmexico_trny = $row["newmexicotrny"];
    }
} else {
    echo "0 results";
}
 echo $newmexico_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as newmexicoincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $newmexico_income = $row["newmexicoincome"];
    }
} else {
    echo "0";
}
 echo $newmexico_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>



    
 <!-- North Dakota Stats -->
  
  <tr> <td>North Dakota</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "nd_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as nodakcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nodak_coaches = $row["nodakcoaches"];
    }
} else {
    echo "0 results";
}
 echo $nodak_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as nodakplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nodak_players = $row["nodakplayers"];
    }
} else {
    echo "0 results";
}
 echo $nodak_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as nodaktrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nodak_trny = $row["nodaktrny"];
    }
} else {
    echo "0 results";
}
 echo $nodak_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as nodakincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nodak_income = $row["nodakincome"];
    }
} else {
    echo "0";
}
 echo $nodak_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>
  
  
  


  
 <!-- Oklahoma Stats -->
  
  <tr> <td>Oklahoma</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ok_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as oklcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $okl_coaches = $row["oklcoaches"];
    }
} else {
    echo "0 results";
}
 echo $okl_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as oklplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $okl_players = $row["oklplayers"];
    }
} else {
    echo "0 results";
}
 echo $okl_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as okltrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $okl_trny = $row["okltrny"];
    }
} else {
    echo "0 results";
}
 echo $okl_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as oklincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $okl_income = $row["oklincome"];
    }
} else {
    echo "0";
}
 echo $okl_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>






    <!-- Oregon Stats -->
  
  <tr> <td>Oregon</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "or_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as oregoncoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $oregon_coaches = $row["oregoncoaches"];
    }
} else {
    echo "0 results";
}
 echo $oregon_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as oregonplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $oregon_players = $row["oregonplayers"];
    }
} else {
    echo "0 results";
}
 echo $oregon_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as oregontrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $oregon_trny = $row["oregontrny"];
    }
} else {
    echo "0 results";
}
 echo $oregon_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as oregonincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $oregon_income = $row["oregonincome"];
    }
} else {
    echo "0";
}
 echo $oregon_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>

























    
 <!-- South Dakota Stats -->
  
  <tr> <td>South Dakota</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "sd_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as sodakcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sodak_coaches = $row["sodakcoaches"];
    }
} else {
    echo "0";
}
 echo $sodak_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as sodakplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sodak_players = $row["sodakplayers"];
    }
} else {
    echo "0";
}
 echo $sodak_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as sodaktrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sodak_trny = $row["sodaktrny"];
    }
} else {
    echo "0";
}
 echo $sodak_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as sodakincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sodak_income = $row["sodakincome"];
    }
} else {
    echo "0";
}
 echo $sodak_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>








    
 <!-- Utah Stats -->
  
  <tr> <td>Utah</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ut_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as utahcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $utah_coaches = $row["utahcoaches"];
    }
} else {
    echo "0 results";
}
 echo $utah_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as utahplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $utah_players = $row["utahplayers"];
    }
} else {
    echo "0 results";
}
 echo $utah_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as utahtrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $utah_trny = $row["utahtrny"];
    }
} else {
    echo "0 results";
}
 echo $utah_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as utahincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $utah_income = $row["utahincome"];
    }
} else {
    echo "0";
}
 echo $utah_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>







    
 <!-- Wyoming Stats -->
  
  <tr> <td>Wyoming</td>
    <td><?php
    
$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "wy_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$sql = "SELECT count(email) as wyomingcoaches FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $wyoming_coaches = $row["wyomingcoaches"];
    }
} else {
    echo "0 results";
}
 echo $wyoming_coaches; ?> </td>
    
    
    
    <td><?php 
    
    
$sql = "SELECT count(player_1) as wyomingplayers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $wyoming_players = $row["wyomingplayers"];
    }
} else {
    echo "0 results";
}
 echo $wyoming_players; ?> 
    
    
    </td>
    <td>  <?php 
    
    
$sql = "SELECT count(tournament) as wyomingtrny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $wyoming_trny = $row["wyomingtrny"];
    }
} else {
    echo "0 results";
}
 echo $wyoming_trny;  ?>
    </td>
    
    
        <td>  <?php 
    
    
$sql = "SELECT sum(amount) as wyomingincome FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $wyoming_income = $row["wyomingincome"];
    }
} else {
    echo "0";
}
 echo $wyoming_income; 
 
mysqli_close($conn); ?>
    </td>
  </tr>





      </div></div>
      </body></html>























</table>
      

</body>

</html> 