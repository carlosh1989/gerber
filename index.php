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
        'url_img' => 'v1539629698/WEB/Impacto/Egresados/Tatiana%20Mancilla/Mancilla1.jpg', 
        'alt' => 'descripcion de imagen
        '),$atts);

    ob_start();
    include('pagina2.php');
    return ob_get_clean();
}
add_shortcode("responsive_images","responsive_images");
?>