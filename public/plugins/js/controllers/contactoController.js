app.controller('contactoController', function($scope,$http) {
     $scope.getContacto = function () {
        $http.get('admin/getContactos').then(function successCallback(response) {
            $scope.contactos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

   var idContacto;

   $scope.idContactor = 0;

    $scope.dataEditar = function (data) {

        idContacto = data.id;
        $scope.idContactor=data.id;
        $scope.mlasunto = data.asunto;
        $scope.mlnombre = data.nombre;
        $scope.mlcorreo = data.correo;
        $scope.mlmensaje = data.mensaje;
        $scope.mldatetime = data.updated_at;
    }

     $scope.eliminar = function (id) {
        $http.delete( 'admin/banner/'+id ).then(function successCallback(response) {
            $scope.banners = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }

});