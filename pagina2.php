<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){

    let ancho = $("#child<?php echo $ID ?>").closest("div").width();
    let base = 'https://res.cloudinary.com/webuvg/image/upload/'
    let parametros = 'f_auto,q_78,w_'+ancho+'/'
    let imagen = '<?php echo $args['url_img'] ?>'
    let link = '<?php echo $args['link'] ?>'
    let url_imagen = base + parametros + imagen;
    $("#imagen<?php echo $ID ?>").attr("src",url_imagen);
    $("#enlace<?php echo $ID ?>").attr("href",link);

    if (link == "#") {
        $('#child<?php echo $ID ?>').hide();
        $('#child2<?php echo $ID ?>').show();
        $("#imagen2<?php echo $ID ?>").attr("src",url_imagen);
    } 
    else 
    {
        $('#child2<?php echo $ID ?>').hide();
        $('#child<?php echo $ID ?>').show();
        $("#imagen<?php echo $ID ?>").attr("src",url_imagen);
        $("#enlace<?php echo $ID ?>").attr("href",link);
    }
}); 
</script>
<div id="child<?php echo $ID ?>" width="100%">
    <a id="enlace<?php echo $ID ?>" href=""><img id="imagen<?php echo $ID ?>" src=""/></a> 
</div>

<div id="child2<?php echo $ID ?>" width="100%">
    <img id="imagen2<?php echo $ID ?>" src=""/> 
</div>