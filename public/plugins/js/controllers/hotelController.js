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

     $scope.getHotelesF = function () {
        $http.get('/getHotelF').then(function successCallback(response) {
            $scope.infos = response.data;
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

    /**
     * Al hacer click en Editar admin 
     */
    $scope.dataEditarAdmin = function (data) {

        dataAdmin = data;

        $scope.nombre = data.nombres;
        $scope.apellido = data.apellidos;
        $scope.nacimiento = data.fecha_nac;
        $scope.dni = data.dni;
        $scope.direccion = data.direccion;
        $scope.celular = data.celular;
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
                'empleado':dataAdmin.id 
            }).then(function successCallback(response) {
                $scope.hoteles = response.data;
            }, function errorCallback(response) {
            });
    }

    var idHotel;
    $scope.dataEditar = function (data) {

        idHotel = data.id;

        $scope.nomHotel = data.nombre;
        $scope.paisHotel = data.pais;
        $scope.regHotel = data.region_estado;
        $scope.ciuHotel = data.ciudad;
        $scope.dirHotel = data.direccion;
        $scope.fonoHotel = data.telefono;
    }
    $scope.editarHotel = function () {

        $http.put('admin/hotel/'+idHotel,
            {   'nombre':$scope.nomHotel,
                'pais':$scope.paisHotel,
                'region_estado':$scope.regHotel,
                'ciudad':$scope.ciuHotel,
                'direccion':$scope.dirHotel,
                'telefono':$scope.fonoHotel
            }).then(function successCallback(response) {
                 $scope.hoteles = response.data;
            }, function errorCallback(response) {
                
            });
    }

    $scope.eliminar = function (id) {
        $http.delete( 'admin/hotel/'+id ).then(function successCallback(response) {
            $scope.hoteles = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }
    




    
});