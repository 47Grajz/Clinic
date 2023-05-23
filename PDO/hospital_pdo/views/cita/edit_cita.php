<?php

include_once '../../classes/cita.control.php';

$codCita = isset($_GET['doc']) ? $_GET['doc'] : "";


$cita_objeto = new citaControl();

$obj_cita = $cita_objeto->select_cita($codCita);

if($obj_cita != null)
{?>


<form action="cita.process.php" method="POST">

<h2>Actualizar paciente</h2>

<div class="control">
                <label for="txtDocumento">Codigo de la cita</label>
                <input type="text" value="<?php echo $obj_cita->getCodcita() ; ?>" name="txtDocumento" readonly>
            </div>
            <div class="control">
                <label for="txtLugar">Lugar de la cita</label>
                <input type="text" value="<?php echo $obj_cita->getLugar() ; ?>" name="txtLugar">
            </div>
            <div class="control">
                <label for="txtConsultorio">Consultorio</label>   
                <input type="text" value="<?php echo $obj_cita->getConsultorio() ; ?>" name="txtConsultorio">
            </div>

            <div class="control">
                <label for="txtDoctor">Doctor</label>
                <input type="text" value="<?php echo $obj_cita->getDoctor() ; ?>" name="txtDoctor">
            </div>

            <div class="control">
                <label for="txtFechaCita">Fecha de la cita</label>
                <input type="date" value="<?php echo $obj_cita->getFechacita() ; ?>" name="txtFechaCita">
            </div>

            <div class="control">
                
               <label for="txtHoraCita">Hora de la cita</label>
                <input type="time" value="<?php echo $obj_cita->getHoracita() ; ?>" name="txtHoraCita">
            </div>

            <div class="control">
                <label for="txtFecharegistro">Fecha de registro</label>
                <input type="date" value="<?php echo $obj_cita->getFecharegistro() ; ?>" name="txtFecharegistro">
            </div>

              <div class="control">
                <label for="txtPacdocumento">Paciente asociado</label>
                <input type="text" value="<?php echo $obj_cita->getPacdocumento() ; ?>" name="txtPacdocumento">
            </div>


            <input type="submit" value="Guardar">
            <input type="hidden" value="2" name="op">







</form>
 
<?php } ?>
