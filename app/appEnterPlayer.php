                    <?php session_start(); 

if(!isset($_SESSION['email']))
  // if there is no valid session
{
   header("Location:login-system/index.php");
}

?>

  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Coach Home Page">
    <title>Coach Home</title>
    <!-- Favicons-->
 <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    

    <link href="../includes/materialize/extras/noUiSlider/prism.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Coach Home</title>

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="../includes/materialize/extras/noUiSlider/nouislider.css">
       <script src="../includes/materialize/extras/noUiSlider/nouislider.js"></script>
          <script src="../includes/materialize/extras/noUiSlider/prism.js"></script>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <script src="../includes/bootstrap.min.js"></script>
 <script src="../includes/angular.min.js"></script>  
         
    <!-- Compiled and minified JavaScript -->
    
        <style>
    header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
    </style>
    

     </head>
<body>  
  

<div class="container">
        
        <a href="appIndex.php" data-target="slide-out" class="sidenav-trigger btn">Coaching Links</a>

        <ul id="slide-out" class="sidenav">
          <li>
            <div class="user-view">
              <div class="background">
                <center> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>" 
            alt="<?php echo $image; ?>" style="width:200px;height:142px;border:0;"> </a>
             </center> </div>
              <a href="">
                <br><br>
              </a>
              <a href="">
                <span class="white-text name"></span>
              </a>
              <a href="">
                <span class="white-text email"></span>
              </a>
            </div>
          </li>
          <li>
          <i class="material-icons">
            <a href="../app/appIndex.php">cloud </i>Home</a> 
          </li>
          <li>
            <a href="../login-system/logout.php">Logout</a> 
          </li>   
     
          <li>
            <div class="divider"></div>
          </li>
          <li>
             <a class="waves-effect" href="./appEnterPlayer.php">Enter Player</a>
          <a class="waves-effect" href="../editteam.php">Edit School Info</a>
          <a class="waves-effect" href="http://www.kansasgolfscores.com/teamRankingsAll.php?db=boys&state=ks" class="list-group-item">Rankings All</a>
          <a class="waves-effect" href="../EnterStats.php" class="list-group-item">Enter Stats</a>
          <a class="waves-effect" href="../coachesdirectory.php" class="list-group-item">See All Coaches</a>
          <a class="waves-effect" href="./appStats.php">Player Stats</a>
          </li>
        </ul>
        
 

        <br/>      <strong></strong>
<div class="col-md-12">
   <h3 align="center">Update Roster</h3>
   <div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
       <div class="col-md-4">
              <label>Name</label>
           <input type="text" name="player_1" ng-model="player_1" class="form-control">
           <br/>
           <label>Grade (9, 10, 11, 12)</label>
           <input type="text" name="grade" ng-model="grade" class="form-control" value="">
           <br/>
             <label>Password (For players to use to enter their stats)</label>
             <input type="password" name="password" ng-model="password" class="form-control">
           <br/>  <br/ >  

           
          <!--     <label>Active - 2 = Active, 3 = Inactive or not on Team.</label>
             <input type="text" name="active" ng-model="active" class="form-control">
           <br/>  <br/ >   -->

           <input type="hidden" ng-model="pid">
           <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
       </div><form>
       <div class="col-md-6">
           <table class="table table-bordered">
               <tr>
                   <th>PID</th>
                   <th>Name and Username for Player Login</th>
                   <th>Edit</th>
               </tr>
               <tr ng-repeat="x in names">
                   <td>{{x.pid}}</td>
                   <td>{{x.player_1}}</td>
                   <td>
                       <button class="btn btn-success btn-xs" 
                       ng-click="update_data(x.pid, x.player_1, x.grade, x.password, x.active, x.tmid)">
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
       } else if ($scope.grade == null) {
           alert("Enter Your grade"); 
       } else if ($scope.password == null) {
           alert("Enter Your Password");
       } else {
           $http.post(
               "../insert.php", {
                   'player_1': $scope.player_1,
                   'grade': $scope.grade,
                    'password': $scope.password,
                   
                   'btnName': $scope.btnName,
                   'pid': $scope.pid
               }
           ).success(function(data) {
               
               $scope.player_1 = null;
               $scope.grade = null;
                $scope.password= null;   
                $scope.active= null;
               $scope.btnName = "Insert";
               $scope.show_data();
           });
       }
   }
   $scope.show_data = function() {
       $http.get("./appDisplay.php")
           .success(function(data) {
               $scope.names = data;
           });
   }
   $scope.update_data = function(pid, player_1, grade, password, active) {
       $scope.pid = pid;
       $scope.player_1 = player_1;
       $scope.grade = grade;  
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



<h5>  <a href="../roster6A.php">Click Here to enter rosters for Other Schools.</a><br> </h5>
     </div>
</body>


</html>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    







