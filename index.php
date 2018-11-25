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
        $alt = $args['alt'];


        // Cambiar tu "tucnsultaenlinea" por nombre de cuenta cloudinary a usar
        $uri_base_account = "https://res.cloudinary.com/tuconsultaenlinea/image/upload";
        
        // Parametros obligatorios para el funcionamiento de la auto resizing de las imagenes
        $uri_parameters_extra_small = "f_auto,q_auto,w_544";  #Portrait phones (<544px)
        $uri_parameters_small       = "f_auto,q_auto,w_768";  #Landscape phones (≥544px - <768px)
        $uri_parameters_medium      = "f_auto,q_auto,w_992";  #Tablets (≥768px - <992px)
        $uri_parameters_large       = "f_auto,q_auto,w_1200"; #Desktops (≥992px - <1200px)
        $uri_parameters_extra_large = "f_auto,q_auto,w_1900"; #Desktops (≥1200px)

        // nombre de la imagen en cloudinary 
        $uri_picture = $args['url_img'];

        # URL DE IMAGEN HECHA.
        $picture_extra_small = $uri_base_account.'/'.$uri_parameters_extra_small.'/'.$uri_picture;
        $picture_small = $uri_base_account.'/'.$uri_parameters_small.'/'.$uri_picture;
        $picture_medium = $uri_base_account.'/'.$uri_parameters_medium.'/'.$uri_picture;
        $picture_large = $uri_base_account.'/'.$uri_parameters_large.'/'.$uri_picture;
        $picture_extra_large = $uri_base_account.'/'.$uri_parameters_extra_large.'/'.$uri_picture;    

        #PARAMETROS DE TAG html

        // Variable para saber si una imagen trae link
        $link = $args['link'];

        // Variable de descripcion de foto
        $alt = $args['alt'];


        if ($link == '#') {
            #$img = "<img src='".$picture."' alt='".$alt."'>";
            $img = "<div style='width:100%'><img srcset='".$picture_extra_small." 544w, ".$picture_small." 768w, ".$picture_medium." 992w, ".$picture_large." 1200w, ".$picture_extra_large." 1900w sizes='(max-width: 30em) 30em, 992vw src='".$picture_medium."' alt='it's responsive'/></div>";
        }
        else
        {
            $img = "<div style='width:100%'><a href='".$link."'><img srcset='".$picture_extra_small." 544w, ".$picture_small." 768w, ".$picture_medium." 992w, ".$picture_large." 1200w, ".$picture_extra_large." 1900w sizes='(max-width: 30em) 30em, 992vw src='".$picture_medium."' alt='it's responsive'/></a></div>";
            #$img = "<a href='".$link."'><img data-src='".$picture."' alt='".$alt."'></a>";
        }

        return $img;
}

add_shortcode("responsive_images","responsive_images");

?>