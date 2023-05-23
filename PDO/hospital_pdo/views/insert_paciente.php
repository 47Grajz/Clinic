<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/form.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Añadir Paciente</title>
</head>
<body>
    <div class="container">
        <header>Añadir paciente</header>

        <form action="pacienteProcess.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos personales</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Documento</label>
                            <input type="number" name="txtDocumento" placeholder="Ingresar Documento" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" name="txtNombre" placeholder="Ingresar Nombre" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="txtFecha_nac" placeholder="Ingresar Fecha" required>
                        </div>

                        <div class="input-field">
                            <label>Direccion</label>
                            <input type="text" name="txtDireccion" placeholder="Ingrese Telefono" required>
                        </div>

                        <div class="input-field">
                            <label>Telefono</label>
                            <input type="number" name="txtTelefono" placeholder="Ingrese Telefono" required>
                        </div>

                        <div class="input-field">
                            <label>Estado</label>
                            <select name="txtEstado" required>
                                <option disabled selected>Select gender</option>
                                <option value="Activo">Activo</option>
                                <option value="Suspendido">Suspendido</option>
                                <option value="En pausa">En pausa</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Genero</label>
                            <select name="txtGenero" required>
                                <option disabled selected>Select gender</option>
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                                <option value="O">Otro</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Eps</label>
                            <select name="txtEps" required>
                                <option disabled selected>Select gender</option>
                                <option value="Salud Total">Salud Total</option>
                                <option value="Sanitas">Sanitas</option>
                                <option value="Sura">Sura</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="input-field">
                           
                          
                        </div>
                    </div>
                </div>
                 <input type="submit" class="btnText" value="enviar">
                 <input type="hidden" name="op" value="1">
                      
                  
                </div> 
            </div>
</form>
          
     
    <script src="../js/form.js"></script>
</body>
</html>