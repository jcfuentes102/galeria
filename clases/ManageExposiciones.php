<?php


class ManageExposiciones {
    
    private $bd = null;
    private $tabla = "exposiciones";
    
    function __construct(DataBase $bd) {
        $this->bd = $bd;
        //var_dump($this->bd);
    }
    
    function get($ID){
        //devuelve un objeto de la clase Exposicion
        $parametros = array();
        $parametros['ID'] = $ID;
        $this->bd->select($this->tabla, "*", "ID=:ID", $parametros);
        $fila=$this->bd->getRow();
        $exposicion = new Exposicion();
        $exposicion->set($fila);
        return $exposicion;
    }
    
    function delete($ID){
        $parametros = array();
        $parametros['ID'] = $ID;
        return $this->bd->delete($this->tabla, $parametros);
    }
    
    function deleteexposicions($parametros){
        return $this->bd->delete($this->tabla, $parametros);
    }
    
    function erase(Exposicion $exposicion){
        return $this->delete($exposicion->getID());
    }
    
    function set(Exposicion $exposicion){
        //Update de todos los campos menos el ID, el ID se usara como el where para el update numero de filas modificadas
         $parametrosSet=array();
         $parametrosSet['Dia']=$exposicion->getDia();
         $parametrosSet['Hora']=$exposicion->getHora();
         $parametrosSet['Libre']=$exposicion->getLibre();
         $parametrosSet['Nombre']=$exposicion->getNombre();
         $parametrosSet['Artista']=$exposicion->getArtista();
        
        $parametrosWhere = array();
        $parametrosWhere['ID'] = $exposicion->getID();
        return $this->bd->update($this->tabla, $parametrosSet, $parametrosWhere);
        
    }
    
    function insert(Exposicion $exposicion){
        //Se pasa un objeto Exposicion y se inserta, se devuelve el ID del elemento con el que se ha insertado
         $parametrosSet=array();
         $parametrosSet['ID']=$exposicion->getID();
         $parametrosSet['Dia']=$exposicion->getDia();
         $parametrosSet['Hora']=$exposicion->getHora();
         $parametrosSet['Libre']=$exposicion->getLibre();
         $parametrosSet['Nombre']=$exposicion->getNombre();
         $parametrosSet['Artista']=$exposicion->getArtista();
        return $this->bd->insert($this->tabla, $parametrosSet);
    }
    
    function getList($pagina=1, $orden="", $nrpp=Constant::NRPP, $condicion="1=1", $parametros=array()){
        
        $ordenPredeterminado = "$orden, ID, Dia";
        
        if($orden==="" || $orden === null){
            $ordenPredeterminado = "ID, Dia";
        }
         $registroInicial = ($pagina-1)*$nrpp;
         $this->bd->select($this->tabla, "*", $condicion, $parametros, $ordenPredeterminado , "$registroInicial, $nrpp");
         $r=array();
         while($fila =$this->bd->getRow()){
             $exposicion = new Exposicion();
             $exposicion->set($fila);
             $r[]=$exposicion;
         }
         return $r;
    }
    
     function getValuesSelect(){
        $this->bd->query($this->tabla, "ID", array(), "Hora");
        $array = array();
        while($fila=$this->bd->getRow()){
            $array[$fila[0]] = $fila[1];
        }
        return $array;
    }
    
    function count($condicion="1 = 1", $parametros = array()){
        return $this->bd->count($this->tabla, $condicion, $parametros);
    }

}
