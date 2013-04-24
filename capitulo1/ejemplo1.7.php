<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 1.7</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Numero</td>
                <td><input type="number" id="numero" name="numero"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
            

<?php

$numero = $_POST['numero'];

echo $numero


?>


        
</body>
</html>