<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../css/form.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Añadir cita</title>
</head>
<body>
    <div class="container">
        <header>Añadir cita</header>

        <form action="cita.process.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos personales</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Lugar</label>
                            <input type="text" name="txtLugar" placeholder="Ingresar Lugar" required>
                        </div>

                        <div class="input-field">
                            <label>Consultorio</label>
                            <input type="text" name="txtConsultorio" placeholder="Ingresar Consultorio" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre Doctor</label>
                            <input type="text" name="txtDoctor" placeholder="Ingresar Doctor" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha cita</label>
                            <input type="date" name="txtFechaCita" placeholder="Ingrese hora" required>
                        </div>


                        <div class="input-field">
                            <label>Hora cita</label>
                            <input type="time" name="txtHoraCita" placeholder="Ingrese hora" required>
                        </div>


                       

                        <div class="input-field">
                            <label>Fecha de registro</label>
                            <input type="date" name="txtFecharegistro" placeholder="Ingrese Fecha registrada" required>
                        </div>

                        <div class="input-field">
                            <label>Paciente asociado</label>
                            <?php  require_once '../../classes/Paciente.control.php';
                                $objPacienteControl = new PacienteControl();
                                $allpacientes = $objPacienteControl->list_paciente2();
                            ?>
                             <select name="txtPacdocumento" id="txtPacdocumento"> 
                                <?php foreach($allpacientes as $item) { ?>
                                    <option value="<?php echo $item->getDocumento(); ?>"><?php echo $item->getNombre(); ?></option>
                                <?php }?>
                            </select>
                        </div>
    
                        <div class="input-field">
                           
                          
                        </div>
                    </div>
                </div>
                 <input type="submit" class="btnText" value="Añadir cita">
                 <input type="hidden" name="op" value="1">
                      
                  
                </div> 
            </div>
</form>
          
     
    <script src="../js/form.js"></script>
</body>
</html>