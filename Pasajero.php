<?php
//pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
class Pasajero{
    private $nombre;
    private $nroAsiento;
    private $nroTicket;
    private $vuelta;
    public function __construct($nom,$nroA,$nrot,$v)
    {
        $this->nombre=$nom;
        $this->nroAsiento=$nroA;
        $this->nroTicket=$nrot;
        $this->vuelta=$v;
    }
    public function getNroAsiento(){
        return $this->nroAsiento;
    }
    public function getNroTicket(){
        return $this->nroTicket;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNroAsiento($nroA){
        $this->nroAsiento=$nroA;
    }
    public function getVuelta(){
        return $this->vuelta;
    }
    public function setNombre($nom){
        $this->nombre=$nom;
    }
    public function setNroTicket($nroT){
        $this->nroTicket=$nroT;
    }
    public function setVuelta($v){
        $this->vuelta=$v;
    }
    public function incrementoImporte($importe){
        $importe=$importe*1.1;
        if($this->getVuelta()){
            $importe= $importe*1.5;
        }
        return $importe;
    }
    public function __toString()
    {
        return "nombre ". $this->getNombre() . " numero asiento " .$this->getNroAsiento(). " numero de ticket ".$this->getNroTicket() . "pasaje de vuelta" . $this->getVuelta() . "\n";
    }
}