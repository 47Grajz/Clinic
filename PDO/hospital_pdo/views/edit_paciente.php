

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
     
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 
    <title>Document</title>
</head>
<body>
<?php

include_once '../classes/Paciente.control.php';

$documento = isset($_GET['doc']) ? $_GET['doc'] : "";


$paciente_obj = new PacienteControl();

$obj_paciente = $paciente_obj->select_paciente($documento);

if($obj_paciente != null)
{?>


<div class="container">
        <header>Editar paciente</header>

        <form action="pacienteProcess.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos personales</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Documento</label>
                            <input type="number" name="txtDocumento" value="<?php echo $obj_paciente->getDocumento() ; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" name="txtNombre" value="<?php echo $obj_paciente->getNombre() ; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="txtFecha_nac" value="<?php echo $obj_paciente->getFecha() ; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Direccion</label>
                            <input type="text" name="txtDireccion" value="<?php echo $obj_paciente->getDireccion() ; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Telefono</label>
                            <input type="number" name="txtTelefono" value="<?php echo $obj_paciente->getTelefono() ; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Estado</label>
                            <?php if($est = $obj_paciente->getEstado());{ ?>
                            <select name="txtEstado" required>
                                <option disabled selected>Seleccionar genero</option>
                                <option value="Activo" <?php echo ($est=="Activo")?"selected":""; ?>>Activo</option>
                                <option value="Suspendido" <?php echo ($est=="Suspendido")?"selected":""; ?>>Suspendido</option>
                                <option value="En pausa" <?php echo ($est=="En pausa")?"selected":""; ?>>En pausa</option>
                            </select>
                            <?php } ?>
                        </div>

                        <div class="input-field">
                            <label>Genero</label>
                            <?php if($gen = $obj_paciente->getGenero());{ ?>
                            <select name="txtGenero" required>
                                <option disabled selected>Select gender</option>
                                <option value="H" <?php echo ($gen=="H")?"selected":""; ?>>Hombre</option>
                                <option value="M" <?php echo ($gen=="M")?"selected":""; ?>>Mujer</option>
                                <option value="O" <?php echo ($gen=="O")?"selected":""; ?>>Otro</option>
                            </select>
                            <?php } ?>
                        </div>

                        <div class="input-field">
                            <label>Eps</label>
                            <select name="txtEps" required>
                                <option disabled selected>Select gender</option>
                                <option value="Salud Total" <?php echo ($gen=="Salud Total")?"selected":""; ?>>Salud Total</option>
                                <option value="Sanitas"<?php echo ($gen=="Sanitas")?"selected":""; ?>>Sanitas</option>
                                <option value="Sura"  <?php echo ($gen=="Sura")?"selected":""; ?>>Sura</option>
                                <option value="Otro"  <?php echo ($gen=="Otro")?"selected":""; ?>>Otro</option>
                            </select>
                        </div>
                        <div class="input-field">
                           
                          
                        </div>
                    </div>
                </div>
                 <input type="submit" class="btnText" value="Guardar">
                 <input type="hidden" name="op" value="2">
                      
                  
                </div> 
            </div>
</form>
          
     
    <script src="../js/form.js"></script>



</body>
</html>









           
        

 
<?php } ?>
