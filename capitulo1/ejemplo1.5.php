<?php

// Version con while
$i = 1;
while($i < 5)
{
    echo "<h{$i}>Esto es un h{$i}</h{$i}>";
    $i++;
}

// Version con for
for($i=1;$i<5;$i++)
{
    echo "<h{$i}>Esto es un h{$i}</h{$i}>";
}


$vector = array(
    'nombre'   => 'Juan',
    'apellido' => 'Torres',
    'edad'     => 34
    );
$vectorLetras = array('a','b','c','d','e');

foreach($vector as $clave => $valor)
{
    echo "La clave es {$clave} apuntando al valor {$valor}<br />";
}







?>