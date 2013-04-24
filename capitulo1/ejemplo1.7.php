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

if(is_numeric($numero) && ($numero > 1) )
{
    // Me pasaron un numero
    $i = 1;
    $sumatoria = 0;
    while($i <= $numero)
    {
        $sumatoria = $sumatoria * ($i + $numero);
       break;
    }
    echo "La sumatoria desde 1 hasta {$numero} es: {$sumatoria}";
}
else
{
    echo "<span style='font-size: 24px; color: red;'>ESTUPIDO, TE DIJE UN NUMERO !!!!</span>";
}



?>


        
</body>
</html>