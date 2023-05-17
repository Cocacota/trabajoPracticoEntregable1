<?php

class viaje{
    private  $codigo;
    private  $destino;
    private  $maxPasajeros;
    private  $pasajeros;
    private $responsable;
    private $importe;
    public function __construct($cod,$d,$maxP,$ps,$respo,$impo){
        $this->codigo=$cod ;
        $this->destino=$d;
        $this->maxPasajeros=$maxP;
        $this->pasajeros=$ps;
        $this->responsable=$respo;
        $this->importe=$impo;
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
    public function getImporte(){
        return $this->importe;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setImporte($impo){
        $this->importe=$impo;
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
    public function hayPasajeDisponible(){
        return $this->getMaxPasajeros()>=count($this->getPasajeros());
    }
    public function venderPasaje($pasajero){
        if($this->hayPasajeDisponible()){
            $impo=$this->getImporte();
            $impo=$pasajero->incrementoImporte($impo);
            $this->setImporte($impo);
            $men="el pasaje esta disponible, el importe es de ".$impo."\n";
        }else{
            $men="no esta disponible el pasaje \n";
        }
        return $men;
    }
    public function __toString(){
        $mensaje="pasajeros del viaje \n";
        for($i=0;$i<count($this->getPasajeros());$i++){
            $mensaje= $mensaje . $this->getPasajeros()[$i] ."\n";
        }
        return "codigo del viaje ". $this->getCodigo(). " destino: ". $this->getDestino(). " pasajeros Maximos ". $this->getMaxPasajeros()." responsable del viaje:\n ". $this->getResponsable() ."\n". $mensaje."\n";
    }
}