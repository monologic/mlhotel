
app.controller('habtipoController', function($scope,$http) {
	var hotel;
	var datos;
    $scope.getHabTipo = function () {
        $http.get('admin/AddHab').then(function successCallback(response) {
        	$scope.habtipos=response.data;
            
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    var details = Array();
    $scope.addDetalleReserva =function (data) {
      details.push(data);
      var total = 0;

      for (var i = 0; i < details.length; i++) {
        total += details[i].precio;
      }

        $scope.detalles = details;
        $scope.total = total;
    } 


     $scope.eliminar = function (id) {
        $http.delete( 'admin/habtipo/'+id ).then(function successCallback(response) {
            $scope.habtipos = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }


    var idHabtipo;

    $scope.dataEditar = function (data) {

        idHabtipo = data.id;

        $scope.mltitulo = data.titulo;
        $scope.mlimagen = data.imagen;
        $scope.mlestado = data.estado;
        $scope.mlorden = data.orden;
    }

       $scope.editarHabtipo = function () {

        $http.put('admin/habtipo/'+idHabtipo,
            {   'nombre':$scope.mltitulo,
                'pais':$scope.mlimagen,
                'estado':$scope.mlestado,
                'orden':$scope.mlorden,
            }).then(function successCallback(response) {
                 $scope.habtipos = response.data;
            }, function errorCallback(response) {
                
            });
    }

    
});