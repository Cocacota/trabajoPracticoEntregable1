<?php
class PasajeroVIP extends Pasajero{
    private $nroViajero;
    private $millasPasajero;
    public function __construct($nom,$nroA,$nroT,$nroV,$milla)
    {
     parent::__construct($nom,$nroA,$nroT);
     $this->nroViajero=$nroV;
     $this->millasPasajero=$milla; 
    }
    public function getNroViajero(){
        return $this->nroViajero;
    }
    public function getMillasPasajero(){
        return $this->millasPasajero;
    }
    public function setNroViajero($nroV){
        $this->nroViajero=$nroV;
    }
    public function setMillasPasajero($millas){
        $this->millasPasajero=$millas;
    }
    public function incrementoImporte($importe){
        $millas=$this->getMillasPasajero();
        $this->setMillasPasajero($millas+1500);
        $importe=$importe*1.35;
        $importe=parent::incrementoImporte($importe);
        return $importe;
    }
}