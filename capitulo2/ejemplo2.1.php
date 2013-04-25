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
        echo "La sumatoria desde 1 hasta {$n} es: {$sumatoria}";
    }
    else
    {
        echo "<span style='font-size: 24px; color: red;'>ESTUPIDO, TE DIJE UN NUMERO !!!!</span>";
    }
}


?>