<?php

// Funciones !!!

function calcularSumatoria($n)
{
    if(is_numeric($n) && ($n > 1) )
    {
        // Me pasaron un numero
        $i = 1;
        $sumatoria = 0;
        while($i <= $n)
        {
            $sumatoria = $sumatoria + $i;
            $i++;
        }
        return $sumatoria;
    }
    else
    {
        echo "<span style='font-size: 24px; color: red;'>ESTUPIDO, TE DIJE UN NUMERO !!!!</span>";
        return false;
    }
}

$numero = 5;
$otroNumero = 7;
$a = calcularSumatoria($numero);
$b = calcularSumatoria($otroNumero);

echo "La sumatoria de {$numero} es {$a}<br />";
echo "La sumatoria de {$otroNumero} es {$b}<br />";

echo '------------------------------<br />'
for($i=1;$i<15;$i=$i+2)
{
    $c = calcularSumatoria($i);
    echo "La sumatoria de {$i} es {$c}<br />";
}


?>