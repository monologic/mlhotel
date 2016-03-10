
app.controller('habtipoController', function($scope,$http) {
	var hotel;
	var datos;
    $scope.getHabTipo = function () {
        $http.get('admin/getHabTipo').then(function successCallback(response) {
        	$scope.habtipos=response.data;
            $scope.hotel_id=response.data[0].hotel_id;
            
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    
});