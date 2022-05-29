<?php


session_start();


include_once("dbconnectg.php");

 
?> 
    




<?php

//Get number of Name to Search For.
if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}
 $_SESSION['tmid'] = $tmid;
//echo $tmid;

$output = "http://www.kansasgolfscores.com/teamStats.php?tmid=$tmid";

 //    if($perm != '9')
   // if there is no valid session
//{
 //   header("Location:login-system/index.php");
//}
?>   

 <?php
  $sql = "SELECT team.tmid, users.tmid, users.first_name, users.last_name, image, school FROM team INNER JOIN users on team.tmid = users.tmid WHERE team.tmid = $tmid LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";
      echo "Team Page</h1></font>";
        $school = $row['school'];
        $tmid = $row['tmid'];
        $first = $row['first_name'];
        $last = $row['last_name'];
        $image = $row['image'];
      // echo $image;
    }
} else {
    echo "no players";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="global_style/vendor/portfolio-item.css" rel="stylesheet">     '
    
    
    <style>  
    body 
     {
    background-image: url("images/footerLight.png");
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100%;
    margin-right: 20px;
    
     }
     
     
     hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 4px;
}
    
    </style>

  </head>

  <body>
  
  

         
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
               <a class="navbar-brand" href="index.php">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <span class="sr-only">(current)</span>
              </a>
            </li>
       
      
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    
   

               
               
               
               
               


      <!-- Portfolio Item Heading
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
                        -->
      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-4">
        
        
                  <a href="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>"> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>" alt="<?php echo $image; ?>"> </a>
            
            
  
        </div>

        <div class="col-md-8">
     <!--     <h3 class="my-3"><u>Roster</u></h3>    -->
    
         
          </ul>
          
               <h4 class="my-3"><u>Coach: <?php echo $first; ?> <?php echo $last; ?></u></h4>
         

     <br>

      </ul>
    
  
     
        Select New Picture     
 <form action="teamUpload.php?tmid=<?php echo $tmid; ?>" method="POST" enctype="multipart/form-data"> 
  <input type="file" name="file"> Upload New Picture JPG format only.
    <button type="submit" name="submit">Upload Image</button>
    </form> <?php echo $tmid; ?> 
          
        </div>
        
        


      </div>
      
      
  <h3>Note After you upload picture you may have to clear browser cache before you can see it.</h3>    
      
      <!-- /.row -->
                     <hr>
 

    </div> 
    <!-- /.container -->
    
    
    
    

    <!-- Footer 
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2017</p>
      </div>  

    </footer>  -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <br><br><br>
  </body>

</html>




