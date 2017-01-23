angular.module("Controllers",[])
.controller('lessions',['$scope','Service',function($scope,Service){
	$scope.oneAtATime = true;
	Service.method($scope);

}])
.controller('lession1',['$scope','Service','$timeout',function($scope,Service,$timeout){
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
			R5: document.getElementById("results5").value,
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
								// $scope.create('Results',$scope.hits/2,0,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								// $scope.edit('Results',$scope.hits/2,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							// $scope.edit('Results',$scope.hits/2,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed and saved!!!.');
							if ($scope.results.R1 == null) {
								$scope.create('Results',$scope.hits/2,0,0,0,$scope.results.user_id,$scope.saveTrue);
							}else{
								$scope.edit('Results',$scope.hits/2,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
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
			$scope.edit('Results',0,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}])
.controller('lession2',['$scope','Service','$timeout',function($scope,Service,$timeout){
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
			R5: document.getElementById("results5").value,
			id_result: document.getElementById("id_result").value,
			user_id: document.getElementById("user_id").value
		},
		saveTrue: 0,
	});

	$scope.max = 10;
	if ($scope.results.R2 == 5) {
		$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
	}
	if ($scope.results.R2 != '') {
		$scope.hits = $scope.results.R2*2;
		$scope.dynamic = $scope.results.R2*2;
	} else {
		$scope.dynamic = $scope.hits;
	}
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(english,obj){
			Service.msg($scope);
			if (angular.lowercase(english) == angular.lowercase($scope.VarSend)) {
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
						if ($scope.results.R2 == '') {
							if ($scope.saveTrue == 0) {
								// $scope.create('Results',0,$scope.hits/2,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed and saved!!!.');
							if ($scope.results.R2 == null) {
								$scope.create('Results',0,$scope.hits/2,0,0,$scope.results.user_id,$scope.saveTrue);
							}else{
								$scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
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
			$scope.edit('Results',$scope.results.R1,0,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}])
.controller('lession3',['$scope','Service','$timeout',function($scope,Service,$timeout){
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
			R5: document.getElementById("results5").value,
			id_result: document.getElementById("id_result").value,
			user_id: document.getElementById("user_id").value
		},
		saveTrue: 0,
		loopFor:0
	});

	$scope.max = 10;
	if ($scope.results.R3 == 5) {
		$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
	}
	if ($scope.results.R3 != '') {
		$scope.hits = $scope.results.R3*2;
		$scope.dynamic = $scope.results.R3*2;
	} else {
		$scope.dynamic = $scope.hits;
	}
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(english,obj){
			Service.msg($scope);
			if (angular.lowercase(english) == angular.lowercase($scope.optionSelect.english)) {
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
						angular.forEach($scope.examples,function(value){
							if (value.id == obj) {
							var index = $scope.examples.indexOf(value);
							$scope.examples.splice(index, 1);
							}
						});
						if ($scope.hits == 9) {
							$scope.hits++;
						}
						if ($scope.results.R3 == '') {
							if ($scope.saveTrue == 0) {
								// $scope.create('Results',0,$scope.hits/2,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed and saved!!!.');
							if ($scope.results.R3 == null) {
								$scope.create('Results',0,0,$scope.hits/2,0,$scope.results.user_id,$scope.saveTrue);
							}else{
								$scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.hits/2,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						}else{
							$scope.success($timeout, Service);
						}
					}
					$scope.displayVars($scope.examples);
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
			$scope.displayVars($scope.examples);
		},
		restart: function(){
			$scope.edit('Results',$scope.results.R1,$scope.results.R3,0,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}])
.controller('lession4',['$scope','Service','$timeout',function($scope,Service,$timeout){
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
			R5: document.getElementById("results5").value,
			id_result: document.getElementById("id_result").value,
			user_id: document.getElementById("user_id").value
		},
		saveTrue: 0,
	});

	$scope.colors = [
	{name:'is'},
	{name:'are'},
	{name:'i'},
	{name:'a'},
	{name:'an'}
	];

	$scope.max = 10;
	if ($scope.results.R4 == 5) {
		$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
	}
	if ($scope.results.R4 != '') {
		$scope.hits = $scope.results.R4*2;
		$scope.dynamic = $scope.results.R4*2;
	} else {
		$scope.dynamic = $scope.hits;
	}
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(english,obj,ngselected){
			Service.msg($scope);
			if ($scope.optionCompleted.type == 1) {
				$scope.auxSelect = angular.lowercase($scope.optionCompletedF+' '+ngselected['name']+$scope.optionCompletedS);
			}else{
				$scope.auxSelect = angular.lowercase(ngselected['name']+$scope.optionCompletedS);
			}
			if (angular.lowercase(english) == $scope.auxSelect) {
				if ($scope.hits == 10) {
					$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
				}else{
					$scope.hits++;
					if ($scope.hits != 9) {
						$scope.hits++;
					}
					if ($scope.hits == 10) {
						$scope.info($timeout, Service,'<Lesson></Lesson> completed !!!.');
					}else{
						var index = $scope.examples.indexOf(obj);
						$scope.examples.splice(index, 1);
						if ($scope.hits == 9) {
							$scope.hits++;
						}
						if ($scope.results.R4 == '') {
							if ($scope.saveTrue == 0) {
								// $scope.create('Results',0,$scope.hits/2,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							// $scope.edit('Results',$scope.results.R1,$scope.hits/2,$scope.results.R3,$scope.results.R4,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed and saved!!!.');
							if ($scope.results.R4 == null) {
								$scope.create('Results',0,0,0,$scope.hits/2,$scope.results.user_id,$scope.saveTrue);
							}else{
								$scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,$scope.hits/2,$scope.results.R5,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						}else{
							$scope.success($timeout, Service);
						}
						$scope.displayVars($scope.examples);
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
			$scope.displayVars($scope.examples);
		},
		restart: function(){
			$scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,0,$scope.results.R4,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}])
.controller('lession5',['$scope','Service','$timeout',function($scope,Service,$timeout){
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
			R5: document.getElementById("results5").value,
			id_result: document.getElementById("id_result").value,
			user_id: document.getElementById("user_id").value,
			VarSend: ''
		},
		saveTrue: 0,
	});

	$scope.colors = [
	{name:'is'},
	{name:'are'},
	{name:'i'},
	{name:'a'},
	{name:'an'}
	];

	$scope.max = 10;
	if ($scope.results.R5 == 5) {
		$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
	}
	if ($scope.results.R5 != '') {
		$scope.hits = $scope.results.R5*2;
		$scope.dynamic = $scope.results.R5*2;
	} else {
		$scope.dynamic = $scope.hits;
	}
	$scope.getAll('Examples');

	angular.extend($scope,{
		send: function(english,obj,ngselected){
			Service.msg($scope);

			if ($scope.type == 4) {
				if ($scope.optionCompleted.type == 1) {
					$scope.auxSelect = angular.lowercase($scope.optionCompletedF+' '+ngselected['name']+$scope.optionCompletedS);
				}else{
					$scope.auxSelect = angular.lowercase(ngselected['name']+$scope.optionCompletedS);
				}
			}
			if ($scope.type == 1 || $scope.type == 2) {
				$scope.auxSelect = ngselected;
				console.log($scope.ngselected);
			}
			if ($scope.type == 3 || $scope.type == 5) {
				$scope.auxSelect = angular.lowercase($scope.optionSelect.english);
			}
			console.log(angular.lowercase(english)+' '+$scope.auxSelect+' '+$scope.type);
			if (angular.lowercase(english) == $scope.auxSelect) {
				if ($scope.hits == 10) {
					$scope.info($timeout, Service,'Lesson completed !!!. Do you want to restart?');
				}else{
					$scope.hits++;
					if ($scope.hits != 9) {
						$scope.hits++;
					}
					if ($scope.hits == 10) {
						$scope.info($timeout, Service,'<Lesson></Lesson> completed !!!.');
					}else{
						var index = $scope.examples.indexOf(obj);
						$scope.examples.splice(index, 1);
						if ($scope.hits == 9) {
							$scope.hits++;
						}
						if ($scope.results.R4 == '') {
							if ($scope.saveTrue == 0) {
								// $scope.create('Results',0,$scope.hits/2,0,0,$scope.results.user_id,$scope.saveTrue);
								$scope.saveTrue = 1;
							} else {
								// $scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.hits/2,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						} else {
							// $scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.hits/2,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
						}
						if ($scope.hits == 10) {
							$scope.info($timeout, Service,'Lesson completed and saved!!!.');
							if ($scope.results.R4 == null) {
								$scope.create('Results',0,0,0,$scope.hits/2,$scope.results.user_id,$scope.saveTrue);
							}else{
								$scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,$scope.results.R4,$scope.hits/2,$scope.results.user_id,$scope.results.id_result,$scope.saveTrue);
							}
						}else{
							$scope.success($timeout, Service);
						}
						$scope.displayVars($scope.examples);
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
			$scope.displayVars($scope.examples);
		},
		restart: function(){
			$scope.edit('Results',$scope.results.R1,$scope.results.R2,$scope.results.R3,$scope.results.R4,0,$scope.results.user_id,$scope.results.id_result);
			$scope.getAll('Examples');
			$scope.hits = 0;
			$scope.dynamic = $scope.hits;
			Service.msg($scope);
			$scope.VarSend = '';
		}
	});

}]);