<?php

class viaje{
    private  $codigo;
    private  $destino;
    private  $maxPasajeros;
    private  $pasajeros;
    private $responsable;
    public function __construct(){
        $this->codigo=0 ;
        $this->destino="";
        $this->maxPasajeros=0;
        $this->pasajeros=[];
        $this->responsable=null;
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
    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($respo){
        $this->responsable=$respo;
    }
    public function modificarPasajero($p){
        //$p array
        $cambio=false;
        $mensaje="pasajero no encontrado \n";
        $i=0;
        do{
            if($p->getNroDocumento()==$this->getPasajeros()[$i]->getNroDocumento()){
                $this->pasajeros[$i]=$p;
                $cambio=true;
                $mensaje="pasajero modificado\n";
            }
            $i++;
        }while($i<count($this->getPasajeros())&&!$cambio);
        
        return $mensaje;
    }
    public function cargarPasajero($p){
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
            $this->pasajeros[]=$p;
            $mensaje="pasajero cargado \n";
            }
        }else{
            $mensaje="maximos pasajeros \n";
        }
        return $mensaje;
    }
    public function __toString(){
        $mensaje="pasajeros del viaje \n";
        for($i=0;$i<count($this->getPasajeros());$i++){
            $mensaje= $mensaje . $this->getPasajeros()[$i] ."\n";
        }
        return "codigo del viaje ". $this->getCodigo(). " destino: ". $this->getDestino(). " pasajeros Maximos ". $this->getMaxPasajeros()." responsable del viaje:\n ". $this->getResponsable() ."\n". $mensaje."\n";
    }
}