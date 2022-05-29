                                  <!DOCTYPE html>
<html  ng-app="APP">
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css"/>


</head>
<body>
<a href="page6.html">Next Example</a>
 
     <h2>
      Nice right, but that is just a few examples that make the page a little more animated.<br>
      What if you wanted to do something with databases like search for a name.     <br>
      Type letters or numbers in the box, see how the list reduced.<br>
    </h2>
    
        <div class ="container" ng-controller="theController">
            <input type="text" ng-model="search">
            <table class="table table-striped table-bordered">
        
            <thead>
                <td>id</td>
                <td>first</td>
                <td>last</td>
                <td>city</td>
            </thead>
            <tbody>
               <tr ng-repeat="user in users | filter:search">
               <td>{{user.id}}</td>                                            
                <td>{{user.first_name}}</td>                                           
                <td>{{user.last_name}}</td>                                           
                <td>{{user.eamil}}</td>                                           
                </tr>
            </tbody>
        </table>
      
      </div>                            
        
      
      
      
      
      
            <script type="text/javascript" src="../angular.min.js"></script>
      <script>
        angular.module('APP',[]).controller('theController',['$scope','$http',function($scope,$http){$http.jsonp('http://www.filltext.com/?rows=30&id={index}&fname={firstName}&lname={lastName}&city={city}&callback=JSON_CALLBACK').success(function(data){$scope.users=data
        })
                                                                                                    }])
      </script>

      <blockquote>
        This is using angularjs, the fun part is the page does not reload. It just sorts and searches for the data. Nice Right?





</body>
</html>
