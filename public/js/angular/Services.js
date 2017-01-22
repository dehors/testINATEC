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
						$scope.randomQuote = $scope.examples[Math.floor(Math.random() * $scope.examples.length)];
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
				}
			]
		});
	}
}]);