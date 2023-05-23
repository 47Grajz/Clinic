<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require_once '../../classes/cita.control.php';

    $cita_objeto = new citaControl();

    $allcitas = $cita_objeto->list_cita2();
    
    
    if(count($allcitas)<=0){?>

    <div>
        <p>No hay pacientes en la base de datos</p>
    </div>

    <?php
    }
    

    foreach($allcitas as $item) 
    { 
        $documento = $item->getCodcita();
        echo "Codigo de la cita: " . $item->getCodcita()."<br>";
        echo "lugar: " . $item->getLugar() . "<br>";
        echo "Consultorio: " . $item->getConsultorio() . "<br>";
        echo "Doctor: " . $item->getDoctor() . "<br>";
        echo "Fecha de la cita: " . $item->getFechacita() . "<br>";
        echo "Hora de la cita: " . $item->getHoracita() . "<br>";
        echo "Fecha de registro: " . $item->getFecharegistro() . "<br>";
        echo "Paciente Asociado: " . $item->getPacdocumento() . "<br>";?>

        <div>

        <a href="edit_cita.php?doc=<?php echo $item->getCodcita(); ?>">Editar </a><br>
        
        <a href="cita.process.php?op=3&cod=<?php echo $item->getCodcita(); ?>">Eliminar </a><br>
        </div>

        
        <?php echo "********************************* <br><br>";?>
        

        
        <?php
        
        
    }?>
        
      
    
    
</body>
</html>