<?php
    include('conexion.php');
    $correo=$_POST['email'];
    $pass=$_POST['contraseña'];

    $sql = "INSERT INTO sesiones(Correo,Password) VALUES('$correo','$pass')";
    $result = mysqli_query($cone,$sql);

?>