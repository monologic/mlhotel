app.controller('empleadoController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/empleado',
            {   'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':$('#sexo').val(),
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':$('#emptipo_id').val()
                //'hotel_id':$('#hotel_id').text()
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.getEmptipos = function () {
        $http.get('admin/getEmptipos').then(function successCallback(response) {
            console.log(response.data);
            $scope.emptipos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    
});