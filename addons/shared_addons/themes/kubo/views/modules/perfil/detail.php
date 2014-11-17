<div class="titulo-interna">
	<h1 class="titulo-interna-texto"><?php echo ucwords($perfil->title) ?></h1>
	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url() ?>">Inicio</a></li>
	  <li><a href="<?php echo site_url('perfil') ?>">Perfil</a></li>
	  <li class="active"><span class="label label-default"><?php echo $perfil->title ?></span></li>
	</ol>
</div>


<div class="perfil-vp">
	<iframe width="100%" height="750" src="<?php echo $perfil->video ?>" frameborder="0" allowfullscreen></iframe>
</div>
<small><?php echo fecha_spanish_full($perfil->date) ?>. <?php echo $perfil->country ?></small>
<p><?php echo $perfil->description ?></p>

<div class="container-fluid">
	<div class="container perfil">
		<div class="row">
		  <div class="col-xs-12 col-md-12">
		  	
		  	<div class="row perfil-item">
		  		
		  		<div class="col-xs-12 col-md-12">
		  			<div class="owl-demo">
		  				<?php $images = get_images($perfil->id); ?>
			  			<?php foreach ($images as $image): ?>
			  				<div class="item">
			  						<img src="<?php echo $image->image ?>" alt="<?php echo $perfil->slug ?>">
			  				</div>
						<?php endforeach; ?>
					</div>
		  		</div>
		  	</div>		  	
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