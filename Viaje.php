<?php

class viaje{
    private  $codigo;
    private  $destino;
    private  $maxPasajeros;
    private  $pasajeros;
    private $responsable;
    private $importe;
    private $costosAbonados;
    public function __construct($cod,$d,$maxP,$ps,$respo,$impo,$abo){
        $this->codigo=$cod ;
        $this->destino=$d;
        $this->maxPasajeros=$maxP;
        $this->pasajeros=$ps;
        $this->responsable=$respo;
        $this->importe=$impo;
        $this->costosAbonados=$abo;
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
    public function getCostosAbonado(){
        return $this->costosAbonados;
    }
    public function setCostosAbonado($abo){
        $this->costosAbonados=$abo;
    }
    public function modificarPasajero($p){
        //$p array
        $cambio=false;
        $mensaje="pasajero no encontrado \n";
        $i=0;
        do{
            if($p->getNroTicket()==$this->getPasajeros()[$i]->getNroTicket()){
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
                if($this->getPasajeros()[$i]->getNroTicket()==$p->getNroTicket()){
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
        return $this->getMaxPasajeros()>count($this->getPasajeros());
    }
    public function venderPasaje($pasajero){
        if($this->hayPasajeDisponible()){
            $this->cargarPasajero($pasajero);
            $impo=$this->getImporte();
            $impo=$pasajero->incrementoImporte($impo);
            $costosActual=$this->getCostosAbonado();
            $this->setCostosAbonado($costosActual+$impo);
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
        return "codigo del viaje ". $this->getCodigo(). " destino: ".
        $this->getDestino(). " pasajeros Maximos ". $this->getMaxPasajeros(). "importe del viaje : ". 
        $this->getImporte() . "total recaudado: ". $this->getCostosAbonado() ." responsable del viaje:\n ".
        $this->getResponsable() ."\n". $mensaje."\n";
    }
}