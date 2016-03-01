<?php
class ControladorHome {
    static function handle() {
        session_start(); 
        $action = Request::req("action");
        $do = Request::req("do");
        $metodo = $action . ucfirst($do);
        if (method_exists(get_class(), $metodo)) { //ucfirst pone la primera en mayuscula
            //echo 'El método existe';
            self::$metodo($gestor);
        } else {
            //echo 'la función no existe';
            self::readView($gestor);
        }
    }
    private static function readView($gestor) {
        //$users = $gestor->getList();

            $plantilla = file_get_contents("templates/_main.php");
            $head = file_get_contents("templates/_header.html");
            //foreach($users as $informacion => $usuario){
            //$css = $usuario.getCSS();
            if(is_null($_SESSION)){
                $css = $_SESSION["css_usuario"];
            }else{
                $css = "<link rel='stylesheet' type='text/css' href='css/estilosAltaNavidad.css'>";
            }
            
            
            
            // if($css != "Classic"){
            // if ($css== "Modern"){
            //     $css = file_get_contents("templates/_cssModern.html");
            // }elseif($css = "Contrast"){
            //     $css = file_get_contents("templates/_cssContrast.html");
            // }
            // }else{
            //      $css = file_get_contents("templates/_cssClassic.html");
            // }
            
            
            
            //}
            
            $body = file_get_contents("templates/_body.php");
            $pie = file_get_contents("templates/_footer.html");
            
            $datos = array(
                "header" => $head,
                "title" => "Home",
                "cssSpecial" => "",
                "css" => $css,
                "body" => $body,
                "footer" => $pie
            );
            foreach($datos as $key => $value){
                $plantilla = str_replace("{".$key."}", $value, $plantilla);
            }
            echo $plantilla;

    }
}