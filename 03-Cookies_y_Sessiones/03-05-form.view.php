<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar sesión</title>
</head>
<body>
<?php
if (isset($mensaje)) echo $mensaje;
?>
    <form method='post'>
        <div>
            <label for='usuario'>Usuario</label>
            <input id='usuario' name='usuario'>
        </div>
        <div>
            <label for='password'>Contraseña</label>
            <input type='password' name='password' id='password'>
        </div>
        <button type='submit'>Iniciar sessión</button>
    </form>
</body>
</html>