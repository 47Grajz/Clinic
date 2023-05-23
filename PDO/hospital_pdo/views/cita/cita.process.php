
<?php

require_once '../../classes/cita.control.php';


$opcionFormulario = isset($_REQUEST['op']) ? $_REQUEST['op'] :"";

 if($opcionFormulario != "")
 {
    switch($opcionFormulario)
    {
        case 1:


            $lugar = isset($_POST['txtLugar'])?$_POST['txtLugar']:"";
            $consultorio = isset($_POST['txtConsultorio'])?$_POST['txtConsultorio']:"";
            $doctor = isset($_POST['txtDoctor'])?$_POST['txtDoctor']:"";
            $fechacita = isset($_POST['txtFechaCita'])?$_POST['txtFechaCita']:"";
            $horacita = isset($_POST['txtHoraCita'])?$_POST['txtHoraCita']:"";
            $fecharegistro = isset($_POST['txtFecharegistro'])?$_POST['txtFecharegistro']:"";
            $pacientedocumento = isset($_POST['txtPacdocumento'])?$_POST['txtPacdocumento']:"";
            $cita_objeto = new citaControl();
            $cita_obj=new cita('',$lugar,$consultorio,$doctor,$fechacita,$horacita,$fecharegistro,$pacientedocumento);
            
            echo $pacientedocumento;

            $cita_objeto->insert_cita($cita_obj);
            header('Location: list_citas.php');

            break;



            case 2:
           
                $lugar = isset($_POST['txtLugar'])?$_POST['txtLugar']:"";
            $consultorio = isset($_POST['txtConsultorio'])?$_POST['txtConsultorio']:"";
            $doctor = isset($_POST['txtDoctor'])?$_POST['txtDoctor']:"";
            $fechacita = isset($_POST['txtFechaCita'])?$_POST['txtFechaCita']:"";
            $horacita = isset($_POST['txtHoraCita'])?$_POST['txtHoraCita']:"";
            $fecharegistro = isset($_POST['txtFecharegistro'])?$_POST['txtFecharegistro']:"";
            $pacientedocumento = isset($_POST['txtPacdocumento'])?$_POST['txtPacdocumento']:"";
            $cita_objeto = new citaControl();
            $cita_obj=new cita($lugar,$consultorio,$doctor,$fechacita,$horacita,$fecharegistro,$pacientedocumento);
            
            $paciente_obj->edit_cita($cita_obj);
            #header('Location: list_pacientes.php');
    
                break;



            case 3:

                $cod = $_GET['cod']??null;

                $cita_obj = new citaControl();
                $cita_obj->delete_cita($cod);
                header('location:list_citas.php') ;

                break;

            default:
            break;

    }
 }