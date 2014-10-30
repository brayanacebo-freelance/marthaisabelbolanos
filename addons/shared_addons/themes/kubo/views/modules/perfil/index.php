<div class="titulo-interna">
	<div class="titulo-interna-texto">MI PERFIL</div>
	<ol class="breadcrumb">
	  <li><a href="index.html">Inicio</a></li>
	  <li class="active"><span class="label label-default">Mi perfil</span></li>
	</ol>
</div>

<div class="perfil-vp">
	<iframe width="100%" height="750" src="<?php echo $perfil->video ?>" frameborder="0" allowfullscreen></iframe>
</div>

<?php foreach ($chapters as $item): ?>
<div class="container-fluid">
	<div class="container perfil">
		<div class="row">
		  <div class="col-xs-12 col-md-12">
		  	
		  	<div class="row perfil-item">
		  		<div class="col-md-12">
		  			<div class="perfil-item-titulo">
			  			<?php echo $item->title ?>
			  		</div>
			  		<div class="perfil-item-fecha"><?php echo fecha_spanish_full($item->date) ?>. <?php echo $item->country ?></div>
		  		</div>
		  		<div class="col-xs-12 col-md-4">
					<iframe width="320" height="280" src="<?php echo $item->video ?>" frameborder="0" allowfullscreen></iframe>
		  		</div>
		  		<div class="col-xs-12 col-md-8">
		  			<div class="texto">
		  				<?php echo $item->description ?>
		  			</div>
		  			<div class="owl-demo">
	          		<?php $images = get_images($item->id); ?>
	          		<?php foreach ($images as $image): ?>
					  <div class="item"><img src="<?php echo $image->image ?>" alt="<?php echo $item->slug ?>"></div>
					<?php endforeach; ?>					 
					</div>
		  		</div>
		  	</div>
		  	
		  </div>
		</div>
	</div>
</div>
<?php endforeach; ?>

{{ theme:css file="owl.carousel.css" }}
{{ theme:css file="owl.theme.css" }}
{{ theme:js file="bootstrap.min.js" }}
{{ theme:js file="owl.carousel.js" }}
<script type="text/javascript">
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