
<?php
include 'db.php';
$usderid = '';
$name = '';
$id = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>USD 237 Subs</title>
  <link rel="icon" href="images/fav/favicon.ico" type="image/gif" sizes="16x16">
  <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- Latest compiled and minified CSS -->
  <!-- Need This One!!! -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


  <title>USD 237 Subs</title>
     <link rel="icon" href="images/fav/favicon.ico" type="image/gif" sizes="16x16">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body>

<nav>
    <nav class="green lighten-1" role="navigation">

    <div class="nav-wrapper">
    <img src="images/logo.png" alt="LOGO" width="50" height="50">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="gs.php">Grade School</a></li>
        <li><a href="hs.php">High School</a></li>
         <li><a href="tc.php">Teacher Cover</a></li>
      </ul>
    </div>
  </nav></div>


  <div class="container">


      <!--   Icon Section   -->
      <div class="row">

  


    <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=08" id="download-button8" class="btn-small waves-effect waves-light red"  value="08">August</a>
        <a href="subsByMonthReg.php?month=08" id="download-button8" class="btn-small waves-effect waves-light green"  value="08">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=08" id="download-button8" class="btn-small waves-effect waves-light blue"  value="08">Special Ed</a>
        <a href="tCover.php?month=08" id="download-button9" class="btn-small waves-effect waves-light blue"  value="08">Teacher Cover</a>
      </div></div></div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="09">September</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="09">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="09">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="09">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=10" id="download-button9" class="btn-small waves-effect waves-light red"  value="10">October</a>
        <a href="subsByMonthReg.php?month=10" id="download-button9" class="btn-small waves-effect waves-light green"  value="10">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=10" id="download-button9" class="btn-small waves-effect waves-light blue"  value="10">Special Ed</a>
        <a href="tCover.php?month=10" id="download-button1" class="btn-small waves-effect waves-light blue"  value="10">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=11" id="download-button9" class="btn-small waves-effect waves-light red"  value="11">November</a>
        <a href="subsByMonthReg.php?month=11" id="download-button9" class="btn-small waves-effect waves-light green"  value="11">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=11" id="download-button9" class="btn-small waves-effect waves-light blue"  value="11">Special Ed</a>
        <a href="tCover.php?month=11" id="download-button1" class="btn-small waves-effect waves-light blue"  value="11">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=12" id="download-button9" class="btn-small waves-effect waves-light red"  value="12">December</a>
        <a href="subsByMonthReg.php?month=12" id="download-button9" class="btn-small waves-effect waves-light green"  value="12">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=12" id="download-button9" class="btn-small waves-effect waves-light blue"  value="12">Special Ed</a>
        <a href="tCover.php?month=12" id="download-button1" class="btn-small waves-effect waves-light blue"  value="12">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="01">January</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="01">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="01">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="01">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="02">February</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="02">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="02">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="02">Teacher Cover</a>
      </div>  
        </div>
        <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="03">March</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="03">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="03">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="03">Teacher Cover</a>
      </div>  
        </div>
                <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="04">April</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="04">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="04">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="04">Teacher Cover</a>
      </div> 
      
              <div class="col s6 m6 l12">
        <a href="subsByMonth.php?month=09" id="download-button9" class="btn-small waves-effect waves-light red"  value="05">May</a>
        <a href="subsByMonthReg.php?month=09" id="download-button9" class="btn-small waves-effect waves-light green"  value="05">Regular Ed</a>
        <a href="subsByMonthSpec.php?month=09" id="download-button9" class="btn-small waves-effect waves-light blue"  value="05">Special Ed</a>
        <a href="tCover.php?month=09" id="download-button1" class="btn-small waves-effect waves-light blue"  value="05">Teacher Cover</a>
      </div> 
      


</div></div>
 

  </body>
</html>




    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>