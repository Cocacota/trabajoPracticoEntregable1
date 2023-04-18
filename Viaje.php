<?php
include "Pasajero.php";
include "ResposableV.php";
class viaje{
    private  $codigo;
    private  $destino;
    private  $maxPasajeros;
    private  $pasajeros;
    public function __construct(){ 
        $this->codigo=0 ;
        $this->destino="";
        $this->maxPasajeros=0;
        $this->pasajeros=[];
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getMaxPasajeros(){
        return $this->maxPasajeros;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setDestino($destino){
        $this->destino=$destino;
    }
    public function setMaxPasajeros($maxPasajeros){
        $this->maxPasajeros=$maxPasajeros;
    }
    public function modificarPasajero($p){
<<<<<<< HEAD:Viaje.php
        //$p array
        $cambio=false;
        $mensaje="pasajero no encontrado \n";
        $i=0;
        do{
            if($p->getNroDocumento()==$this->getPasajeros()[$i]->getNroDocumento()){
                $this->pasajeros[$i]=$p;
                $cambio=true;
                $mensaje="pasajero modificado\n";
=======
        //$p array con los datos del pasajero a modificar
        $cambio=true;
        $mensaje="pasajero no encontrado \n";
        $i=0;
        do{
            if($p["documento"]==$this->getPasajeros()[$i]["documento"]){ //se busca al pasajero por el documento 
                $this->pasajeros[$i]=$p;
                $cambio=false;
                $mensaje="pasajero modificado\n";//la bandera para que termine de recorrer el arreglo una ves encontrado el pasajero
>>>>>>> 7b74eabd411708a0c90fa8931beec79d498176e7:tpEntregable1.php
            }
            $i++;
        }while($i<count($this->getPasajeros())&&!$cambio);
        
        return $mensaje;
    }
    public function cargarPasajero($p){
<<<<<<< HEAD:Viaje.php
            //$p objeto 
            $mensaje="";
            $i=0;
            $encontro=false;
        if(count( $this->getPasajeros())<$this->getMaxPasajeros()){
            while($i<count( $this->getPasajeros())&&!$encontro){
                if($this->getPasajeros()[$i]->getNroDocumento()==$p->getNroDocumento()){
                    $encontro=true;
                    $mensaje="pasajero cargado anteriormente \n";
                }
                $i++;
            }
            if(!$encontro){
            $this->getpasajeros()[]=$p;
=======
            //$p arreglo con los datos del pasajero a cargar
            $mensaje="";
        if(count( $this->getPasajeros())<$this->getMaxPasajeros()){ //se comprueva si todabia queda lugar para mas pasajeros
            $this->pasajeros[count( $this->getPasajeros())]=$p;
>>>>>>> 7b74eabd411708a0c90fa8931beec79d498176e7:tpEntregable1.php
            $mensaje="pasajero cargado \n";
            }
        }else{
            $mensaje="maximos pasajeros \n";
        }
        return $mensaje;
    }
    public function __toString(){
<<<<<<< HEAD:Viaje.php
        $mensaje="pasajeros del viaje \n";
        for($i=0;$i<count($this->getPasajeros());$i++){
            $mensaje= $mensaje . $this->getPasajeros()[$i] ."\n";
=======
        $mensaje="pasajeros del viaje: \n";
        for($i=0;$i<count($this->getPasajeros());$i++){//genero un mensaje con los datos de todos los pasajeros
            $mensaje= $mensaje . "documento: ". $this->getPasajeros()[$i]["documento"]." nombre: ". $this->getPasajeros()[$i]["nombre"]. " apellido: ". $this->getPasajeros()[$i]["apellido"]."\n";
>>>>>>> 7b74eabd411708a0c90fa8931beec79d498176e7:tpEntregable1.php
        }
        return "codigo del viaje ". $this->getCodigo(). " destino: ". $this->getDestino(). " pasajeros Maximos ". $this->getMaxPasajeros()."\n". $mensaje."\n";
    }
}