app.controller('habtipoController', function($scope,$http,$location) {
	var hotel;
	var datos;
    var gdata;
    $scope.getHabTipo = function () {
        $http.get('admin/AddHab').then(function successCallback(response) {
        	$scope.habtipos=response.data;

            gdata=response.data;
            
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
       
    }
       
      $scope.descrip = function () {
        console.log('entra');
        
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

    var idHabtipo;

    $scope.dataEditar = function (data) {

        idHabtipo = data.id;

        $scope.mlnombre = data.nombre;
        $scope.mldescripcion = data.descripcion;
        $scope.mlnropersonas = data.nropersonas;
        $scope.mlprecio = data.precio;
    }

       $scope.editarHabtipo = function () {

        $http.put('admin/habtipo/'+idHabtipo,
            {   'nombre':$scope.mlnombre,
                'descripcion':$scope.mldescripcion,
                'nropersonas':$scope.mlnropersonas,
                'precio':$scope.mlprecio,
            }).then(function successCallback(response) {
                 $scope.habtipos = response.data;
            }, function errorCallback(response) {
                
            });
    }
    $scope.eliminar = function (id) {
        $http.delete( 'admin/habtipo/'+id ).then(function successCallback(response) {
            $scope.habtipos = response.data;
        }, function errorCallback(response) {
            alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
        });
    }

     $scope.goTo2 = function(data) {
         idHabtipo = data.id;
    $location.url('/HabGalery/' + idHabtipo);
  };
    
});