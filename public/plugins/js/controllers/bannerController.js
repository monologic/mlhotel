app.controller('bannerController', function($scope,$http) {
     $scope.getBanners = function () {
        $http.get('admin/getBanners').then(function successCallback(response) {
            $scope.banners = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

   var idBanner;

   $scope.idslider = 0;

    $scope.dataEditar = function (data) {

        idBanner = data.id;
        $scope.idslider=data.id;
        $scope.mltitulo = data.titulo;
        $scope.mlcontenido = data.contenido;
        $scope.mlestado = data.estado;
        $scope.mlorden = data.orden;
    }
     $scope.editarBanner = function () {

        $http.put('admin/banner/'+idBanner,
            {   'titulo':$scope.mltitulo,
                'contenido':$scope.mlcontenido,
                'estado':$scope.mlestado,
                'orden':$scope.mlorden,
            }).then(function successCallback(response) {
                 $scope.banners = response.data;
            }, function errorCallback(response) {
                
            });
    }

     $scope.eliminar = function (id) {
        $http.delete( 'admin/banner/'+id ).then(function successCallback(response) {
            $scope.banners = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }

});