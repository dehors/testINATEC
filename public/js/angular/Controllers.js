angular.module("Controllers",[])
.controller('lessions',['$scope','Service',function($scope,Service){
	$scope.oneAtATime = true;
	Service.method($scope);

}])
.controller('lession',['$scope','Service',function($scope,Service){
	Service.method($scope);

}]);