
 var app = angular.module('homeApp', [
  'ngRoute',
]);



/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider


    // Panel de Control de Admin
    .when("/", {templateUrl: "index/home.html", controller: "PageCtrl"})
    .when("/galeria", {templateUrl: "index/galery.html", controller: "PageCtrl"})
    .when("/noticias", {templateUrl: "index/noticias.html", controller: "PageCtrl"})
    .when("/contacto", {templateUrl: "index/contacto.html", controller: "PageCtrl"})
    .when("/habitaciones", {templateUrl: "index/habitaciones.html", controller: "PageCtrl"})
    // Pages
    /*
        Rutas relacionadas a empleados
    */

    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty(reconocio el controlador).");

});
