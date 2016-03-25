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
    .when("/LisBanner", {templateUrl: "partials/admin/slider/ver.html", controller: "PageCtrl"})

     .when("/Galeria", {templateUrl: "partials/admin/Galeria/galeria.html", controller: "PageCtrl"})
    .when("/LisGaleria", {templateUrl: "partials/admin/Galeria/ver.html", controller: "PageCtrl"})

     .when("/Noticias", {templateUrl: "partials/admin/noticia/noticia.html", controller: "PageCtrl"})
    .when("/LisNoticias", {templateUrl: "partials/admin/noticia/ver.html", controller: "PageCtrl"})

    .when("/tipoHab", {templateUrl: "partials/admin/TipoHab/crear.html", controller: "PageCtrl"})
    .when("/LisHab", {templateUrl: "partials/admin/TipoHab/ver.html", controller: "PageCtrl"})
    .when('/HabGalery/:habtipoId', {templateUrl: "partials/admin/TipoHab/galeria.html", controller: "PageCtrl"})

    .when("/Hoteles", {templateUrl: "partials/admin/hotel/ver.html", controller: "PageCtrl"})
    .when("/Hoteles/crear", {templateUrl: "partials/admin/hotel/crear.html", controller: "PageCtrl"})
    .when("/Hoteles/editar", {templateUrl: "partials/admin/hotel/editar.html", controller: "PageCtrl"})

    .when("/BandejaEntrada", {templateUrl: "partials/admin/Bandeja Entrada/ver.html", controller: "PageCtrl"})

    .when("/Empleados", {templateUrl: "partials/admin/personal/ver.html", controller: "PageCtrl"})


    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty(reconocio el controlador).");

});

