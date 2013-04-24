<pre>
<?php
// Asi es como se usan las variables

$var1 = 'Un texto cualquiera';
$var2 = 12345;
$var3 = 6789;
$var4 = array(1,2,3,4,5);


$var5 = array('a','b','c','d','e');


$var6 = array(
    'nombre'   => 'Juan',
    'apellido' => 'Torres',
    'edad'     => 34
    );


// Esta es de tipo boolean
$var7 = true;

// Simplemente las mostramos por pantalla
echo $var1;
echo '<br />';
echo $var2;
echo '<br />';

// Concatenamos variables al momento de mostrarlas
echo $var1.' aqui va otro texto '.$var2;
echo '<br />';

// Otra forma de hacer la concatenacion de arriba, aqui obtenemos el mismo resultado
echo "{$var1} aqui va otro texto {$var2}";
echo '<br />';

// Haciendo operaciones matemáticas
echo ($var2 + $var3);
echo '<br />';

// Mostramos el contenido de un array con print_r
print_r($var4);
echo '<br />';
print_r($var5);
echo '<br />';

// Mostramos el contenido de un array con var_dump
var_dump($var6);
?>
</pre>