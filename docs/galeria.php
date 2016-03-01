<?php
session_start();
require '../clases/AutoCarga.php';
ControladorGaleria::handle();

$bd = new DataBase();
$gestor = new ManageUser($bd);
$usuarios = $gestor->getList();

foreach ($usuarios as $indice => $usuario) {
        if($usuario->getEmail()==Request::req("email")){
            $email=$usuario->getEmail();
            $alias=$usuario->getAlias();
            $css =$usuario->getCss();
            
            $path = "../images/resources/" . $alias . "/";
        }
    }
    
// if(is_dir($path)){            
//     $mostrar = array_diff(scandir($path), array('..', '.'));
//             foreach ($mostrar as $key => $value) {
//                 echo '<a href="'.$path . $value . '"><img style="width:300px; display:inline-block;" src="'. $path . $value . '"></a>';
//             }
// }

?>
<section class="section">
    
		 <?php
		    if(is_dir($path)){            
    $mostrar = array_diff(scandir($path), array('..', '.'));
            foreach ($mostrar as $key => $value) {
                //echo '<a href="'.$path . $value . '"><img style="width:300px; display:inline-block;" src="'. $path . $value . '"></a>';
                echo '<article class="article">
		 <figure>';
    		 echo '    <a href="#img'.$key.'" title=""><img src="'. $path . $value . '" alt=""></a>    ';
    		echo '<figcaption>'.$value.'</figcaption>
		 </figure>
		 </article>';
		 echo '<div id="img'.$key.'" class="background" style="float:left; margin: 10px 10px 10px 0px;">';
		 $key += 1;
					 echo '   <a href="#img' . $key .'"><img src="'.$path . $value . '" alt=""></a>   ';
					 echo '<a class="close" href="#top">Close</a>
				</div>';
            }
}
?>
</section>