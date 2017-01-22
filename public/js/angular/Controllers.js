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
		hits: 0,
		results:{
			R1: document.getElementById("results1").value,
			R2: document.getElementById("results2").value,
			R3: document.getElementById("results3").value,
			R4: document.getElementById("results4").value,
			id_result: document.getElementById("id_result").value,
			user_id: document.getElementById("user_id").value
		},
		saveTrue: 0,
	});

	$scope.max = 10;
	if ($scope.results.R1 == 5) {
		$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
	}
	if ($scope.results.R1 != '') {
		$scope.hits = $scope.results.R1*2;
		$scope.dynamic = $scope.results.R1*2;
	} else {
		$scope.dynamic = $scope.hits;
	}
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(spanish,obj){
			Service.msg($scope);
			if (angular.lowercase(spanish) == angular.lowercase($scope.VarSend)) {
				if ($scope.hits == 10) {
					$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
				}else{
					$scope.hits++;
					if ($scope.hits != 9) {
						$scope.hits++;
					}
					if ($scope.hits == 10) {
						$scope.info($timeout, Service,'Lesson completed !!!.');
					}else{
						var index = $scope.examples.indexOf(obj);
						$scope.examples.splice(index, 1);
						if ($scope.hits == 9) {
							$scope.hits++;
						}
						if ($scope.results.R1 == '') {
							if ($scope.saveTrue == 0) {
								$scope.create('Results',$scope.hits/2,0,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								$scope.edit('Results',$scope.hits/2,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							$scope.edit('Results',$scope.hits/2,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed !!!.');
						}else{
							$scope.success($timeout, Service);
						}
						$scope.VarSend = '';
						$scope.randomQuote = $scope.examples[Math.floor(Math.random() * $scope.examples.length)];
					}
					$scope.dynamic = $scope.hits;
				}
			} else {
				$scope.error($timeout, Service);
			}
		},
		cancel: function(){
			Service.msg($scope);
		},
		next: function(){
			Service.msg($scope);
			$scope.randomQuote = $scope.examples[Math.floor(Math.random() * $scope.examples.length)];
		},
		restart: function(){
			$scope.edit('Results',0,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}]);