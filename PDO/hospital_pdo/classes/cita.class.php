<?php

class cita{

    private $codCita;
    private $lugar;
    private $consultorio;
    private $doctor;
    private $fecha_cita;
    private $hora_cita;
    private $fecha_registro;
    private $paciente_documento;



    public function __construct($cod=null,$lug=null,$cons=null,$doct=null,$fec_cita=null,$hora_cita=null,$fec_reg=null,$pac_doc=null)
    {
    
        $this->codCita=$cod;
        $this->lugar=$lug;
        $this->consultorio=$cons;
        $this->doctor=$doct;
        $this->fecha_cita=$fec_cita;
        $this->hora_cita=$hora_cita;
        $this->fecha_registro=$fec_reg;
        $this->paciente_documento=$pac_doc;
    
    }


public function getCodcita()
{
    return $this->codCita;
}

public function setCodCita($codCita)
{
    $this->codCita=$codCita;
    return $this;
}

public function getLugar()
{
    return $this->lugar;
}

public function setLugar($lugar)
{
    $this->lugar=$lugar;
    return $this;
}


public function getConsultorio()
{
    return $this->consultorio;
}

public function setConsultorio($consultorio)
{
    $this->consultorio=$consultorio;
    return $this;
}


public function getDoctor()
{
    return $this->doctor;
}

public function setDoctor($doctor)
{
    $this->doctor=$doctor;
    return $this;
}


public function getFechacita()
{
    return $this->fecha_cita;
}

public function setFechacita($fecha_cita)
{
    $this->fecha_cita=$fecha_cita;
    return $this;
}

public function getHoracita()
{
    return $this->hora_cita;
}

public function setHoracita($hora_cita)
{
    $this->hora_cita=$hora_cita;
    return $this;
}

public function getFecharegistro()
{
    return $this->fecha_registro;
}

public function setFecharegistro($fecha_registro)
{
    $this->fecha_registro=$fecha_registro;
    return $this;
}

public function getPacdocumento()
{
    return $this->paciente_documento;
}

public function setPacdocumento($paciente_documento)
{
    $this->paciente_documento=$paciente_documento;
    return $this;
}


}


?>