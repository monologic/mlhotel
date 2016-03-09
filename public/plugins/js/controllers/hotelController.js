app.controller('hotelController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/hotel',
            {   'nombre':$scope.nombre,
                'pais':$scope.pais,
                'region_estado':$scope.region,
                'ciudad':$scope.ciudad,
                'direccion':$scope.direccion,
                'telefono':$scope.telefono
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.getHoteles = function () {
        $http.get('admin/getHoteles').then(function successCallback(response) {
            $scope.hoteles = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    var dataAdmin;

    $scope.crearAdminHotel = function (hotel_id) {
        $http.post('admin/crearAdminHotel',
            {   
                'hotel_id': hotel_id,
            }).then(function successCallback(response) {
                dataAdmin = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.guardarAdminHotel = function () {
        $http.post('admin/guardarAdminHotel',
            {   'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':$('#sexo').val(),
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':dataAdmin.emptipo,
                'hotel_id':dataAdmin.hotel_id,
                'empleado':dataAdmin.empleado_id 
            }).then(function successCallback(response) {
                $scope.hoteles = response.data;
            }, function errorCallback(response) {
            });
    }
    $scope.dataEditar = function () {
        $http.post('admin/dataEditarHotel', { 'url' : window.location }).then(function successCallback(response) {
            $scope.data = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    
});