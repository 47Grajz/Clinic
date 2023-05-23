<?php

include_once '../classes/Paciente.control.php';

$documento = isset($_GET['doc']) ? $_GET['doc'] : "";


$paciente_obj = new PacienteControl();

$obj_paciente = $paciente_obj->select_paciente($documento);

if($obj_paciente != null)
{?>


<form action="pacienteProcess.php" method="POST">

<h2>Actualizar paciente</h2>

<div class="control">
                <label for="txtDocumento">Documento</label>
                <input type="text" value="<?php echo $obj_paciente->getDocumento() ; ?>" name="txtDocumento" readonly>
            </div>
            <div class="control">
                <label for="txtNombre">Nombre</label>
                <input type="text" value="<?php echo $obj_paciente->getNombre() ; ?>" name="txtNombre">
            </div>
            <div class="control">
                <label for="txtFecha_nac">Fecha de nacimiento</label>   
                <input type="date" value="<?php echo $obj_paciente->getFecha() ; ?>" name="txtFecha_nac">
            </div>

            <div class="control">
                <label for="txtDireccion">Direccion</label>
                <input type="text" value="<?php echo $obj_paciente->getDireccion() ; ?>" name="txtDireccion">
            </div>

            <div class="control">
                <label for="txtTelefono">telefono</label>
                <input type="text" value="<?php echo $obj_paciente->getTelefono() ; ?>" name="txtTelefono">
            </div>

            <div class="control">
                <label for="txtEstado">estado</label>
                <input type="text" value="<?php echo $obj_paciente->getEstado() ; ?>" name="txtEstado">
            </div>

            <div class="control">
                <label for="txtGenero">Genero</label>
                <?php if($gen = $obj_paciente->getGenero()); ?>
                <select name="txtGenero" id="">
                    <option value="f" <?php echo ($gen=="f")?"selected":""; ?> >Femenino</option>
                    <option value="m" <?php echo ($gen=="m")?"selected":""; ?> >Masculino</option>
                    <option value="o" <?php echo ($gen=="0")?"selected":""; ?> >Otro</option>
                </select>
            </div>

            <div class="control">
                <label for="txtEps">eps</label>
                <input type="text" value="<?php echo $obj_paciente->getEstado() ; ?>" name="txtEps">
            </div>

            <input type="submit" value="Guardar">
            <input type="hidden" value="2" name="op">







</form>
 
<?php } ?>
