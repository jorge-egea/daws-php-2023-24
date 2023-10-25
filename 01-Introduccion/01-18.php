<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 18</title>
</head>
<body>
<p>
    18. Crea una función que reciba un número indicando el día de la semana y que
    muestre por pantalla el día de la semana. En caso de recibir otro número que no
    esté entre el 1 y el 7, mostrará el mensaje “No es ningún día de la semana". Utiliza
    un switch para realizar el ejercicio.
</p>
<ul>
    <li>
        diaSemana(2) → “El día número 2 es martes.”
    </li>
    <li>
        diaSemana(9) → “No es ningún día de la semana”
    </li>
</ul>
<?php
function whichDayIsIt($number) {
    switch ($number) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return $number . " no es ningún día de la semana";
    }
}

if (isset($_GET["dia"])) {
    echo "<p>" . whichDayIsIt($_GET["dia"]) . "</p>";
}
?>
</body>
</html>
