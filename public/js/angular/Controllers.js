angular.module("Controllers",[])
.controller('lessions',['$scope','Service',function($scope,Service){
	$scope.oneAtATime = true;
	Service.method($scope);

}])
.controller('lession',['$scope','Service','$timeout',function($scope,Service,$timeout){
	Service.msg($scope);
	Service.method($scope);
	Service.httpMethod($scope);

	angular.extend($scope,{
		hits: 0
	});

	$scope.max = 10;
	$scope.dynamic = $scope.hits;
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(spanish,obj){
			Service.msg($scope);
			if (angular.lowercase(spanish) == angular.lowercase($scope.VarSend)) {
				$scope.VarSend = '';
				if ($scope.hits == 10) {
					$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
				}else{
					$scope.hits++;
					$scope.hits++;
					if ($scope.hits == 10) {
						$scope.info($timeout, Service,'Lesson completed !!!.');
					}else{
						var index = $scope.examples.indexOf(obj);
						$scope.examples.splice(index, 1);
						console.log($scope.examples);
						$scope.success($timeout, Service);
					}
					$scope.dynamic = $scope.hits;
				}
				$scope.randomQuote = $scope.examples[Math.floor(Math.random() * $scope.examples.length)];
			} else {
				$scope.error($timeout, Service);
			}
		},
		cancel: function(){
			Service.msg($scope);
		}
	});

}]);