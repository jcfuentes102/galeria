<div id="cont">
        <div id="header"><span class="title"><b>A</b>rt of <b>A</b>rchitecture</span>
            <span class="enlaces">
                <a href="../login.php">Login</a>
                <a href="about.php">About Us</a>
                <a href="docs/exposiciones.php"><b class="selected">Expositions</b></a>
                <a href="quentin.php">Quentin</a>
                <a href="david.php">David</a>
                <a href="../index.php">Home</a>
            </span>
        </div>
        <div id="main" ng-controller="storeController as store">
                <table ng-init="tab = 0">
                        <tr>
                            <td>
                                
                            </td>
                            <td ng-class="active{tab===1}">
                                <a href ng-click="tab = 1">Lunes</a>
                            </td>
                            <td ng-class="active{tab===2}">
                                <a href ng-click="tab = 2">Martes</a>
                            </td>
                            <td ng-class="active{tab===3}">
                                <a href ng-click="tab = 3">Miercoles</a>
                            </td>
                            <td ng-class="active{tab===4}">
                                <a href ng-click="tab = 4">Jueves</a>
                            </td>
                            <td ng-class="active{tab===5}">
                                <a href ng-click="tab = 5">Viernes</a>
                            </td>
                            <td ng-class="active{tab===6}">
                                <a href ng-click="tab = 6">Sabado</a>
                            </td>
                        </tr>
                        
                        <tr>
                </table>
                
            <div class="panel" ng-show="tab === 0">
                <p>Selecciones un día por favor</p>
            </div>
            <div class="panel" ng-show="tab === 1">
                <h1>Lista de exposicionos Lunes</h1>
                <div ng-repeat="exposicion in store.exposicionesLunes">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            <div class="panel" ng-show="tab === 2">
                <h1>Lista de exposicionos Martes</h1>
                <div ng-repeat="exposicion in store.exposicionesMartes">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            <div class="panel" ng-show="tab === 3">
                <h1>Lista de exposicionos Miercoles</h1>
                <div ng-repeat="exposicion in store.exposicionesMiercoles">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            <div class="panel" ng-show="tab === 4">
                <h1>Lista de exposicionos Jueves</h1>
                <div ng-repeat="exposicion in store.exposicionesJueves">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            <div class="panel" ng-show="tab === 5">
                <h1>Lista de exposicionos Viernes</h1>
                <div ng-repeat="exposicion in store.exposicionesViernes">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            <div class="panel" ng-show="tab === 6">
                <h1>Lista de exposicionos Sabado</h1>
                <div ng-repeat="exposicion in store.exposicionesSabado">
                    <blockquote ng-show="exposicion.libre">
                        <b>Artista: {{exposicion.artista}}</b>
                        <p>{{exposicion.nombre}}</p>
                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>
                    </blockquote>
                </div>
            </div>
            
        </div>
{footer}
    </div>