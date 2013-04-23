<?php

// Esto es un comentario

/*
$i = 1;
while($i < 5)
{
    echo "<h{$i}>Esto es un h{$i}</h{$i}>";
    $i++;
}
*/

/*
if($_GET['v']< 0)
{
    echo 'v es negativo';
}
elseif($_GET['v']>10)
{
    echo 'v es positivo y mayor que 10';
}
else
{
    echo 'v es positivo';
}
*/

switch($_GET['l'])
{
    case 'django':
        echo 'Debes aprender a programar en Python';
        break;
    case 'symfony':
        echo 'Debes aprender a programar en PHP';
        break;
    case 'coffeescript':
        echo 'Debes aprender a programar en Javascript';
        break;
    default:
        echo 'Debes aprender de TODO !!!';
}


?>