{"filter":false,"title":"_bodyExposiciones.php","tooltip":"/templates/_bodyExposiciones.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":117,"column":8},"end":{"row":120,"column":16},"action":"insert","lines":["<div id=\"botonmodal\" class=\"btn btn-warning\" style=\"position:absolute; left:50px; top:125px;\">","            <span>New exposition</span>","            ","          </div>"],"id":3516}],[{"start":{"row":117,"column":53},"end":{"row":117,"column":101},"action":"remove","lines":["style=\"position:absolute; left:50px; top:125px;\""],"id":3517}],[{"start":{"row":117,"column":52},"end":{"row":117,"column":53},"action":"remove","lines":[" "],"id":3518}],[{"start":{"row":118,"column":39},"end":{"row":119,"column":12},"action":"remove","lines":["","            "],"id":3519}],[{"start":{"row":119,"column":9},"end":{"row":119,"column":10},"action":"remove","lines":[" "],"id":3520}],[{"start":{"row":119,"column":15},"end":{"row":120,"column":0},"action":"insert","lines":["",""],"id":3521},{"start":{"row":120,"column":0},"end":{"row":120,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":120,"column":9},"end":{"row":163,"column":6},"action":"insert","lines":["<div id=\"myModal\" class=\"modal fade\">","    <div class=\"modal-dialog\">","        <div class=\"modal-content\">","            <form ng-controller=\"formularioController as formController\" ng-submit=\"ctrlForm.addExposicion(ctrlCiudades.exposiciones)\">","                <div class=\"modal-header\">","                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>","                    <h4 class=\"modal-title\">New exposition</h4>","                </div>","                <div class=\"modal-body\">","                    <p>Do you want to save changes you made to document before closing?</p>","                    <p class=\"text-warning\"><small>If you don't save, your changes will be lost.</small></p>","                    <div class=\"modal-form\">","                    <select ng-model=\"dia\">","                        <?php","                        foreach ($exposiciones as $indice => $exposicion) {","                            if($exposicion->getLibre()==='1'){","                                echo '<option ng-model=\"dia\" value=\"'.$exposicion->getID().'\">'.$exposicion->getDia().': '.$exposicion->getHora().'</option>';","                            }","                        }","                        ?>","                    </select><br>","                    <?php","                    echo \"<input type='text' id='inputlibre' hidden value='1'><br>\";","                    if($_SESSION[administrador_usuario]==\"1\"){","                        echo \"<b>Artist:</b>\";","                        echo \"<input type='text' id='inputartista' ng-model='artista'><br>\";","                    }else{","                        echo '<input type=\"text\" id=\"inputartista\"  ng-model=\"artista\" hidden value=\"'.$_SESSION[\"alias_ususario\"].'\">';","                    }","                    ?>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">","                   ","                    ","                </div>","                </div>","                <div class=\"modal-footer\">","                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>","                    <a href=\"#/add\"><button type=\"button\" class=\"btn btn-primary\">Save changes</button></a>","                </div>","            </form>","        </div>","    </div>","</div>"],"id":3522}],[{"start":{"row":132,"column":43},"end":{"row":135,"column":62},"action":"remove","lines":["","                        <?php","                        foreach ($exposiciones as $indice => $exposicion) {","                            if($exposicion->getLibre()==='1'){"],"id":3523}],[{"start":{"row":134,"column":29},"end":{"row":136,"column":26},"action":"remove","lines":["","                        }","                        ?>"],"id":3524}],[{"start":{"row":133,"column":24},"end":{"row":133,"column":38},"action":"remove","lines":["        echo '"],"id":3525}],[{"start":{"row":134,"column":28},"end":{"row":134,"column":29},"action":"remove","lines":["}"],"id":3526}],[{"start":{"row":133,"column":142},"end":{"row":134,"column":28},"action":"remove","lines":["';","                            "],"id":3527}],[{"start":{"row":133,"column":80},"end":{"row":133,"column":133},"action":"remove","lines":["'.$exposicion->getDia().': '.$exposicion->getHora().'"],"id":3528}],[{"start":{"row":133,"column":55},"end":{"row":133,"column":77},"action":"remove","lines":[".$exposicion->getID()."],"id":3529},{"start":{"row":133,"column":55},"end":{"row":133,"column":56},"action":"insert","lines":["1"]}],[{"start":{"row":133,"column":54},"end":{"row":133,"column":55},"action":"remove","lines":["'"],"id":3530}],[{"start":{"row":133,"column":54},"end":{"row":133,"column":55},"action":"remove","lines":["1"],"id":3531}],[{"start":{"row":133,"column":54},"end":{"row":133,"column":55},"action":"remove","lines":["'"],"id":3532}],[{"start":{"row":133,"column":54},"end":{"row":133,"column":55},"action":"insert","lines":["1"],"id":3533}],[{"start":{"row":133,"column":32},"end":{"row":133,"column":45},"action":"remove","lines":["ng-model=\"dia"],"id":3534}],[{"start":{"row":133,"column":31},"end":{"row":133,"column":32},"action":"remove","lines":[" "],"id":3535}],[{"start":{"row":133,"column":31},"end":{"row":133,"column":32},"action":"remove","lines":["\""],"id":3536}],[{"start":{"row":133,"column":42},"end":{"row":133,"column":43},"action":"insert","lines":["h"],"id":3537}],[{"start":{"row":133,"column":43},"end":{"row":133,"column":44},"action":"insert","lines":["o"],"id":3538}],[{"start":{"row":133,"column":44},"end":{"row":133,"column":45},"action":"insert","lines":["l"],"id":3539}],[{"start":{"row":133,"column":45},"end":{"row":133,"column":46},"action":"insert","lines":["i"],"id":3540}],[{"start":{"row":135,"column":20},"end":{"row":136,"column":26},"action":"remove","lines":["<?php","                    echo \""],"id":3541}],[{"start":{"row":135,"column":77},"end":{"row":135,"column":78},"action":"remove","lines":[";"],"id":3542}],[{"start":{"row":135,"column":76},"end":{"row":135,"column":77},"action":"remove","lines":["\""],"id":3543}],[{"start":{"row":135,"column":76},"end":{"row":136,"column":62},"action":"remove","lines":["","                    if($_SESSION[administrador_usuario]==\"1\"){"],"id":3544}],[{"start":{"row":136,"column":24},"end":{"row":136,"column":30},"action":"remove","lines":["echo \""],"id":3545}],[{"start":{"row":136,"column":39},"end":{"row":136,"column":40},"action":"remove","lines":[";"],"id":3546}],[{"start":{"row":136,"column":38},"end":{"row":136,"column":39},"action":"remove","lines":["\""],"id":3547}],[{"start":{"row":136,"column":38},"end":{"row":137,"column":30},"action":"remove","lines":["","                        echo \""],"id":3548}],[{"start":{"row":136,"column":99},"end":{"row":136,"column":100},"action":"remove","lines":[";"],"id":3549}],[{"start":{"row":136,"column":98},"end":{"row":136,"column":99},"action":"remove","lines":["\""],"id":3550}],[{"start":{"row":136,"column":98},"end":{"row":139,"column":21},"action":"remove","lines":["","                    }else{","                        echo '<input type=\"text\" id=\"inputartista\"  ng-model=\"artista\" hidden value=\"'.$_SESSION[\"alias_ususario\"].'\">';","                    }"],"id":3551}],[{"start":{"row":136,"column":98},"end":{"row":137,"column":22},"action":"remove","lines":["","                    ?>"],"id":3552}],[{"start":{"row":140,"column":0},"end":{"row":140,"column":20},"action":"remove","lines":["                    "],"id":3553}],[{"start":{"row":139,"column":19},"end":{"row":140,"column":0},"action":"remove","lines":["",""],"id":3554}],[{"start":{"row":131,"column":44},"end":{"row":132,"column":24},"action":"insert","lines":["","                        "],"id":3555}],[{"start":{"row":132,"column":24},"end":{"row":134,"column":81},"action":"insert","lines":["                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>"],"id":3556}],[{"start":{"row":132,"column":62},"end":{"row":132,"column":72},"action":"remove","lines":["exposicion"],"id":3557}],[{"start":{"row":132,"column":62},"end":{"row":132,"column":63},"action":"remove","lines":["."],"id":3558}],[{"start":{"row":133,"column":29},"end":{"row":133,"column":39},"action":"remove","lines":["exposicion"],"id":3559}],[{"start":{"row":133,"column":29},"end":{"row":133,"column":30},"action":"remove","lines":["."],"id":3560}],[{"start":{"row":134,"column":41},"end":{"row":134,"column":51},"action":"remove","lines":["exposicion"],"id":3561}],[{"start":{"row":134,"column":41},"end":{"row":134,"column":42},"action":"remove","lines":["."],"id":3562}],[{"start":{"row":132,"column":48},"end":{"row":141,"column":57},"action":"remove","lines":["<b>Artista: {{artista}}</b>","                        <p>{{nombre}}</p>","                        <p>Día y hora: {{dia}} {{exposicion.hora}}</p>","                    <select ng-model=\"dia\">","                        <option value=\"1\">holi</option>","                    </select><br>","                    <input type='text' id='inputlibre' hidden value='1'><br>","                        <b>Artist:</b><input type='text' id='inputartista' ng-model='artista'><br>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">"],"id":3563}],[{"start":{"row":117,"column":0},"end":{"row":143,"column":6},"action":"remove","lines":["        <div id=\"botonmodal\" class=\"btn btn-warning\">","            <span>New exposition</span>","         </div>","         <div id=\"myModal\" class=\"modal fade\">","    <div class=\"modal-dialog\">","        <div class=\"modal-content\">","            <form ng-controller=\"formularioController as formController\" ng-submit=\"ctrlForm.addExposicion(ctrlCiudades.exposiciones)\">","                <div class=\"modal-header\">","                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>","                    <h4 class=\"modal-title\">New exposition</h4>","                </div>","                <div class=\"modal-body\">","                    <p>Do you want to save changes you made to document before closing?</p>","                    <p class=\"text-warning\"><small>If you don't save, your changes will be lost.</small></p>","                    <div class=\"modal-form\">","                                                ","                   ","                </div>","                </div>","                <div class=\"modal-footer\">","                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>","                    <a href=\"#/add\"><button type=\"button\" class=\"btn btn-primary\">Save changes</button></a>","                </div>","            </form>","        </div>","    </div>","</div>"],"id":3564},{"start":{"row":117,"column":0},"end":{"row":126,"column":57},"action":"insert","lines":["<b>Artista: {{artista}}</b>","                        <p>{{nombre}}</p>","                        <p>Día y hora: {{dia}} {{exposicion.hora}}</p>","                    <select ng-model=\"dia\">","                        <option value=\"1\">holi</option>","                    </select><br>","                    <input type='text' id='inputlibre' hidden value='1'><br>","                        <b>Artist:</b><input type='text' id='inputartista' ng-model='artista'><br>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">"]}],[{"start":{"row":117,"column":0},"end":{"row":126,"column":57},"action":"remove","lines":["<b>Artista: {{artista}}</b>","                        <p>{{nombre}}</p>","                        <p>Día y hora: {{dia}} {{exposicion.hora}}</p>","                    <select ng-model=\"dia\">","                        <option value=\"1\">holi</option>","                    </select><br>","                    <input type='text' id='inputlibre' hidden value='1'><br>","                        <b>Artist:</b><input type='text' id='inputartista' ng-model='artista'><br>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">"],"id":3565}],[{"start":{"row":115,"column":12},"end":{"row":124,"column":57},"action":"insert","lines":["<b>Artista: {{artista}}</b>","                        <p>{{nombre}}</p>","                        <p>Día y hora: {{dia}} {{exposicion.hora}}</p>","                    <select ng-model=\"dia\">","                        <option value=\"1\">holi</option>","                    </select><br>","                    <input type='text' id='inputlibre' hidden value='1'><br>","                        <b>Artist:</b><input type='text' id='inputartista' ng-model='artista'><br>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">"],"id":3566}],[{"start":{"row":124,"column":57},"end":{"row":125,"column":0},"action":"insert","lines":["",""],"id":3567},{"start":{"row":125,"column":0},"end":{"row":125,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":125,"column":20},"end":{"row":125,"column":36},"action":"insert","lines":["<a href=\"#/add\">"],"id":3568}],[{"start":{"row":125,"column":36},"end":{"row":125,"column":37},"action":"insert","lines":["A"],"id":3569}],[{"start":{"row":125,"column":37},"end":{"row":125,"column":38},"action":"insert","lines":["ñ"],"id":3570}],[{"start":{"row":125,"column":38},"end":{"row":125,"column":39},"action":"insert","lines":["a"],"id":3571}],[{"start":{"row":125,"column":39},"end":{"row":125,"column":40},"action":"insert","lines":["d"],"id":3572}],[{"start":{"row":125,"column":40},"end":{"row":125,"column":41},"action":"insert","lines":["i"],"id":3573}],[{"start":{"row":125,"column":41},"end":{"row":125,"column":42},"action":"insert","lines":["r"],"id":3574}],[{"start":{"row":125,"column":42},"end":{"row":125,"column":43},"action":"insert","lines":[" "],"id":3575}],[{"start":{"row":125,"column":43},"end":{"row":125,"column":44},"action":"insert","lines":["e"],"id":3576}],[{"start":{"row":125,"column":44},"end":{"row":125,"column":45},"action":"insert","lines":["l"],"id":3577}],[{"start":{"row":125,"column":45},"end":{"row":125,"column":46},"action":"insert","lines":["e"],"id":3578}],[{"start":{"row":125,"column":46},"end":{"row":125,"column":47},"action":"insert","lines":["m"],"id":3579}],[{"start":{"row":125,"column":47},"end":{"row":125,"column":48},"action":"insert","lines":["e"],"id":3580}],[{"start":{"row":125,"column":47},"end":{"row":125,"column":48},"action":"remove","lines":["e"],"id":3581}],[{"start":{"row":125,"column":46},"end":{"row":125,"column":47},"action":"remove","lines":["m"],"id":3582}],[{"start":{"row":125,"column":45},"end":{"row":125,"column":46},"action":"remove","lines":["e"],"id":3583}],[{"start":{"row":125,"column":44},"end":{"row":125,"column":45},"action":"remove","lines":["l"],"id":3584}],[{"start":{"row":125,"column":44},"end":{"row":125,"column":45},"action":"insert","lines":["v"],"id":3585}],[{"start":{"row":125,"column":45},"end":{"row":125,"column":46},"action":"insert","lines":["e"],"id":3586}],[{"start":{"row":125,"column":46},"end":{"row":125,"column":47},"action":"insert","lines":["n"],"id":3587}],[{"start":{"row":125,"column":47},"end":{"row":125,"column":48},"action":"insert","lines":["t"],"id":3588}],[{"start":{"row":125,"column":48},"end":{"row":125,"column":49},"action":"insert","lines":["o"],"id":3589}],[{"start":{"row":125,"column":49},"end":{"row":125,"column":50},"action":"insert","lines":["<"],"id":3590}],[{"start":{"row":125,"column":50},"end":{"row":125,"column":51},"action":"insert","lines":["/"],"id":3591}],[{"start":{"row":125,"column":51},"end":{"row":125,"column":52},"action":"insert","lines":["a"],"id":3592}],[{"start":{"row":125,"column":52},"end":{"row":125,"column":53},"action":"insert","lines":[">"],"id":3593}],[{"start":{"row":116,"column":20},"end":{"row":116,"column":24},"action":"remove","lines":["    "],"id":3594}],[{"start":{"row":116,"column":16},"end":{"row":116,"column":20},"action":"remove","lines":["    "],"id":3595}],[{"start":{"row":116,"column":12},"end":{"row":116,"column":16},"action":"remove","lines":["    "],"id":3596}],[{"start":{"row":116,"column":15},"end":{"row":116,"column":16},"action":"insert","lines":["E"],"id":3597}],[{"start":{"row":116,"column":16},"end":{"row":116,"column":17},"action":"insert","lines":["v"],"id":3598}],[{"start":{"row":116,"column":17},"end":{"row":116,"column":18},"action":"insert","lines":["e"],"id":3599}],[{"start":{"row":116,"column":18},"end":{"row":116,"column":19},"action":"insert","lines":["n"],"id":3600}],[{"start":{"row":116,"column":19},"end":{"row":116,"column":20},"action":"insert","lines":["t"],"id":3601}],[{"start":{"row":116,"column":20},"end":{"row":116,"column":21},"action":"insert","lines":[" "],"id":3602}],[{"start":{"row":116,"column":21},"end":{"row":116,"column":22},"action":"insert","lines":["n"],"id":3603}],[{"start":{"row":116,"column":22},"end":{"row":116,"column":23},"action":"insert","lines":["a"],"id":3604}],[{"start":{"row":116,"column":23},"end":{"row":116,"column":24},"action":"insert","lines":["m"],"id":3605}],[{"start":{"row":116,"column":24},"end":{"row":116,"column":25},"action":"insert","lines":["e"],"id":3606}],[{"start":{"row":116,"column":25},"end":{"row":116,"column":26},"action":"insert","lines":[":"],"id":3607}],[{"start":{"row":116,"column":26},"end":{"row":116,"column":27},"action":"insert","lines":[" "],"id":3608}],[{"start":{"row":117,"column":12},"end":{"row":117,"column":24},"action":"remove","lines":["            "],"id":3609}],[{"start":{"row":118,"column":13},"end":{"row":118,"column":20},"action":"remove","lines":["       "],"id":3610}],[{"start":{"row":118,"column":12},"end":{"row":118,"column":13},"action":"remove","lines":[" "],"id":3611}],[{"start":{"row":119,"column":16},"end":{"row":119,"column":24},"action":"remove","lines":["        "],"id":3612}],[{"start":{"row":120,"column":12},"end":{"row":120,"column":20},"action":"remove","lines":["        "],"id":3613}],[{"start":{"row":121,"column":12},"end":{"row":121,"column":20},"action":"remove","lines":["        "],"id":3614}],[{"start":{"row":0,"column":0},"end":{"row":129,"column":10},"action":"remove","lines":["    <div id=\"cont\">","        <div id=\"header\"><span class=\"title\"><b>A</b>rt of <b>A</b>rchitecture</span>","            <span class=\"enlaces\">","                <a href=\"../login.php\">Login</a>","                <a href=\"about.php\">About Us</a>","                <a href=\"exposiciones.php\"><b class=\"selected\">Expositions</b></a>","                <a href=\"quentin.php\">Quentin</a>","                <a href=\"david.php\">David</a>","                <a href=\"../index.php\">Home</a>","            </span>","        </div>","        <div id=\"main\" ng-controller=\"storeController as store\">","                <table ng-init=\"tab = 0\">","                        <tr>","                            <td>","                                ","                            </td>","                            <td ng-class=\"active{tab===1}\">","                                <a href ng-click=\"tab = 1\">Lunes</a>","                            </td>","                            <td ng-class=\"active{tab===2}\">","                                <a href ng-click=\"tab = 2\">Martes</a>","                            </td>","                            <td ng-class=\"active{tab===3}\">","                                <a href ng-click=\"tab = 3\">Miercoles</a>","                            </td>","                            <td ng-class=\"active{tab===4}\">","                                <a href ng-click=\"tab = 4\">Jueves</a>","                            </td>","                            <td ng-class=\"active{tab===5}\">","                                <a href ng-click=\"tab = 5\">Viernes</a>","                            </td>","                            <td ng-class=\"active{tab===6}\">","                                <a href ng-click=\"tab = 6\">Sabado</a>","                            </td>","                        </tr>","                        ","                        <tr>","                </table>","                ","            <div class=\"panel\" ng-show=\"tab === 0\">","                <p>Seleccione un día por favor</p>","            </div>","            <div class=\"panel\" ng-show=\"tab === 1\">","                <h1>Lista de exposicionos Lunes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesLunes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 2\">","                <h1>Lista de exposicionos Martes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesMartes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 3\">","                <h1>Lista de exposicionos Miercoles</h1>","                <div ng-repeat=\"exposicion in store.exposicionesMiercoles\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 4\">","                <h1>Lista de exposicionos Jueves</h1>","                <div ng-repeat=\"exposicion in store.exposicionesJueves\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 5\">","                <h1>Lista de exposicionos Viernes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesViernes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 6\">","                <h1>Lista de exposicionos Sabado</h1>","                <div ng-repeat=\"exposicion in store.exposicionesSabado\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                        <form name=\"angularform\" ng-submit=\"formCTRL.addExpo(exposicion)\" ng-controller=\"formularioControlador as formCTRL\">","                            <select ng-model=\"exposicion.dia\">","                                <option value=\"Lunes\">{{store.exposicionesLunes[0].dia}}</option>","                                <option value=\"Martes\">{{store.exposicionesMartes[0].dia}}</option>","                                <option value=\"Miercoles\">{{store.exposicionesMiercoles[0].dia}}</option>","                                <option value=\"Jueves\">{{store.exposicionesJueves[0].dia}}</option>","                                <option value=\"Viernes\">{{store.exposicionesViernes[0].dia}}</option>","                                <option value=\"Sabado\">{{store.exposicionesSabado[0].dia}}</option>","                            </select>","                            <input ng-model=\"exposicion.artista\" type=\"text\" value=\"{{exposicion.artista}}\">","                            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>","                        </form>","                        </blockquote>","                </div>","            </div>","            <b>Artista: {{artista}}</b>","            <p>Event name: {{nombre}}</p>","            <p>Día y hora: {{dia}} {{exposicion.hora}}</p>","            <select ng-model=\"dia\">","                <option value=\"1\">holi</option>","            </select><br>","            <input type='text' id='inputlibre' hidden value='1'><br>","                        <b>Artist:</b><input type='text' id='inputartista' ng-model='artista'><br>","                    <b>Event name:</b>","                    <input type=\"text\" ng-model=\"nombre\">","                    <a href=\"#/add\">Añadir evento</a>","        </div>","","{footer}","    </div>"],"id":3625},{"start":{"row":0,"column":0},"end":{"row":118,"column":10},"action":"insert","lines":["<div id=\"cont\">","        <div id=\"header\"><span class=\"title\"><b>A</b>rt of <b>A</b>rchitecture</span>","            <span class=\"enlaces\">","                <a href=\"../login.php\">Login</a>","                <a href=\"about.php\">About Us</a>","                <a href=\"docs/exposiciones.php\"><b class=\"selected\">Expositions</b></a>","                <a href=\"quentin.php\">Quentin</a>","                <a href=\"david.php\">David</a>","                <a href=\"../index.php\">Home</a>","            </span>","        </div>","        <div id=\"main\" ng-controller=\"storeController as store\">","                <table ng-init=\"tab = 0\">","                        <tr>","                            <td>","                                ","                            </td>","                            <td ng-class=\"active{tab===1}\">","                                <a href ng-click=\"tab = 1\">Lunes</a>","                            </td>","                            <td ng-class=\"active{tab===2}\">","                                <a href ng-click=\"tab = 2\">Martes</a>","                            </td>","                            <td ng-class=\"active{tab===3}\">","                                <a href ng-click=\"tab = 3\">Miercoles</a>","                            </td>","                            <td ng-class=\"active{tab===4}\">","                                <a href ng-click=\"tab = 4\">Jueves</a>","                            </td>","                            <td ng-class=\"active{tab===5}\">","                                <a href ng-click=\"tab = 5\">Viernes</a>","                            </td>","                            <td ng-class=\"active{tab===6}\">","                                <a href ng-click=\"tab = 6\">Sabado</a>","                            </td>","                        </tr>","                        ","                        <tr>","                </table>","                ","            <div class=\"panel\" ng-show=\"tab === 0\">","                <p>Selecciones un día por favor</p>","            </div>","            <div class=\"panel\" ng-show=\"tab === 1\">","                <h1>Lista de exposicionos Lunes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesLunes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 2\">","                <h1>Lista de exposicionos Martes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesMartes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 3\">","                <h1>Lista de exposicionos Miercoles</h1>","                <div ng-repeat=\"exposicion in store.exposicionesMiercoles\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 4\">","                <h1>Lista de exposicionos Jueves</h1>","                <div ng-repeat=\"exposicion in store.exposicionesJueves\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 5\">","                <h1>Lista de exposicionos Viernes</h1>","                <div ng-repeat=\"exposicion in store.exposicionesViernes\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                    </blockquote>","                </div>","            </div>","            <div class=\"panel\" ng-show=\"tab === 6\">","                <h1>Lista de exposicionos Sabado</h1>","                <div ng-repeat=\"exposicion in store.exposicionesSabado\">","                    <blockquote ng-show=\"exposicion.libre\">","                        <b>Artista: {{exposicion.artista}}</b>","                        <p>{{exposicion.nombre}}</p>","                        <p>Día y hora: {{exposicion.dia}} {{exposicion.hora}}</p>","                        <form name=\"angularform\" ng-submit=\"formCTRL.addExpo(exposicion)\" ng-controller=\"formularioControlador as formCTRL\">","                            <select ng-model=\"exposicion.dia\">","                                <option value=\"Lunes\">{{store.exposicionesLunes[0].dia}}</option>","                                <option value=\"Martes\">{{store.exposicionesMartes[0].dia}}</option>","                                <option value=\"Miercoles\">{{store.exposicionesMiercoles[0].dia}}</option>","                                <option value=\"Jueves\">{{store.exposicionesJueves[0].dia}}</option>","                                <option value=\"Viernes\">{{store.exposicionesViernes[0].dia}}</option>","                                <option value=\"Sabado\">{{store.exposicionesSabado[0].dia}}</option>","                            </select>","                            <input ng-model=\"exposicion.artista\" type=\"text\" value=\"{{exposiscion.artista}}\">","                            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>","                        </form>","                    </blockquote>","                </div>","            </div>","            ","        </div>","{footer}","    </div>"]}],[{"start":{"row":99,"column":81},"end":{"row":111,"column":31},"action":"remove","lines":["","                        <form name=\"angularform\" ng-submit=\"formCTRL.addExpo(exposicion)\" ng-controller=\"formularioControlador as formCTRL\">","                            <select ng-model=\"exposicion.dia\">","                                <option value=\"Lunes\">{{store.exposicionesLunes[0].dia}}</option>","                                <option value=\"Martes\">{{store.exposicionesMartes[0].dia}}</option>","                                <option value=\"Miercoles\">{{store.exposicionesMiercoles[0].dia}}</option>","                                <option value=\"Jueves\">{{store.exposicionesJueves[0].dia}}</option>","                                <option value=\"Viernes\">{{store.exposicionesViernes[0].dia}}</option>","                                <option value=\"Sabado\">{{store.exposicionesSabado[0].dia}}</option>","                            </select>","                            <input ng-model=\"exposicion.artista\" type=\"text\" value=\"{{exposiscion.artista}}\">","                            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>","                        </form>"],"id":3626}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":59},"end":{"row":17,"column":59},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1456415388000,"hash":"1ffbeba19cba7e6ebe5658149b8728aeba5bc518"}