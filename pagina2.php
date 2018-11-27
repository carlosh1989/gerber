

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script>
// A $( document ).ready() block.
$( document ).ready(function() {
    let ancho = $("#child").closest("div").width();
    let base = 'https://res.cloudinary.com/webuvg/image/upload/'
    let parametros = 'f_auto,q_78,w_'+ancho+'/'
    let imagen = '<?php echo $args['url_img'] ?>'
    let link = '<?php echo $args['link'] ?>'
    let url_imagen = base + parametros + imagen
    $("#imagen").attr("src",url_imagen);
    $("#enlace").attr("href",link);
}); 
</script>
<div id="child" width="100%">
    <a id="enlace" href=""><img id="imagen" src=""/></a> 
</div>  
