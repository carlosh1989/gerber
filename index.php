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
        

    $ID = "";
    $allowed_characters = array(1,2,3,4,5,6,7,8,9,0);
    for($i = 1;$i <= 12; $i++){
        $ID .= $allowed_characters[rand(0, count($allowed_characters) - 1)];
    }
    
    ob_start();
    include('pagina2.php');
    return ob_get_clean();
}
add_shortcode("responsive_images","responsive_images");
?>