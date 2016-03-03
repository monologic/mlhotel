app.controller('empleadoController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/empleado',
            {   'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':"masculino",
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':$scope.emptipo_id,
                'hotel_id':"1"
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
});