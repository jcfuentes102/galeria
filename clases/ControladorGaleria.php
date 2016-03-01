<?php
class ControladorGaleria {
    static function handle() {
        session_start(); 
        $bd = new DataBase();
        $gestor = new ManageUser($bd);
        $action = Request::req("action");
        $do = Request::req("do");
        $metodo = $action . ucfirst($do);
        if (method_exists(get_class(), $metodo)) {
            self::$metodo($gestor);
        } else {
            self::readView($gestor);
        }
        $bd->close();
    }
    private static function readView($gestor) {
        $usuarios = $gestor->getList();
        
        foreach ($usuarios as $indice => $usuario) {
                if($usuario->getEmail()==Request::req("email")){
                    $email=$usuario->getEmail();
                    $alias=$usuario->getAlias();
                    $css =$usuario->getCss();
                }
            }
            
            $plantilla = file_get_contents("../templates/_main.php");
            $head = file_get_contents("../templates/_header.html");
            if($css != "Classic"){
            if ($css== "Modern"){
                $css = "<link rel='stylesheet' type='text/css' href='../css/estilosAltaNavidadModern.css'>";
            }elseif($css = "Contrast"){
                $css = "<link rel='stylesheet' type='text/css' href='../css/estilosAltaNavidadContrast.css'>";
            }
            }else{
                 $css = "<link rel='stylesheet' type='text/css' href='../css/estilosAltaNavidad.css'>";
            }
            
            $body = file_get_contents("../templates/_bodyGaleria.html");
            $slider = file_get_contents("../templates/_slider.php");
            $pie = file_get_contents("../templates/_footer.html");
            
            $datos = array(
                "header" => $head,
                "title" => "Gallery",
                "cssSpecial" => "<link rel='stylesheet' type='text/css' href='../css/estilosGaleria.css'>",
                "css" => $css,
                "body" => $body,
                "usuario" => $alias . " " . "Gallery",
                "slider" => $slider,
                "footer" => $pie
            );
            foreach($datos as $key => $value){
                $plantilla = str_replace("{".$key."}", $value, $plantilla);
            }
            echo $plantilla;

    }
}