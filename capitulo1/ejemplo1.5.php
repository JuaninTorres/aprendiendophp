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


?>