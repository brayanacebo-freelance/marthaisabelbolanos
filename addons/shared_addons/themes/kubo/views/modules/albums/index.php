<div class="titulo-interna">
	<div class="titulo-interna-texto">MIS FOTOGRAFÍAS</div>
	<ol class="breadcrumb">
	  <li><a href="index.html">Inicio</a></li>
	  <li class="active"><span class="label label-default">Fotografías</span></li>
	</ol>
</div>

<div class="container-fluid">
	<div class="container perfil">
		<div class="row">
		  <div class="col-xs-12 col-md-12">
		  	<?php foreach ($albums as $item): ?>
		  	<div class="row perfil-item">
		  		<div class="col-md-12">
		  			<div class="perfil-item-titulo">
			  			<?php echo $item->name ?>
			  		</div>
			  		<div class="perfil-item-fecha"><?php echo fecha_spanish_full($item->updated_at) ?></div>
		  		</div>
		  		<div class="col-xs-12 col-md-12">
		  			<div class="owl-demo">
		  				<?php $pistures = get_pictures($item->id); ?>
		  			<?php foreach ($pistures as $picture): ?>
					  	<img src="<?php echo $picture->path ?>" alt="<?php echo $item->slug ?>">
					<?php endforeach; ?>
					</div>
		  		</div>
		  	</div>
		  <?php endforeach; ?>
		  	
		  </div>
		</div>
	</div>
</div>

{{ theme:css file="owl.carousel.css" }}
{{ theme:css file="owl.theme.css" }}
{{ theme:js file="bootstrap.min.js" }}
{{ theme:js file="owl.carousel.js" }}
<script>
$(document).ready(function() {
  $(".owl-demo").owlCarousel({
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      navigation : true,
      navigationText : ["Anterior", "Siguiente"]
  });
});
</script>