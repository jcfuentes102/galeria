app.controller("appController", function appController($scope){
	$scope.expositions = [
        {
        hora : '10am',
        dia : 'Lunes',
        libre : true,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'Lunes',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'Lunes',
        libre : true,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'Lunes',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'Lunes',
        libre : false,
        artista : 'Carlos',
        nombre : "Enseñanza mixta",
        },
        
        {
        hora : '18am',
        dia : 'Lunes',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'Lunes',
        libre : true,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'Lunes',
        libre : true,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        },
        {
        hora : '10am',
        dia : 'Martes',
        libre : true,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'Martes',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'Martes',
        libre : true,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'Martes',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'Martes',
        libre : false,
        artista : 'Carlos',
        nombre : "Grandes esperanzas",
        },
        
        {
        hora : '18am',
        dia : 'Martes',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'Martes',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'Martes',
        libre : false,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        },
    ]
})

app.controller("infoController", function infoController($scope,$routeParams){
	$scope.exposition = $scope.expositions[$routeParams.id];
});


app.controller("addController", function addController($scope,$location){
	$scope.textButton = "Añadir un nuevo exposition";
	$scope.exposition = {};
	$scope.newEvent = function(){
		$scope.expositions.push($scope.exposition);
		$location.url("/");
	}
})

app.controller("editController", function editController($scope,$routeParams,$location){
	
	$scope.textButton = "Editar exposition";
	$scope.exposition = $scope.expositions[$routeParams.id];
	$scope.editEvent = function(){
		//actualizamos la información del exposition con la id que lleva $routeParams
		$scope.expositions[$routeParams.id] = $scope.exposition;
		$location.url("/");
	}
})


app.controller("removeController", function removeController($scope,$routeParams,$location){
	$scope.exposition = $scope.expositions[$routeParams.id];
	$scope.removeEvent = function(){
		$scope.expositions.splice($routeParams.id, 1);
		$location.url("/");
	}
})
