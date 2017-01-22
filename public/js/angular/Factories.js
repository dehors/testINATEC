angular.module('Factories', [])
.factory("example", ['$resource', 'Constants', function($resource, Constants) {
  return $resource(Constants.URL_API + '/examples/:examples', {}, {
    query: {method: 'GET', isArray: false }
  });
}])
.factory("result", ['$resource', 'Constants', function($resource, Constants) {
  return $resource(Constants.URL_API + '/results/:results', {}, {
    save: {method:'POST'},
    update: {method:'PUT'}
  });
}]);