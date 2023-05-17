<?php
class PasajeroEspecial extends Pasajero{
    private $sillaRueda;
    private $comida;
    public function __construct($nom,$nroA,$nrot,$v,$rueda,$com)
    {
        parent::__construct($nom,$nroA,$nrot,$v);
        $this->sillaRueda=$rueda;
        $this->comida=$com;
    }
    public function getSillaRueda(){
        return $this->sillaRueda;
    }
    public function setSillaRueda($rueda){
        $this->sillaRueda=$rueda;
    }
    public function getcomida(){
        return $this->comida;
    }
    public function setComida($com){
        $this->comida=$com;
    }
    public function incrementoImporte($importe){
        if($this->getSillaRueda()&&$this->getcomida()){
            $importe=$importe*1.3;
        }elseif($this->getcomida()){
            $importe=$importe*1.15;
        }elseif($this->getSillaRueda()){
            $importe=$importe*1.15;
        }
        if($this->getVuelta()){
            $importe= $importe*1.5;
        }
        return $importe;
    }
}