<?php

class Paciente{

    private $documento;
    private $nombre;
    private $direccion;
    private $telefono;
    private $fecha_nacimiento;
    private $estado;
    private $genero;
    private $eps;



public function __construct($doc=null,$nom=null,$dir=null,$tel=null,$fec=null,$est=null,$gen=null,$eps=null)
{

    $this->documento=$doc;
    $this->nombre=$nom;
    $this->direccion=$dir;
    $this->telefono=$tel;
    $this->fecha_nacimiento=$fec;
    $this->estado=$est;
    $this->genero=$gen;
    $this->eps=$eps;

}


public function getDocumento()
{
    return $this->documento;
}

public function setDocumento($documento)
{
    $this->documento=$documento;
    return $this;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($nombre)
{
    $this->nombre=$nombre;
    return $this;
}


public function getDireccion()
{
    return $this->direccion;
}

public function setDireccion($direccion)
{
    $this->direccion=$direccion;
    return $this;
}


public function getTelefono()
{
    return $this->telefono;
}

public function setTelefono($telefono)
{
    $this->telefono=$telefono;
    return $this;
}


public function getFecha()
{
    return $this->fecha_nacimiento;
}

public function setFecha($fecha)
{
    $this->fecha_nacimiento=$fecha;
    return $this;
}

public function getEstado()
{
    return $this->estado;
}

public function setEstado($estado)
{
    $this->estado=$estado;
    return $this;
}

public function getGenero()
{
    return $this->genero;
}

public function setGenero($genero)
{
    $this->genero=$genero;
    return $this;
}

public function getEps()
{
    return $this->eps;
}

public function setEps($eps)
{
    $this->eps=$eps;
    return $this;
}


}


?>