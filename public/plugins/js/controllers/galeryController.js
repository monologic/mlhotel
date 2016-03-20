app.controller('galeryController', function($scope,$http) {
     $scope.getfoto = function () {
        $http.get('admin/getGaleryPhoto').then(function successCallback(response) {
            $scope.fotos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }    
});