/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('tutorialWebApp', [
  'ngRoute'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "partials/panel.html", controller: "PageCtrl"})
    // Pages
    /*
        Rutas relacionadas a empleados
    */
    .when("/Cargos/crear", {templateUrl: "partials/emptipo/crear.html", controller: "PageCtrl"})
    .when("/Empleados/crear", {templateUrl: "partials/empleado/crear.html", controller: "PageCtrl"})
    .when("/Usuarios/crear", {templateUrl: "partials/usuario/crear.html", controller: "PageCtrl"})
    .when("/Usuarios/crearTipo", {templateUrl: "partials/usuariotipo/crear.html", controller: "PageCtrl"})

    .when("/Banner", {templateUrl: "partials/admin/slider/banner.html", controller: "PageCtrl"})

    .when("/Hoteles", {templateUrl: "partials/admin/hotel/ver.html", controller: "PageCtrl"})
    .when("/Hoteles/crear", {templateUrl: "partials/admin/hotel/crear.html", controller: "PageCtrl"})

    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty(reconocio el controlador).");

});

