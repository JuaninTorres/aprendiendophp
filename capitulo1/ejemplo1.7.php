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

$numero = $_GET['numero'];

if(is_numeric($n) && ($numero > 1) )
{
    // Me pasaron un numero
    $i = 1;
    $sumatoria = 0;
    while($i <= $n)
    {
        $sumatoria = $sumatoria + $i;
        $i++;
    }
    echo "La sumatoria desde 1 hasta {$n} es: {$sumatoria}";
}
else
{
    echo "<span style='font-size: 24px; color: red;'>ESTUPIDO, TE DIJE UN NUMERO !!!!</span>";
}


?>


        
</body>
</html>