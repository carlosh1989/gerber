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
            'url_img' => 'v1539205369/WEB/Home/centro-de-tecnologia.jpg', 
            'alt' => 'descripcion de imagen'), $atts);

        //asignacion de valores
        $link = $args['link'];
        $url_img = $args['url_img'];
        $alt = $args['alt'];
        $base_cloudinary = "https://res.cloudinary.com/webuvg/image/upload/";
        $parametro_webP ="f_auto,q_auto/";
        $parametro_compresion = "q_auto/fl_any_format/";

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        if(strpos($user_agent, 'Chrome') !== FALSE){
            $navegador = 'Chrome';
        }
             

        if ($navegador == 'Chrome') {
            if ($link == '#') {
                $img = "<div style='width:100%'><img src='".$base_cloudinary.$parametro_webP.$url_img."' alt='".$alt."'></div>";
            }else{
                $img = "<div style='width:100%'><a href='".$link."'><img src='".$base_cloudinary.$parametro_webP.$url_img."' alt='".$alt."'></a></div>";
            }
        }else{
            if ($link == '#') {
                $img = "<div style='width:100%'><img src='".$base_cloudinary.$parametro_compresion.$url_img."' alt='".$alt."'></div>";
            }else{
                $img = "<div style='width:100%'><a href='".$link."'><img src='".$base_cloudinary.$parametro_compresion.$url_img."' alt='".$alt."'></a></div>";
            }
        }

        return $img;
    }

     add_shortcode("responsive_images","responsive_images");

 ?>