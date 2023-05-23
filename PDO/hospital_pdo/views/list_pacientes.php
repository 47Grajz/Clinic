<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f354c857c6.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

    body{
        background: #4070f4;
    }
    .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            padding: 30px;
           
        }

        .card {
            width: 300px;
            padding: 20px;
            margin-top:20px ;
            margin-left: 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            margin: 5px 0;
        }

        .buttons{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-right: 20px;
        }
       button
       {
        width: 100px;
        border-radius: 10px;
        cursor: pointer;
     
       }

       .edit
       {
        background-color: #5AC40C;
        color: #fff
       }

       .delete{
        background-color: #CB1515;
        color: #fff
       }
       
    </style>
<body>

    <?php
    
    require_once '../classes/Paciente.control.php';

    $objPacienteControl = new PacienteControl();
    $allpacientes = $objPacienteControl->list_paciente2();
    
    if(count($allpacientes)<=0){?>

    <div>
        <p>No hay pacientes en la base de datos</p>
    </div>

    <?php
    }else?>
    
    <div class="card-container">

        <?php
        foreach($allpacientes as $item) 
        { ?>
            <div class="card">
                <h3>Informacion de usuario</h3>
                <p><strong>Documento:</strong><?php  echo $item->getDocumento(); ?></p>
                <p><strong>Nombre:</strong> <?php  echo $item->getNombre(); ?></p>
                <p><strong>Dirección:</strong> <?php  echo $item->getDireccion(); ?></p>
                <p><strong>Teléfono:</strong><?php  echo $item->getTelefono(); ?></p>
                <p><strong>Género:</strong> <?php  echo $item->getGenero(); ?></p>
                <p><strong>Nacimiento:</strong> <?php  echo $item->getFecha(); ?></p>
                <p><strong>Estado:</strong> <?php  echo $item->getEstado(); ?></p>
                <p><strong>Eps:</strong> <?php  echo $item->getEps(); ?></p>
                <div class="Buttons">
                    <a href="edit_paciente.php?doc=<?php echo $item->getDocumento(); ?>"><button class="edit">Editar <i class="fa-regular fa-pen-to-square"></i> </button></a>
                    <a href="pacienteProcess.php?op=3&doc=<?php echo $item->getDocumento(); ?>"><button class="delete">Eliminar <i class="fa-sharp fa-solid fa-trash"></i></button></a>  
                </div>
         </div>
           
            
            <?php
            
            
        }?>
    
    </div>  
      
    
    
</body>
</html>