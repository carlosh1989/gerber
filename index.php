<!-- Importacion de config.php -->
<?php require_once('config.php') ?>

<!-- Tag obligatoria para el funcionamiento de la libreria -->
<!-- Por lo general el meta viene en ecala 1.0 pero para en este caso debe ir "device-with" -->
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Condicional para verificar si la imagen lleva una enlamce o no -->
<? if ('#'): ?>
    <img data-src="<?php echo $picture ?>" class="cld-responsive" alt="<?php $alt ?>">
<? else: ?>
    <a href="<?php $link ?>"><img data-src="<?php echo $picture ?>" class="cld-responsive" alt="<?php $alt ?>"></a>
<? endif; ?>

<!-- Paquete de CLoudinary, se debe posicionar en la carpeta raiz e instalar con el comando: "bower install cloudinary-core" -->
<script src="bower_components/cloudinary-core/cloudinary-core-shrinkwrap.js" type="text/javascript"></script>
<script type="text/javascript">
    var cl = cloudinary.Cloudinary.new({cloud_name: "demo"}); 
    // Reemplazar el nombre "demo" en cloud_name por el de su preferencia
    cl.responsive();
</script>