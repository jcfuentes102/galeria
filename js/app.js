(function() {
    var app = angular.module("store",[]);

    app.controller("storeController", function(){
        this.exposicionesLunes = Lunes;
        this.exposicionesMartes = Martes;
        this.exposicionesMiercoles = Miercoles;
        this.exposicionesJueves = Jueves;
        this.exposicionesViernes = Viernes;
        this.exposicionesSabado = Sabado;
    });
    
    app.controller('formularioControlador', ['$http', function ($http) {
        var that = this;
        this.exposicion = [];
        this.addExposicion = function (exposiciones) {
            $http.get('city/ajaxInsert.php?Dia=&Artista=&Nombre&Libre&Hora=').success(function (datos) {
                that.exposicion.ID = datos.ID;
                exposiciones.push(that.exposicion);
                that.exposicion = [];
                $('#formularioInsertar').modal('toggle');
            });
        };
        this.editExposicion = function (exposiciones) {
            $http.get('city/ajaxedit.php?ID=&Dia=&Artista=&Nombre&Hora=').success(function (datos) {
                console.log(exposiciones);
                console.log(that.exposicion);
                for (var i = 0; i < exposiciones.length; i++) {
                    if (exposiciones[i].ID == that.exposicion.ID) {
                        
                        exposiciones[i].Hora = that.exposicion.Hora;
                        exposiciones[i].Artista = that.exposicion.Artista;
                        exposiciones[i].Nombre = that.exposicion.Nombre;
                        exposiciones[i].Dia = that.exposicion.Dia;
                        exposiciones[i].Libre = that.exposicion.Libre;
                        break;
                    }
                }

                that.exposicion = [];
                $('#formularioEditar').modal('toggle');
            });
        };
    }]);
        
    var Lunes = [
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
        artista : '',
        nombre : "",
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
    ];
    
    var Martes = [
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
        artista : '',
        nombre : "",
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
    ];
    
    
    var Miercoles = [
        {
        hora : '10am',
        dia : 'Miercoles',
        libre : true,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'Miercoles',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'Miercoles',
        libre : true,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'Miercoles',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'Miercoles',
        libre : false,
        artista : '',
        nombre : "",
        },
        
        {
        hora : '18am',
        dia : 'Miercoles',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'Miercoles',
        libre : true,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'Miercoles',
        libre : true,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        },
    ];
    
    var Jueves = [
        {
        hora : '10am',
        dia : 'jueves',
        libre : true,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'jueves',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'jueves',
        libre : true,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'jueves',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'jueves',
        libre : false,
        artista : '',
        nombre : "",
        },
        
        {
        hora : '18am',
        dia : 'jueves',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'jueves',
        libre : true,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'jueves',
        libre : true,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        },
    ];    

    var Viernes = [
        {
        hora : '10am',
        dia : 'Viernes',
        libre : true,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'Viernes',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'Viernes',
        libre : true,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'Viernes',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'Viernes',
        libre : false,
        artista : '',
        nombre : "",
        },
        
        {
        hora : '18am',
        dia : 'Viernes',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'Viernes',
        libre : true,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'Viernes',
        libre : true,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        },
    ];    

    var Sabado = [
        {
        hora : '10am',
        dia : 'Sabado',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope",
        },
        
        {
        hora : '11am',
        dia : 'Sabado',
        libre : false,
        artista : 'Gitana',
        nombre : "Flamenqueo a tope 2",
        },
        
        {
        hora : '12am',
        dia : 'Sabado',
        libre : false,
        artista : 'Delegado',
        nombre : "Exposicion aprobado",
        },
        
        {
        hora : '13am',
        dia : 'Sabado',
        libre : true,
        artista : 'Gitana',
        nombre : "Vuelve el flamenco",
        },
        
        {
        hora : '17am',
        dia : 'Sabado',
        libre : false,
        artista : '',
        nombre : "",
        },
        
        {
        hora : '18am',
        dia : 'Sabado',
        libre : false,
        artista : 'Carmelo',
        nombre : "Fotografias bellas dolores",
        },
        
        {
        hora : '19am',
        dia : 'Sabado',
        libre : true,
        artista : 'Carmelo',
        nombre : "Fotografias suspensos",
        },
        
        {
        hora : '20am',
        dia : 'Sabado',
        libre : true,
        artista : 'Maria del mar',
        nombre : "Tributo a Jose Luis",
        pepe : {
            atista : ''
        },
        },
    ];    
})();