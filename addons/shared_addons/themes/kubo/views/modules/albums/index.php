<div class="titulo-interna">
	<div class="titulo-interna-texto">MIS FOTOGRAFÍAS</div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url() ?>">Inicio</a></li>
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
		  			<h2 class="perfil-item-titulo">
			  			<?php echo $item->name ?>
			  		</h2>
			  		<div class="perfil-item-fecha"><?php echo fecha_spanish_full($item->updated_at) ?></div>
		  		</div>
		  		<div class="col-xs-12 col-md-12">
		  			<div class="owl-demo">
		  				<?php $pistures = get_pictures($item->id); ?>
			  			<?php foreach ($pistures as $picture): ?>
			  				<div class="item">
			  					<a href="<?php echo $picture->path ?>" data-lightbox="<?php $item->id ?>" data-title="<?php echo $item->slug ?>">
			  						<img src="<?php echo $picture->path ?>" alt="<?php echo $item->slug ?>">
			  					</a>
			  				</div>
						<?php endforeach; ?>
					</div>
					<p><a href="<?php echo site_url('fotografias/detalle/'.$item->slug) ?>" class="home-boton">Leer más</a></p>
		  		</div>
		  	</div>
		  <?php endforeach; ?>
		  	
		  </div>
		</div>
	</div>
</div>

{{ theme:css file="owl.carousel.css" }}
{{ theme:css file="owl.theme.css" }}
{{ theme:css file="lightbox.css" }}
{{ theme:js file="bootstrap.min.js" }}
{{ theme:js file="owl.carousel.js" }}
{{ theme:js file="lightbox.js" }}
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