<?php
    include('conexion.php');
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $departamento=$_POST['departamento'];

    $sql = "INSERT INTO citas(Nombre,Correo,Fecha,Hora,Departamento) VALUES('$nombre','$correo','$fecha','$hora','$departamento')";
    $result = mysqli_query($cone,$sql);
    if($result){
        echo "Registro creado";
    }
    else{
        echo "No hubo conexion";
    }
?>