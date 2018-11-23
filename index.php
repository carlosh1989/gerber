<?php
$args = array(
    'link' => '#',
    'url_img' => 'https://res.cloudinary.com/tuconsultaenlinea/image/upload/w_auto,c_scale/v1533602773/iwevpcagpd0kuwno3xnx.jpg', 
    'alt' => 'descripcion de imagen');
?>

<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<? if ($args['link'] == '#'): ?>
    <img data-src="<?php echo $args['url_img'] ?>" class="cld-responsive">
<? else: ?>
    <a href="<?php $args['link'] ?>"><img data-src="<?php echo $args['url_img'] ?>" class="cld-responsive"></a>
<? endif; ?>


 
<script src="bower_components/cloudinary-core/cloudinary-core-shrinkwrap.js" type="text/javascript"></script>
<script type="text/javascript">
    var cl = cloudinary.Cloudinary.new({cloud_name: "gerber"}); 
    // replace 'demo' with your cloud name in the line above 
    cl.responsive();
</script>