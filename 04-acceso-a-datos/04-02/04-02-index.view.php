<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 2</title>
    <script src="../javascript/script.min.js" type="text/javascript"></script>
    <style>
        th, td {
            padding: 1em;
        }

        tr.htmx-swapping td {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="search">Buscar empleado</label>
    <input id="search" name="q" type="search" value="<?=$_POST["q"]?>">
    <button type="submit">Buscar</button>
</form>
<a href="04-02-anadirEmpleado.view.php">Añadir empleado</a>
<form>
    <a href="#"
       hx-delete="./04-02-index.php"
       hx-target="body"
       hx-swap="innerHTML"
       hx-confirm="¿Estás seguro de que quieres eliminar todas las filas?">
        Vaciar lista
    </a>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($employees as $value) {
            echo "<tr>";
            echo "<input type='hidden' value=$value[id] name='id[]'>";
            echo "<td>$value[dni]</td>";
            echo "<td>$value[nombre]</td>";
            echo "<td>$value[apellidos]</td>";
            echo "<td><a href='./04-02-detalle.php?id=$value[id]'>Ver detalles</a> | " .
                "<a href='#' hx-get='./04-02-index.php?id=$value[id]' 
                    hx-target='closest tr' 
                    hx-swap='outerHTML swap:1s' 
                    hx-confirm='¿Estás seguro de que quieres eliminar esta fila?'>Eliminar
                </a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</form>
</body>
</html>