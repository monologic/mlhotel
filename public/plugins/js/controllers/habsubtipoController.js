app.controller('habsubtipoController', function($scope,$http) {

     $scope.getHabSubtipos = function () {
        $http.get('admin/getHabSubtipos').then(function successCallback(response) {
            $scope.habsubtipos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    
});