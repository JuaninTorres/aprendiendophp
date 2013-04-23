<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 1.2</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" id="nombre" name="nombre"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
            <table>
            <tr>
                <th>Nombre</th>
                <th>Via POST</th>
                <th>Via GET</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><?php echo $_POST['nombre']; ?></td>
                <td><?php echo $_GET['nombre']; ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td><?php echo $_POST['email']; ?></td>
                <td><?php echo $_GET['email']; ?></td>
            </tr>
        </table>
</body>
</html>