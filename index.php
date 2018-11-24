<?php
    /*
    Plugin Name: Responsive images Cloudinary
    Plugin URI: http://www.imaginaguate.com
    Description: responsive image whith cloudinary 
    Author: Gerber Barillas 
    Version: 1,0
    Author URI: http://www.imaginaguate.com
    */

    function responsive_images($atts){
        //argumentos
        $args = shortcode_atts(array(
            'link' => '#',
            'url_img' => 'v1533602773/iwevpcagpd0kuwno3xnx.jpg', 
            'alt' => 'descripcion de imagen'),$atts);

            

        //asignacion de valores
        $link = $args['link'];
        $url_img = $args['url_img'];
        $alt = $args['alt'];
        $base_cloudinary = "https://res.cloudinary.com/webuvg/image/upload/";
        $parametro_webP ="f_auto,q_auto/";
        $parametro_compresion = "q_auto/fl_any_format/";


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


        if ($link == '#') {
            $img = "<meta name='viewport' content='width=device-width'><meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <a href='".$link."'><img src='".$picture."' alt='".$alt."'></a><script src='bower_components/cloudinary-core/cloudinary-core-shrinkwrap.js' type='text/javascript'></script><script type='text/javascript'>var cl = cloudinary.Cloudinary.new({cloud_name: 'demo'});cl.responsive();</script>";
        }
        else
        {
            $img = "<meta name='viewport' content='width=device-width'><meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <a href='".$link."'><img src='".$picture."' alt='".$alt."'></a><script src='bower_components/cloudinary-core/cloudinary-core-shrinkwrap.js' type='text/javascript'></script><script type='text/javascript'>var cl = cloudinary.Cloudinary.new({cloud_name: 'demo'});cl.responsive();</script>";
        }

        return $img;
}

add_shortcode("responsive_images","responsive_images");

?>