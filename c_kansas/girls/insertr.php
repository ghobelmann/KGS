<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

  </head><body>
 
 






  <?php
 //authentication for coaches to get to their pages, not for public pages.
 include_once("databaseconnect.php");
?> 
 
 
 
  <!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title>Webslesson Tutorial | AngularJS Tutorial with PHP - Insert Data into Mysql Database</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">AngularJS Tutorial with PHP - Insert Data into Mysql Database</h3>  
                <div ng-app="myapp" ng-controller="usercontroller">  
                     <label>First Name</label>  
                     <input type="text" name="first_name" ng-model="firstname" class="form-control" />  
                     <br />  
                     <label>Last Name</label>  
                     <input type="text" name="last_name" ng-model="lastname" class="form-control" />  
                     <br />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="ADD"/>  
                </div>  
           </div>  
      </body>  
 </html>  
 
 
 
 
<?php  
 //insert.php  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($conn, $data->firstname);       
      $last_name = mysqli_real_escape_string($conn, $data->lastname);  
      $query = "INSERT INTO users(first_name, last_name) VALUES ('$first_name', '$last_name')";  
      if(mysqli_query($conn, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  