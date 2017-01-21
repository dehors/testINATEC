angular.module("Servicies",[])
.service("Service", ['Constants',function(Constants){
	this.msg = function($scope){
		angular.extend($scope,{

		});
	},
	this.httpMethod = function($scope){

	}
	this.method = function($scope){
		angular.extend($scope,{
			lessons: 
			[
				{
					id: '1',
					title: 'lession #1',
					content: '<p>Info of the lession</p>'
				},
				{
					id: '2',
					title: 'lession #2',
					content: '<p>Info of the lession</p>'
				},
				{
					id: '3',
					title: 'lession #3',
					content: '<p>Info of the lession</p>'
				},
				{
					id: '4',
					title: 'lession #4',
					content: '<p>Info of the lession</p>'
				}
			]			
		});
	}
}]);