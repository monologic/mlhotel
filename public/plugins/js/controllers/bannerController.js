app.controller('bannerController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('',
            {   'titulo':$scope.titulo,
                'imagen':$scope.imagen,
                'contenido':$scope.contenido,
                'orden':$scope.orden,
                'estado':$scope.estado
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
});