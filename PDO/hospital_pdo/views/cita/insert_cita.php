


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="cita.process.php" class="control" method="post">
            <h2>Añadir Cita</h2>
            <div class="control">
                <label for="txtLugar">lugar</label>
                <input type="text" name="txtLugar">
            </div>
            <div class="control">
                <label for="txtConsultorio">Consultorio</label>
                <input type="text" name="txtConsultorio">
            </div>

            <div class="control">
                <label for="txtDoctor">Doctor</label>
                <input type="text" name="txtDoctor">
            </div>

            <div class="control">
                <label for="txtFechaCita">Fecha de la Cita</label>
                <input type="date" name="txtFechaCita">
            </div>

            <div class="control">
                <label for="txtHoraCita">Hora de la cita</label>
                <input type="time" name="txtHoraCita">
            </div>

            <div class="control">
                <label for="txtFecharegistro">Fecha de registro</label>
                <input type="date" name="txtFecharegistro">
            </div>
            <div class="control">
    <label for="txtPacdocumento">Paciente Asociado</label>
    <?php 
    require_once '../../classes/Paciente.control.php';
    $objPacienteControl = new PacienteControl();
    $allpacientes = $objPacienteControl->list_paciente2();
    ?>

    <select name="txtPacdocumento" id="txtPacdocumento"> 
        <?php foreach($allpacientes as $item) { ?>
            <option value="<?php echo $item->getDocumento(); ?>"><?php echo $item->getNombre(); ?></option>
        <?php }?>
    </select>
</div>


            <input type="submit">
            <input type="hidden" value="1" name="op">
        </form>
    </div>
</body>
</html>