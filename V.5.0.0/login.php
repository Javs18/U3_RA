<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="estilos2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

</head>
<body>
    <form action="login2.php" method="POST" id="form">
        <div class="form">
            <h1>Inicio de Sesion</h1>
            <div class="grupo">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" class="form-control" placeholder="Password" name="contraseña">
                <label for="">Password</label>
            </div>

            <button type="submit" name="registro">Registrarse</button>
        </div>
    </form>
</body>
</html>