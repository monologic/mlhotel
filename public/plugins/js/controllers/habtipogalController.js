var IdHab=0
app.controller('habtipogalController', function($scope,$http, $routeParams) {
    var IdHab=0;
	$scope.habId =$routeParams.habtipoId;
	IdHab=$scope.habId;
     $scope.getHabTipoGal= function () { 
            $http.get('admin/habtipoF/'+ IdHab).then(function successCallback(response) {
            	$scope.habfotos=response.data;  
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
           
        }
});