<?php
     
 session_start();
           if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
echo $tid;


//On page 1
$_SESSION['tid'] = $tid;
    


include_once("databaseconnect.php");

  $output = "http://admin.kansasgolfscores.com/c_kansas/girls/tourneyPicture.php?tid=$tid";
               

  $sql = "SELECT tournament, id, image FROM tournament
  WHERE id = '$tid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";      echo "<br>";
     
        $school = $row['school'];
        $image = $row['image'];
        $trny = $row['tournament'];
         echo "$trny Picture Upload</h1></font>";
     //  echo $image;
    }
} else {
    echo "no players";
}




?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Golf Team Rankings">
    <meta name="author" content="Greg Hobelmann">

    <title>Team Rankings</title>

    <!-- Bootstrap core CSS -->
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  
            <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
       <a class="navbar-brand" href="index.php"> Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="teamStats.php?tmid=<?php echo $tmid; ?>">
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tournaments.php">Tournament Upload Picture</a>
            </li>

    
          </ul>
        </div>
      </div>
      <br>
    </nav>
    
 
     <div class="row">
       
             
     
                <br>
     
        <div class="col-lg-12 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Upload jpg photos Only</h4>
            <div class="card-body">
            
              <p class="card-text">
  
        <div class="col-lg-8 portfolio-item">
          <div class="card h-100">
            <a href="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/tournament/<?php echo $image; ?>"> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/tournament/<?php echo $image; ?>" alt="<?php echo $image; ?>"> </a>
            <div class="card-body">
            
                    Only click upload once, it takes several seconds to upload picture.
              
                             
 <form action="uploadTourney.php" method="POST" enctype="multipart/form-data"> 
  <input type="file" name="file" value="<?php $row['tid']; ?>"> Upload JPG images only.
    <button type="submit" name="submit">Upload Image</button>
    </form>

 
    <?php   echo "<img src='../../global_style/vendor/QR/php/qr_img.php?d=$output'>";   ?>
              
                                                                               <br>
         Scan this code with your phone and then take and upload picture.     <br>
         
         
 
              
              </p>
            </div>
          </div>
        </div>   
     
     












 </div></div> </div>  </div>        

</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
