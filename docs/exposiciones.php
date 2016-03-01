<?php
session_start();
require '../clases/AutoCarga.php';
$bd = new DataBase();
$gestor = new ManageExposiciones($bd);
$exposiciones = $gestor->getList();
ControladorExposiciones::handle();
if ( isset($_SESSION["email_usuario"])){
            ?>
            <a href="agledit/index.html"><div id="botonmodal" class="btn btn-warning" style="position:absolute; left:50px; top:125px;">
                <span>Edit section</span>
            </div></a>

                <!--<b>Días y Hora Libres:</b>-->
                <!--<select ng-model="exposicion.fecha">-->
                    
                <!--        foreach ($exposiciones as $indice => $exposicion) {-->
                <!--            if($exposicion->getLibre()==='1'){-->
                <!--                echo '<option ng-model="dia" value="'.$exposicion->getID().'">'.$exposicion->getDia().': '.$exposicion->getHora().'</option>';-->
                <!--            }-->
                <!--        }-->
                <!--        ?>-->
                <!--</select><br>-->
          <?php
        }