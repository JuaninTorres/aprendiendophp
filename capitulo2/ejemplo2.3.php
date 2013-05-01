<?php

function getHeader()
{
    $h = 'Esto es el header';
    return $h;
}

function getMenu($actual='inicio')
{
    $elementosMenu = array(      
        'inicio' => array(
            'url'   => 'inicio.html',
            'texto' => 'inicio'
            ),
        'noticias' => array(
            'url'   => 'noticias.html',
            'texto' => 'noticias'
            ),
        'cancionesnuevas' => array(
            'url'   => 'cancionesnuevas.html',
            'texto' => 'cancionesnuevas'
            ),
        'videos' => array(
            'url'   => 'videos.html',
            'texto' => 'videos'
            ),
        'letras' => array(
            'url'   => 'letras.html',
            'texto' => 'letras'
            ),
        'eventos' => array(
            'url'   => 'eventos.html',
            'texto' => 'eventos'
            ),
        'contacto' => array(
            'url'   => 'contacto.html',
            'texto' => 'Contacto'
            )
        );

    $menu = "<ul>";
    foreach ($elementosMenu as $index => $seccion)
    {
        $current = ($index==$actual)?'current':'';
        $menu .= "<li class='{$current}'><a href='{$seccion['url']}'>{$seccion['texto']}</a></li>";
    }
    $menu .= "</ul>";
    return $menu;
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

<div><?php echo getHeader(); ?></div>
<div><?php echo getMenu($_GET['v']); ?></div>
<div><?php echo getFooter(); ?></div>