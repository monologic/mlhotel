app.controller('noticiaController', function($scope,$http) {
     $scope.getNoticias = function () {
        $http.get('admin/getNoticias').then(function successCallback(response) {
            $scope.noticia = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }    
});