<?php
$args = array(
    'link' => '#',
    'url_img' => 'v1533602773/iwevpcagpd0kuwno3xnx.jpg', 
    'alt' => 'descripcion de imagen');

    # PARAMETROS DE URL CLOUDINARY

    // Cambiar tu "tucnsultaenlinea" por nombre de cuenta cloudinary a usar
    $uri_base_account = "https://res.cloudinary.com/tuconsultaenlinea/image/upload";
    
    // Parametros obligatorios para el funcionamiento de la auto resizing de las imagenes
    $uri_parameters = "w_auto,c_scale";

    // nombre de la imagen en cloudinary 
    $uri_picture = $args['url_img'];

    # URL DE IMAGEN HECHA.
    $picture = $uri_base_account.'/'.$uri_parameters.'/'.$uri_picture;

    #PARAMETROS DE TAG html

    // Variable para saber si una imagen trae link
    $link = $args['link'];

    // Variable de descripcion de foto
    $alt = $args['alt'];
?>