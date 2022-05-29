<?php session_start(); 

if(!isset($_SESSION['email']))
  // if there is no valid session
{
   header("Location:login-system/index.php");
}

?>

  <?php

if(!empty($_GET['state']))
{
$state = $_GET['state'];
}
 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}
$dataBase = $db;

        include_once("databaseconnect.php");  

        $user = ($_SESSION['email']);
//echo $user;
       
$sql = "SELECT email, id FROM users WHERE email = '$user'";
$result = mysqli_query($link, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $userid = $row["id"];
        $email = $row["email"];
     
    }
    echo $userid;
    echo $email;
    
} else {
    echo "no results";
}


?> 




<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Update Roster</title>  
 <script src="../../includes/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="../../includes/bootstrap.min.css">     

 <script src="../../includes/bootstrap.min.js"></script>
 <script src="../../includes/angular.min.js"></script>  
</head>  
<body>  
<div class="col-md-12">
   <h3 align="center">Update Roster</h3>
 <a href="index.php">Go to Coaches Home Page</a>
   <div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
       <div class="col-md-4">
              <label>Name</label>
           <input type="text" name="player_1" ng-model="player_1" class="form-control">
           <br/>
           <label>Age (7, 8, 9 ...)</label>
           <input type="text" name="age" ng-model="age" class="form-control" value="">
           <br/>

           <input type="radio" id="male" name="gender" ng-model="gender" value="Boys">
<label for="male">Boys</label><br>
<input type="radio" id="female" name="gender"  ng-model="gender" value="Girls">
<label for="female">Girls</label><br>


             <label>Password (For players to use to enter their stats)</label>
             <input type="password" name="password" ng-model="password" class="form-control" value="1">
           <br/>
       
           <input type="hidden" name="active" ng-model="active" class="form-control" value="2">
           <br/>  <br/ >  
           
    
           <br/>  <br/ >  

           <input type="hidden" ng-model="pid">
           <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
       </div><form>
       <div class="col-md-6">
           <table class="table table-bordered">
               <tr>
                   <th>PID</th>
                   <th>Name and Username for Player Login</th>
                   <th>Age</th>
                   <th>Gender</th>
                   <th>Edit</th>
               </tr>
               <tr ng-repeat="x in names">
                   <td>{{x.pid}}</td>
                   <td>{{x.player_1}}</td>
                   <td>{{x.age}}</td>
                   <td>{{x.gender}}</td>
                   <td>
                       <button class="btn btn-success btn-xs" 
                       ng-click="update_data(x.pid, x.player_1, x.age, x.gender, x.password, x.active)">
                           <span class="glyphicon glyphicon-edit"></span> Edit
                       </button>
                   </td></form>
                   <td>
                     <!--  <button class="btn btn-danger btn-xs" ng-click="delete_data(x.pid)">
                           <span class="glyphicon glyphicon-trash"></span> Delete
                       </button>   -->
                   </td>
               </tr>
           </table>
       </div>
   </div>
</div>
<script>  
var app = angular.module("sa_app", []);
app.controller("controller", function($scope, $http) {
   $scope.btnName = "Insert";
   $scope.insert = function() {
       if ($scope.player_1 == null) {
           alert("Enter Your Name");
       } else if ($scope.age == null) {
           alert("Enter Your age"); 
           } else if ($scope.gender == null) {
           alert("Enter gender"); 
       } else if ($scope.password == null) {
           alert("Enter Your Password");
       } else {
           $http.post(
               "insert.php", {
                   'player_1': $scope.player_1,
                   'age': $scope.age,
                   'gender': $scope.gender,
                    'password': $scope.password,
                    'active': $scope.active,
                   'btnName': $scope.btnName,
                   'pid': $scope.pid
               }
           ).success(function(data) {
               
               $scope.player_1 = null;
               $scope.age = null;
               $scope.gender = null;
                $scope.password= null;   
                $scope.active= null;
               $scope.btnName = "Insert";
               $scope.show_data();
           });
       }
   }
   $scope.show_data = function() {
       $http.get("display.php")
           .success(function(data) {
               $scope.names = data;
           });
   }
   $scope.update_data = function(pid, player_1, age, gender, password, active) {
       $scope.pid = pid;
       $scope.player_1 = player_1;
       $scope.age = age;  
       $scope.gender = gender;  
       $scope.password = password;    
       $scope.active= active;
       $scope.btnName = "Update";
   }
   $scope.delete_data = function(pid) {
       if (confirm("Are you sure you want to delete?")) {
           $http.post("delete.php", {
                   'pid': pid
               })
               .success(function(data) {
                 
                   $scope.show_data();
               });
       } else {
           return false;
       }
   }
});
</script>  




</body></html>






