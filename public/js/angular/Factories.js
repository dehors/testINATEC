angular.module('Factories', [])
.factory("example", ['$resource', 'Constants', function($resource, Constants) {
  return $resource(Constants.URL_API + '/examples/:examples', {}, {
    query: {method: 'GET', isArray: false }
  });
}]);