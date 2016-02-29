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
    .when("/", {templateUrl: "partials/dashboard.html", controller: "PageCtrl"})
    // Pages
    .when("/blank", {templateUrl: "partials/blank.html", controller: "PageCtrl"})
    .when("/buttons", {templateUrl: "partials/buttons.html", controller: "PageCtrl"})
    .when("/flot", {templateUrl: "partials/flot.html", controller: "PageCtrl"})
    .when("/forms", {templateUrl: "partials/forms.html", controller: "PageCtrl"})
    .when("/grid", {templateUrl: "partials/grid.html", controller: "PageCtrl"})
    .when("/morris", {templateUrl: "partials/morris.html", controller: "PageCtrl"})
    .when("/notifications", {templateUrl: "partials/notifications.html", controller: "PageCtrl"})
    .when("/panels-wells", {templateUrl: "partials/panels-wells.html", controller: "PageCtrl"})
    .when("/tables", {templateUrl: "partials/tables.html", controller: "PageCtrl"})
    .when("/typography", {templateUrl: "partials/typography.html", controller: "PageCtrl"})
    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty.");

});
