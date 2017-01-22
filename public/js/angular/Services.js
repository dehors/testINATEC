angular.module("Servicies",[])
.service("Service", ['Constants','example',function(Constants,example){
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
			info: function($timeout, Service,msg){
				$scope.msginfo = false;
				$scope.msg = 'Lesson completed Do you want to restart?';
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