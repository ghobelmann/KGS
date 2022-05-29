   <?php
 //authentication for coaches to get to their pages, not for public pages.
 include_once("databaseconnect.php");
                       
    
    
                        
$sel = mysqli_query($conn,"select * from users");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("first_name"=>$row['first_name'],"last_name"=>$row['last_name']);
}
echo json_encode($data); 


  (function(angular) {
  'use strict';
angular.
 module('myServiceModule', []).
  controller('MyController', ['$scope', 'notify', function($scope, notify) {
    $scope.callNotify = function(msg) {
      notify(msg);
    };
  }]).
 factory('notify', ['$window', function(win) {
    var msgs = [];
    return function(msg) {
      msgs.push(msg);
      if (msgs.length === 3) {
        win.alert(msgs.join('\n'));
        msgs = [];
      }
    };
  }]);
})(window.angular);


 ?> 
 
 
 