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



?>