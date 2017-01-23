angular.module("Servicies",[])
.service("Service", ['Constants','example','result',function(Constants,example,result){
	this.msg = function($scope){
		angular.extend($scope,{
			msg: {},
			msgdanger: true,
			msginfo: true,
			msgwarning: true,
			msgsuccess: true,
			msgclose: function($timeout, Service) {
				$timeout(function(){
				Service.msg($scope);
				}, 3000);
			},
			success: function($timeout, Service){
				$scope.msgsuccess = false;
				$scope.msg = 'Right!!!';
				$scope.msgclose($timeout, Service);
			},
			error: function($timeout, Service){
				$scope.msgdanger = false;
				$scope.msg = 'wrong!!!';
				$scope.msgclose($timeout, Service);
			},
			info: function($timeout, Service,txt){
				$scope.msginfo = false;
				$scope.msg = txt;
			}
		});
	},
	this.httpMethod = function($scope){
		angular.extend($scope,{
			getAll: function(entity){
				if (entity == 'Examples') {
					example.query({'token':''}, function(data){
						$scope.examples = data.data;
						$scope.displayVars($scope.examples);						
					}, function(data){
						$scope.errorsData(data);
					});
				};
			},
			create: function(entity,R1,R2,R3,R4,user,saveTrue){
				$scope.results = {
					'results':{
						'user_id':user,
						'lesson1':R1,
						'lesson2':R2,
						'lesson3':R3,
						'lesson4':R4
					}
				}
				if (entity == 'Results') {
					result.save($scope.results, function(data){
						$scope.results.id_result = data.data;
						$scope.results.user_id = user;
						$scope.results.R1 = R1;
						$scope.results.R2 = R2;
						$scope.results.R3 = R3;
						$scope.results.R4 = R4;
						$scope.saveTrue = saveTrue;
					}, function(data){
						// console.log(data);
					});
				}
			},
			edit: function(entity,R1,R2,R3,R4,user,id_result,saveTrue){
				$scope.results = {
					'results':{
						'user_id':user,
						'lesson1':R1,
						'lesson2':R2,
						'lesson3':R3,
						'lesson4':R4
					}
				}
				if (entity == 'Results') {
					result.update({'results':id_result},$scope.results, function(data) {
						$scope.results.id_result = id_result;
						$scope.results.user_id = user;
						$scope.results.R1 = R1;
						$scope.results.R2 = R2;
						$scope.results.R3 = R3;
						$scope.results.R4 = R4;
						$scope.saveTrue = saveTrue;
					}, function(data){
						// console.log(data);
					});
				}
			}
		});
	}
	this.method = function($scope){
		angular.extend($scope,{
			lessons: 
			[
				{
					id: '1',
					title: 'Lession #1',
					content: '<p>Information of the lession</p>'
				},
				{
					id: '2',
					title: 'Lession #2',
					content: '<p>Information of the lession</p>'
				},
				{
					id: '3',
					title: 'Lession #3',
					content: '<p>Information of the lession</p>'
				},
				{
					id: '4',
					title: 'Lession #4',
					content: '<p>Information of the lession</p>'
				},
				{
					id: '5',
					title: 'Lession #5',
					content: '<p>Information of the lession</p>'
				}
			],
			displayVars: function(examples){
				$scope.auxSelectImg = [];
				$scope.aux = [];
				var aux = 0;
				for (var i = 0 ; i < 3; i++) {

					var x = 0;
					do {
						aux = Math.floor(Math.random() * examples.length);
						x = 0;
						angular.forEach($scope.aux, function(value){
							if (examples[aux].id == examples[value].id) {
								x = 1;
							}
						});
					}
					while (x > 0);

					$scope.aux = [aux];
					$scope.auxSelectImg.push(examples[aux]);
				}
				$scope.optionSelect = $scope.auxSelectImg[Math.floor(Math.random() * $scope.auxSelectImg.length)];
				do{
					i = 0
					$scope.optionCompleted = $scope.auxSelectImg[Math.floor(Math.random() * $scope.auxSelectImg.length)];
					if ($scope.optionCompleted.type != 0) {
						i++;
					}
					console.log(i);
				}while(i <= 0);
				$scope.aux = $scope.optionCompleted.english.split(' ');

				$scope.optionCompletedS = '';
				if ($scope.optionCompleted.type == 1) {
					$scope.optionCompletedF = $scope.aux[0];
					angular.forEach($scope.aux,function(value,index){
						if (index != 0 && index != 1) {
							$scope.optionCompletedS = $scope.optionCompletedS +' '+ value;
						}
					});
				}else{
					angular.forEach($scope.aux,function(value,index){
						if (index != 0) {
							$scope.optionCompletedS = $scope.optionCompletedS +' '+ value;
						}
					});
				}

				$scope.randomQuote = examples[Math.floor(Math.random() * examples.length)];
			}
		});
	}
}]);