<?php
class PasajeroVIP extends Pasajero{
    private $nroViajero;
    private $millasPasajero;
    public function __construct($nom,$nroA,$nroT,$v,$nroV,$milla)
    {
     parent::__construct($nom,$nroA,$nroT,$v);
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
        if ($millas<3000){
            $importe=$importe*1.35;
        }else{
            $importe=$importe*1.3;
        }
        if($this->getVuelta()){
            $importe= $importe*1.5;
        }
        return $importe;
    }
}