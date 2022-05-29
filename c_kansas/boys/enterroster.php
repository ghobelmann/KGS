 <?php session_start(); 

 if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

?>


 
 

 
 <!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Update Roster</title>  

 <link rel="stylesheet" href="global_style/style/bootstrap.min.css">     
  <script src="global_style/js/jquery-2.1.4.min.js"></script>
  <script src="global_style/js/bootstrap.min.js"></script>
  <script src="global_style/js/angular.min.js"></script>  
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
            <label>Grade (9, 10, 11, 12)</label>
            <input type="text" name="grade" ng-model="grade" class="form-control" value="">
            <br/>
              <label>Password (For players to use to enter their stats)</label>
              <input type="password" name="password" ng-model="password" class="form-control">
            <br/>  <br/ >  
            
                <label>Active - 2 = Active, 3 = Inactive or not on Team.</label>
              <input type="text" name="active" ng-model="active" class="form-control">
            <br/>  <br/ >   

            <input type="hidden" ng-model="pid">
            <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
		</div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>PID</th>
                    <th>Name and Username for Player Login</th>
                    <th>Grade</th>
                    <th>Password - (Encrypted)</th>
                    <th>Active</th>
                    <th>Edit</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.pid}}</td>
                    <td>{{x.player_1}}</td>
                    <td>{{x.grade}}</td>
                     <td>{{x.password}}</td>
                      <td>{{x.active}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" 
                        ng-click="update_data(x.pid, x.player_1, x.grade, x.password, x.active, x.tmid)">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                    </td>
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
                "insert.php", {
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
        $http.get("display.php")
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





<h2>  <a href="roster6A.php">Click Here to enter rosters for Other Schools.</a><br>

 </body></html>
 
 
 
 
 
 
 