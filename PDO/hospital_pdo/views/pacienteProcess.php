
<?php

include_once '../classes/Paciente.control.php';


$opcionFormulario = isset($_REQUEST['op']) ? $_REQUEST['op'] :"";

 if($opcionFormulario != "")
 {
    switch($opcionFormulario)
    {
        case 1:
           
            $nombre = isset($_POST['txtNombre'])?$_POST['txtNombre']:"";
            $documento = isset($_POST['txtDocumento'])?$_POST['txtDocumento']:"";
            $fecha_nac = isset($_POST['txtFecha_nac'])?$_POST['txtFecha_nac']:"";
            $direccion = isset($_POST['txtDireccion'])?$_POST['txtDireccion']:"";
            $telefono = isset($_POST['txtTelefono'])?$_POST['txtTelefono']:"";
            $estado = isset($_POST['txtEstado'])?$_POST['txtEstado']:"";
            $genero = isset($_POST['txtGenero'])?$_POST['txtGenero']:"";
            $eps = isset($_POST['txtEps'])?$_POST['txtEps']:"";
            $paciente_obj = new PacienteControl();
            $pac_obj=new Paciente($documento,$nombre,$direccion,$telefono,$fecha_nac,$estado,$genero,$eps,);
            
            $paciente_obj->insert_paciente($pac_obj);
            header('Location: list_pacientes.php');

            break;



            case 2:
           
                $nombre = isset($_POST['txtNombre'])?$_POST['txtNombre']:"";
                $documento = isset($_POST['txtDocumento'])?$_POST['txtDocumento']:"";
                $fecha_nac = isset($_POST['txtFecha_nac'])?$_POST['txtFecha_nac']:"";
                $direccion = isset($_POST['txtDireccion'])?$_POST['txtDireccion']:"";
                $telefono = isset($_POST['txtTelefono'])?$_POST['txtTelefono']:"";
                $estado = isset($_POST['txtEstado'])?$_POST['txtEstado']:"";
                $genero = isset($_POST['txtGenero'])?$_POST['txtGenero']:"";
                $eps = isset($_POST['txtEps'])?$_POST['txtEps']:"";
    
                $paciente_obj = new PacienteControl();
                $pac_obj=new Paciente($documento,$nombre,$direccion,$telefono,$fecha_nac,$estado,$genero,$eps,);
                
                $paciente_obj->edit_paciente($pac_obj);
                header('Location: list_pacientes.php');
    
                break;



            case 3:

                $doc = $_GET['doc']??null;

                $paciente_Control = new PacienteControl();
                $paciente_Control->delete_paciente($doc);
                header('location:list_pacientes.php') ;

                break;

            default:
            break;

    }
 }