<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio2</title>
    <style>
        td {
            padding: 1em;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>DNI</td>
        <td><?=$employee["dni"]?></td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td><?=$employee["nombre"]?></td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td><?=$employee["apellidos"]?></td>
    </tr>
    <tr>
        <td>Edad</td>
        <td><?=$employee["fecha"]?></td>
    </tr>
    <tr>
        <td>Sexo</td>
        <td><?=$employee["genero"]?></td>
    </tr>
    <tr>
        <td>Fecha de nacimiento</td>
        <td><?=$employee["fecha"]?></td>
    </tr>
    <tr>
        <td>Curriculum</td>
        <td><?=$employee["curriculum"]?></td>
    </tr>
</table>
<a href="./04-02-index.php">Volver</a>
</body>
</html>
