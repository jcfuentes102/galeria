
var app = angular.module("app", []);

app.config(function($routeProvider){
	$routeProvider.when("/", {
		templateUrl : "templates/index.html"
	})
	
	.when('/info/:id', {
      templateUrl : "templates/info.html",
     controller : "infoController"
    })
	.when("/add", {
		title: 'Añadir exposicion',
		templateUrl : "templates/add.html",
		controller : "addController"
	})
	.when("/edit/:id", {
		title: 'Editar exposicion',
		templateUrl : "templates/edit.html",
		controller : "editController"
	})
 	.when("/remove/:id", {
 		title: 'Eliminar exposicion',
 		templateUrl : "templates/remove.html",
 		controller : "removeController"
 	})
 	.otherwise({ redirectTo : "/"})
})
