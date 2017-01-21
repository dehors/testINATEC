angular.module("Controllers",[])
.controller('lessions',['$scope',function($scope){

	$scope.groups = [
	{
		title: 'lession #1',
		content: '<p>Info of the lession</p>',
		url: ''
	},
	{
		title: 'lession #2',
		content: '<p>Info of the lession</p>',
		url: ''
	},
	{
		title: 'lession #3',
		content: '<p>Info of the lession</p>',
		url: ''
	},
	{
		title: 'lession #4',
		content: '<p>Info of the lession</p>',
		url: ''
	}
	];

}]);