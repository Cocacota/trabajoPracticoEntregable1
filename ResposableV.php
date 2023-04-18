<?php
//una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido
class ResponsableV{
    private $nroEmpleado;
    private $nroLi;
    private $nombre;
    private $apellido;
    public function __construct($em,$li,$nom,$ap)
    {
        $this->nroEmpleado=$em;
        $this->nroLi=$li;
        $this->nombre=$nom;
        $this->apellido=$ap;
    }
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }
    public function getNroLicencia(){
        return $this->nroLi;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNroEmpleado($em){
        $this->nroEmpleado=$em;
    }
    public function setNroLicencia($li){
        $this->nroLi=$li;
    }
    public function setNombre($nom){
        $this->nombre=$nom;
    }
    public function setApellido($ap){
        $this->apellido=$ap;
    }
    public function __toString()
    {
        return"nombre ". $this->getNombre() . " apellido " .$this->getApellido(). " numero de documento ".$this->getNroEmpleado(). " telefono ".$this->getNroLicencia(). "\n";
    }
}