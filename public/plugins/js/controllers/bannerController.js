app.controller('bannerController', function($scope,$http) {
     $scope.getBanners = function () {
        $http.get('admin/getBanners').then(function successCallback(response) {
            $scope.banners = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    
});