{"filter":false,"title":"controller.js","tooltip":"/js/controller.js","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":55,"column":2},"action":"insert","lines":["app.controller(\"appController\", function appController($scope){","\t//añadimos usuarios por defecto","\t$scope.usuarios = [","        {","            nombre : \"Israel Parra\",","            web : \"http://uno-de-piera.com\",","            edad : \"32 años\",","            profesion : \"programador web\"","        },","        {","            nombre : \"Pepito\",","            web : \"http://pepito.com\",","            edad : \"? años\",","            profesion : \"vender palotes!\"","        }","    ]","})","//route params es para identificar los segmentos de la url, en este caso, para reconocer usuarios","app.controller(\"infoController\", function infoController($scope,$routeParams){","\t$scope.usuario = $scope.usuarios[$routeParams.id];","});"," ","//creamos el controlador addController para guardar usuarios nuevos con push","app.controller(\"addController\", function addController($scope,$location){","\t$scope.textButton = \"Añadir un nuevo usuario\";","\t$scope.usuario = {};","\t$scope.newUser = function(){","\t\t$scope.usuarios.push($scope.usuario);","\t\t$location.url(\"/\");","\t}","})"," ","app.controller(\"editController\", function editController($scope,$routeParams,$location){","\t//obtenemos el usuario a editar con routeParams","\t$scope.textButton = \"Editar usuario\";","\t$scope.usuario = $scope.usuarios[$routeParams.id];","\t$scope.editUser = function(){","\t\t//actualizamos la información del usuario con la id que lleva $routeParams","\t\t$scope.usuarios[$routeParams.id] = $scope.usuario;","\t\t$location.url(\"/\");","\t}","})"," ","//eliminamos el usuario dependiendo de su id","app.controller(\"removeController\", function removeController($scope,$routeParams,$location){","\t$scope.usuario = $scope.usuarios[$routeParams.id];","\t$scope.removeUser = function(){","\t\t//con splice  eliminamos un usuario del array usuarios, en este caso le decimos que debe eliminar ","\t\t//el que tenga el id que le pasamos con $routeParams, y con el 1, le decimos que sólo ","\t\t//debe eliminar 1, la función splice, como primer parámetro necesita la posición, que en este caso","\t\t//es la id, y el segundo debe ser el número de elementos a eliminar, cabe decir que splice tiene","\t\t//más variantes, y que sirve para añadir y eliminar elementos en un array, pero eso para otro momento","\t\t$scope.usuarios.splice($routeParams.id, 1);","\t\t$location.url(\"/\");","\t}","})"],"id":1}]]},"ace":{"folds":[],"scrolltop":240,"scrollleft":0,"selection":{"start":{"row":19,"column":8},"end":{"row":19,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":15,"state":"no_regex","mode":"ace/mode/javascript"}},"timestamp":1456357840000,"hash":"32454bbf3ed15f54b33b381d97b40cd43aef9a60"}