<?php

//POJO - plana
class Exposicion {
    private $ID, $Dia, $Hora, $Libre, $Nombre, $Artista;
    
    //1º Constructor -> null
   function __construct($ID=null, $Dia=null, $Hora=null, $Libre=null, $Nombre=null, $Artista=null) {
         $this->ID = $ID;
         $this->Dia = $Dia;
         $this->Hora = $Hora;
         $this->Libre = $Libre;
         $this->Nombre = $Nombre;
         $this->Artista = $Artista;
    }
    
    //2º getter y setter
    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getDia() {
        return $this->Dia;
    }

    public function setDia($Dia) {
        $this->Dia = $Dia;
    }

    public function getHora() {
        return $this->Hora;
    }

    public function setHora($Hora) {
        $this->Hora = $Hora;
    }

    public function getLibre() {
        return $this->Libre;
    }

    public function setLibre($Libre) {
        $this->Libre = $Libre;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getArtista() {
        return $this->Artista;
    }

    public function setArtista($Artista) {
        $this->Artista = $Artista;
    }
    
    //3º getJson
    public function getJson(){
        $r = '{';
        foreach ($this as $indice => $valor) {
            $r .= '"' .$indice . '":"' .$valor. '",';
        }
        $r = substr($r, 0,-1);
        $r .='}';
        return $r;
    }
    
    //4º set genérico    
    function set($valores, $inicio=0){
        $i = 0;
        foreach ($this as $indice => $valor) {
           $this->$indice = $valores[$i+$inicio];
           $i++;
        }
    }
    
    public function __toString() {
        $r ='';
        foreach ($this as $key => $valor) { 
            $r .= "$valor ";
        }
        return $r;
    }
    
    public function getArray($valores = true){
        $array = array();
        foreach ($this as $key => $valor) {
            if($valores === true){
                $array[$key] = $valor;
            }else{
                $array[$key]=null;
            }
        }
        return $array;
    }
    
    function read(){
        foreach ($this as $key => $valor) {
            $this->$key = Request::req($key);
        }
    }
    
}
