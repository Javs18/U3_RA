<?php
    $cons_usuario="root";
    $cons_passw="oscarmtz916";
    $cons_base_datos="clinica";
    $cons_equipo="localhost";
    $cone=mysqli_connect($cons_equipo,$cons_usuario,$cons_passw,$cons_base_datos);
    
    if($cone)
    {
        header('Location: index.php');;
    }
    else
    {
        echo "Error en la conexión";
    }
?>