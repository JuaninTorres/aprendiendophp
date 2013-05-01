<?php
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
            )
        'videos' => array(
            'url'   => 'videos.html',
            'texto' => 'videos'
            )
        'letras' => array(
            'url'   => 'letras.html',
            'texto' => 'letras'
            )
        'eventos' => array(
            'url'   => 'eventos.html',
            'texto' => 'eventos'
            )
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


?>

<style>
    li{
        background: #EB1D22;
        display: inline-block;
        height: 1.1em;
        width: 1000px;
        max-width: 100%;
        margin: 0 auto;

    }
    li.current{
        background:white;
    }
</style>


<div><?php echo getMenu($_GET['v']); ?></div>