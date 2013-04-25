<?php

function getHeader()
{
    $h = 'Esto es el header';
    return $h;
}

function getMenu($actual='home')
{
    $elementosMenu = array(
        'home' => array(
            'url'   => 'home.html',
            'texto' => 'HOME'
            ),
        'about' => array(
            'url'   => 'about.html',
            'texto' => 'a cerca de'
            ),
        'contacto' array(
            'url'   => 'contacto.html',
            'texto' => 'Contacto'
            ),
        );

    $menu = "<ul>";
    foreach ($elementosMenu as $index => $seccion)
    {
        $current = ($index==$actual)?'current':'';
        $menu .= "<li class='{$current}'><a href='{$seccion['url']}'>{$seccion['texto']</a></li>";
    }
    $menu .= "</ul>";
}

function getFooter()
{
    return 'Esto es FOOTER !!!';
}


?>

<style>
    li{
        background: yellow;
        display: inline-block;
        height: 2em;
        width: 5em;
    }
    li.current{
        background: red;
    }
</style>

<div><?php getHeader(); ?></div>
<div><?php getMenu($_GET['v']); ?></div>
<div><?php getFooter(); ?></div>