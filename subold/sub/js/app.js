var app = angular.module('myApp', []);


app.controller("MainController",['$scope',function($scope){

   $scope.data = [{ 
	              {firstName:" ",lastName:" ",
	                   password:" ",grade:" "                
	              } ];


	$scope.players = angular.copy( $scope.data);
	 $scope.enabledEdit =[];

    $scope.addPlayer = function(){
	    var emp ={ firstName:"",lastName:"",
	                   password:"",grade:"",disableEdit:false};
		$scope.players.push(emp);
		 $scope.enabledEdit[$scope.players.length-1]=true;
	}
	$scope.editPlayer = function(index){
		console.log("edit index"+index);
		$scope.enabledEdit[index] = true;
	}
	$scope.deletePlayer = function(index) {
		  $scope.players.splice(index,1);
	}
	
	$scope.submitPlayer = function(){

		console.log("form submitted:"+angular.toJson($scope.players ));
	}
	
}]);
