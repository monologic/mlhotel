app.controller('cargoController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/emptipo',
            {   'tipo':$scope.tipo,
                'descripcion':$scope.descripcion
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
});