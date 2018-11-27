

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script>
// A $( document ).ready() block.
$( document ).ready(function() {
    let ancho = $("#child<?php echo $ID ?>").closest("div").width();
    let base = 'https://res.cloudinary.com/webuvg/image/upload/'
    let parametros = 'f_auto,q_78,w_'+ancho+'/'
    let imagen = '<?php echo $args['url_img'] ?>'
    let link = '<?php echo $args['link'] ?>'
    let url_imagen = base + parametros + imagen
    $("#imagen<?php echo $ID ?>").attr("src",url_imagen);
    $("#enlace<?php echo $ID ?>").attr("href",link);
}); 
</script>
<div id="child<?php echo $ID ?>" width="100%">
    <a id="enlace<?php echo $ID ?>" href=""><img id="imagen<?php echo $ID ?>" src=""/></a> 
</div>  
