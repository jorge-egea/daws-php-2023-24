<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 2</title>
    <style>
        form {
            width: min(30rem, 100%);
            display: grid;
            gap: 1rem;
        }
        form > * {
            display: grid;
            gap: 0.5em;
        }
    </style>
</head>
<body>
<form method="post" action="04-02-anadirEmpleado.php">
    <div>
        <label for="dni">DNI</label>
        <input id="dni" name="dni" maxlength="9" required>
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" maxlength="50" required>
    </div>
    <div>
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" name="apellidos" maxlength="100" required>
    </div>
    <div>
        <label for="fecha">Fecha de nacimiento</label>
        <input id="fecha" name="fecha" type="date" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" maxlength="100" required>
    </div>
    <div>
        <label for="genero">Sexo</label>
        <select id="genero" name="genero">
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>
    </div>
    <div>
        <label for="curriculum">Curriculum</label>
        <textarea id="curriculum" name="curriculum" maxlength="500"></textarea>
    </div>
    <div></div>
    <button type="submit">Añadir</button>
</form>
<a href="04-02-index.php">Volver</a>
</body>
</html>
