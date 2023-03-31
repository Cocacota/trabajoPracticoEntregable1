<?php
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
        //$p array
        $cambio=true;
        $mensaje="pasajero no encontrado \n";
        $i=0;
        do{
            if($p->documento==$this->getPasajeros()[$i]["documento"]){
                $this->pasajeros[$i]=$p;
                $cambio=false;
                $mensaje="pasajero modificado\n";
            }
            $i++;
        }while($i<count($this->getPasajeros())&&$cambio);
        
        return $mensaje;
    }
    public function cargarPasajero($p){
            //$p array
            $mensaje="";
        if(count( $this->getPasajeros())<$this->getMaxPasajeros()){
            $this->pasajeros[count( $this->getPasajeros())]=$p;
            $mensaje="pasajero cargado \n";
        }else{
            $mensaje="maximos pasajeros \n";
        }
        return $mensaje;
    }
    public function __toString(){
        $mensaje="pasajeros del viaje \n";
        for($i=0;$i<count($this->getPasajeros());$i++){
            $mensaje= $mensaje . "documento: ". $this->getPasajeros()[$i]["documento"]." nombre: ". $this->getPasajeros()[$i]["nombre"]. " apellido: ". $this->getPasajeros()[$i]["apellido"]."\n";
        }
        return "codigo del viaje ". $this->getCodigo(). " destino: ". $this->getDestino(). " pasajeros Maximos ". $this->getMaxPasajeros(). $mensaje."\n";
    }
}