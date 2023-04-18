<?php
//pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
class Pasajero{
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    public function __construct($nom,$ap,$nroD,$t)
    {
        $this->nombre=$nom;
        $this->apellido=$ap;
        $this->nroDocumento=$nroD;
        $this->telefono=$t;
    }
    public function getNroDocumento(){
        return $this->nroDocumento;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNroDocumento($nroD){
        $this->nroDocumento=$nroD;
    }
    public function setTelefono($t){
        $this->telefono=$t;
    }
    public function setNombre($nom){
        $this->nombre=$nom;
    }
    public function setApellido($ap){
        $this->apellido=$ap;
    }
    public function __toString()
    {
        return "nombre ". $this->getNombre() . " apellido " .$this->getApellido(). " numero de documento ".$this->getNroDocumento(). "telefono ".$this->getTelefono(). "\n";
    }
}