<?php

  		//Shorcode wordpress, para recibir los parametros
  		$args = array(
  			'link' => '#',
            'url_img' => 'v1539205369/WEB/Home/centro-de-tecnologia.jpg', 
            'alt' => 'descripcion de imagen');

  		//asignacion de valores
        $link = $args['link'];
        $url_img = $args['url_img'];
        $alt = $args['alt'];
        $base_cloudinary = "https://res.cloudinary.com/webuvg/image/upload/";
        $parametro_webP ="f_auto,q_auto/";
        $parametro_compresion = "q_auto/fl_any_format/";
        $parametro_W = $_POST['anchoDiv'];

        var_dump($_REQUEST) ;


        //detectar navegador version 2
        function get_browser_name($user_agent)
        {
            if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
            elseif (strpos($user_agent, 'Edge')) return 'Edge';
            elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
            elseif (strpos($user_agent, 'Safari')) return 'Safari';
            elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
            elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
           
            return 'Other';
        }
        

        if (get_browser_name($_SERVER['HTTP_USER_AGENT']) == 'Chrome') {
            if ($link == '#') {
                echo $img = "<div class='ancho' style='width:100%'><img src='".$base_cloudinary.$parametro_webP.$url_img."' alt='".$alt."'></div>";
            }else{
                echo $img = "<div class='ancho' style='width:100%'><a href='".$link."'><img src='".$base_cloudinary.$parametro_webP.$url_img."' alt='".$alt."'></a></div>";
            }
        }else{
        	if ($link == '#') {
                echo $img = "<div class='ancho' style='width:300px'><img src='".$base_cloudinary.$parametro_compresion.$url_img."' alt='".$alt."'></div>";
            }else{
                echo $img = "<div class='ancho' style='width:300px'><a href='".$link."'><img src='".$base_cloudinary.$parametro_compresion.$url_img."' alt='".$alt."'></a></div>";
            }
        }


  ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="script.js"></script>
  <?php

?>