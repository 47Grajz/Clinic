<?php


include_once $_SERVER['DOCUMENT_ROOT'].'/ADSO2497990/PDO/hospital_pdo/core/Connection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/ADSO2497990/PDO/hospital_pdo/classes/Paciente.class.php';


class PacienteControl extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function list_paciente()
    {
        $sql = $this->dbConnection->prepare("SELECT * FROM paciente");
        $sql->execute();

        while ($row = $sql->fetch(PDO::FETCH_OBJ)){
            echo "Nombre: " . $row->nombre . "<br>";
            echo "Documento: " . $row->documento . "<br>";
            echo "Direccion: " . $row->direccion . "<br>";
            echo "Telefono: " . $row->telefono . "<br>";
            echo "Fecha Nacimiento: " . $row->fecha_nac . "<br>";
            echo "Estado: " . $row->estado . "<br>";
            echo "Eps: " . $row->eps . "<br>";
            echo "********************************* <br><br>";
        }
    }

    public function list_paciente2()
    {
        $sql = $this->dbConnection->query("SELECT * FROM paciente");

        $array_pacientes = array();

        while($row = $sql ->fetch(PDO::FETCH_OBJ)){
            $pac_obj = new Paciente($row->documento,$row->nombre,$row->direccion,$row->telefono,$row->fecha_nac,$row->estado,$row->genero,$row->eps,);
            $array_pacientes[]=$pac_obj;
        }
        return $array_pacientes;
    }

    public function insert_paciente(Paciente $objPaciente)
    {
        $sql = $this->dbConnection->prepare("INSERT INTO paciente (documento,nombre,direccion,telefono,fecha_nac,estado,genero,eps) VALUES (?,?,?,?,?,?,?,?) ");

        $documento = $objPaciente->getDocumento();
        $Nombre = $objPaciente->getNombre();
        $direccion = $objPaciente->getDireccion();
        $telefono = $objPaciente->getTelefono();
        $fecha_nac = $objPaciente->getFecha();
        $estado = $objPaciente->getEstado();
        $genero = $objPaciente->getGenero();
        $eps = $objPaciente->getEps();


        $sql->bindParam(1,$documento);
        $sql->bindParam(2,$Nombre);
        $sql->bindParam(3,$direccion);
        $sql->bindParam(4,$telefono);
        $sql->bindParam(5,$fecha_nac);
        $sql->bindParam(6,$estado);
        $sql->bindParam(7,$genero);
        $sql->bindParam(8,$eps);
        $sql->execute();
    }



    public function select_paciente($documento)
    {
        $sql = $this->dbConnection->prepare("SELECT * FROM paciente WHERE documento =:documento");
        $sql->bindParam(":documento",$documento);
        $sql->execute();

        if($row = $sql->fetch(PDO::FETCH_OBJ))
        {
            $pac_obj = new Paciente($row->documento,$row->nombre,$row->direccion,$row->telefono,$row->fecha_nac,$row->estado,$row->eps,);
        }else{
            $pac_obj = null;

        }

        return $pac_obj;

      
    }


    public function delete_paciente($documento)
    {
        $sql = $this->dbConnection->prepare("DELETE FROM paciente WHERE documento =:documento");
        $sql->bindParam(":documento",$documento);
        $sql->execute();
        if( $sql->execute())
         return true;
         else
         return false;
        
    }


    public function edit_paciente(Paciente $objPaciente)
    {
        $sql = $this->dbConnection->prepare("UPDATE paciente SET nombre=:nombre,direccion=:direccion,telefono=:telefono,fecha_nac=:fecha_nac,estado=:estado,genero=:genero,eps=:eps  WHERE documento =:documento");

        $documento = $objPaciente->getDocumento();
        $nombre = $objPaciente->getNombre();
        $direccion = $objPaciente->getDireccion();
        $telefono = $objPaciente->getTelefono();
        $fecha_nac = $objPaciente->getFecha();
        $estado = $objPaciente->getEstado();
        $genero = $objPaciente->getGenero();
        $eps = $objPaciente->getEps();




        $sql->bindParam(":documento",$documento);
        $sql->bindParam(":nombre",$nombre);
        $sql->bindParam(":direccion",$direccion);
        $sql->bindParam(":telefono",$telefono);
        $sql->bindParam(":fecha_nac",$fecha_nac);
        $sql->bindParam(":estado",$estado);
        $sql->bindParam(":genero",$genero);
        $sql->bindParam(":eps",$eps); 
        $sql->execute();
        if( $sql->execute())
         return true;
         else
         return false;
        
    }

    public function edit_paciente2($documento)
    {
    $sql = $this->dbConnection->prepare("UPDATE paciente SET nombre=:nombre, direccion=:direccion, telefono=:telefono, fecha_nac=:fecha_nac, estado=:estado, genero=:genero, eps=:eps WHERE documento=:documento");
    $sql->bindParam(":documento", $documento);
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":direccion", $direccion);
    $sql->bindParam(":telefono", $telefono);
    $sql->bindParam(":fecha_nac", $fecha_nac);
    $sql->bindParam(":estado", $estado);
    $sql->bindParam(":genero", $genero);
    $sql->bindParam(":eps", $eps);

    $sql->execute();

    if ($sql->execute()) {
        return true;
    } else {
        return false;
    }
}



    
}


