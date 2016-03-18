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
        $scope.mlestado = data.estado;
        $scope.mlorden = data.orden;
    }

       $scope.editarBanner = function () {

            var formData = new FormData($("#formulario")[1]);

            console.log($("#formulario"));
            var ruta = "admin/editSlider/"+idBanner;
            $.ajax({
                url: ruta,
                type: "PUT",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $("#respuesta").html(datos);
                }
            });
    }
     $scope.eliminar = function (id) {
        $http.delete( 'admin/banner/'+id ).then(function successCallback(response) {
            $scope.bannersv = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }

});