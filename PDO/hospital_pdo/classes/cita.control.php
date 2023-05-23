<?php


include_once $_SERVER['DOCUMENT_ROOT'].'/ADSO2497990/PDO/hospital_pdo/core/Connection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/ADSO2497990/PDO/hospital_pdo/classes/cita.class.php';

class citaControl extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function list_cita()
    {
        $sql = $this->dbConnection->prepare("SELECT * FROM cita");
        $sql->execute();

        while ($row = $sql->fetch(PDO::FETCH_OBJ)){
            echo "Codigo Cita: " . $row->codCita . "<br>";
            echo "lugar: " . $row->lugar . "<br>";
            echo "Consultorio: " . $row->consultorio . "<br>";
            echo "Doctor: " . $row->doctor . "<br>";
            echo "Fecha de la cita: " . $row->fecha_cita . "<br>";
            echo "hora de la cita: " . $row->hora_cita . "<br>";
            echo "fecha de registro: " . $row->fecha_registro . "<br>";
            echo "Paciente Asociado: " . $row->paciente_documento . "<br>";
            echo "********************************* <br><br>";
        }
    }

    public function list_cita2()
    {
        $sql = $this->dbConnection->query("SELECT * FROM cita");

        $array_citas = array();

        while($row = $sql ->fetch(PDO::FETCH_OBJ)){
            $cita_obj = new cita($row->codCita,$row->lugar,$row->consultorio,$row->doctor,$row->fecha_cita,$row->hora_cita,$row->fecha_registro,$row->paciente_documento);
            $array_citas[]=$cita_obj;
        }
        return $array_citas;
    }



    public function insert_cita(cita $cita_obj)
    {
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO cita (lugar, consultorio, doctor, fecha_cita, hora_cita, fecha_registro, paciente_documento) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
            $lugar = $cita_obj->getLugar();
            $consultorio = $cita_obj->getConsultorio();
            $doctor = $cita_obj->getDoctor();
            $fecha_cita = $cita_obj->getFechacita();
            $hora_cita = $cita_obj->getHoracita();
            $fecha_registro = $cita_obj->getFecharegistro();
            $paciente_documento = $cita_obj->getPacdocumento();
    
            $sql->bindParam(1, $lugar);
            $sql->bindParam(2, $consultorio);
            $sql->bindParam(3, $doctor);
            $sql->bindParam(4, $fecha_cita);
            $sql->bindParam(5, $hora_cita);
            $sql->bindParam(6, $fecha_registro);
            $sql->bindParam(7, $paciente_documento);
            $sql->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    



    public function select_cita($codCita)
    {
        $sql = $this->dbConnection->prepare("SELECT * FROM cita WHERE codCita =:codCita");
        $sql->bindParam(":codCita",$codCita);
        $sql->execute();

        if($row = $sql->fetch(PDO::FETCH_OBJ))
        {
            $cita_obj = new cita($row->codCita,$row->lugar,$row->consultorio,$row->doctor,$row->fecha_cita,$row->hora_cita,$row->fecha_registro,$row->paciente_documento);
        }else{
            $cita_obj = null;

        }

        return $cita_obj;

      
    }


    public function delete_cita($cod)
    {
        $sql = $this->dbConnection->prepare("DELETE FROM cita WHERE codCita =:codCita");
        $sql->bindParam(":codCita",$cod);
        $sql->execute();
        if( $sql->execute())
         return true;
         else
         return false;
        
    }


    public function edit_cita(cita $cita_obj)
    {
        try {
            $sql = $this->dbConnection->prepare("UPDATE paciente SET lugar=:lugar, consultorio=:consultorio, doctor=:doctor, fecha_cita=:fecha_cita, hora_cita=:hora_cita, fecha_registro=:fecha_registro, paciente_documento=:paciente_documento WHERE codCita=:codCita");
    
            $codCita = $cita_obj->getCodcita();
            $lugar = $cita_obj->getLugar();
            $consultorio = $cita_obj->getConsultorio();
            $doctor = $cita_obj->getDoctor();
            $fecha_cita = $cita_obj->getFechacita();
            $hora_cita = $cita_obj->getHoracita();
            $fecha_registro = $cita_obj->getFecharegistro();
            $paciente_documento = $cita_obj->getPacdocumento();
    
            $sql->bindParam(':codCita', $codCita);
            $sql->bindParam(':lugar', $lugar);
            $sql->bindParam(':consultorio', $consultorio);
            $sql->bindParam(':doctor', $doctor);
            $sql->bindParam(':fecha_cita', $fecha_cita);
            $sql->bindParam(':hora_cita', $hora_cita);
            $sql->bindParam(':fecha_registro', $fecha_registro);
            $sql->bindParam(':paciente_documento', $paciente_documento);
            $sql->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    

    public function edit_cita2($codCita)
    {
        $sql = $this->dbConnection->prepare("UPDATE paciente SET lugar=:lugar,consultorio=:consultorio,doctor=:doctor,fecha_cita=:fecha_cita,hora_cita=:hora_cita,fecha_registro=:fecha_registro,paciente_documento=:paciente_documento  WHERE codCita =:codCita");
        $sql->bindParam("codCita",$codCita);
        $sql->bindParam("lugar",$lugar);
        $sql->bindParam("consultorio",$consultorio);
        $sql->bindParam("doctor",$doctor);
        $sql->bindParam("fecha_cita",$fecha_cita);
        $sql->bindParam("hora_cita",$hora_cita);
        $sql->bindParam("fecha_registro",$fecha_registro);
        $sql->bindParam("paciente_documento",$paciente_documento);
        $sql->execute();

    $sql->execute();

    if ($sql->execute()) {
        return true;
    } else {
        return false;
    }
}



    
}


