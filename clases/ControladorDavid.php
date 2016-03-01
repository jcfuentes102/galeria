<?php
class ControladorDavid {
    static function handle() {
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

            $plantilla = file_get_contents("../templates/_main.php");
            $head = file_get_contents("../templates/_header.html");
            //foreach($users as $informacion => $usuario){
            //$css = $usuario.getCSS();
            $css = $_SESSION["css_usuario"];
            //$css = "Classic";
            if($css != "Classic"){
            if ($css== "Modern"){
                $css = file_get_contents("../templates/_cssModern.html");
            }elseif($css = "Contrast"){
                $css = file_get_contents("../templates/_cssContrast.html");
            }
            }else{
                 $css = file_get_contents("../templates/_cssClassic.html");
            }
            //}
            
            $body = file_get_contents("../templates/_bodyDavid.html");
            $pie = file_get_contents("../templates/_footer.html");
            
            $datos = array(
                "header" => $head,
                "title" => "David Lynch",
                "cssSpecial" => "<link rel='stylesheet' type='text/css' href='../css/estilosDavid.css'>",
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