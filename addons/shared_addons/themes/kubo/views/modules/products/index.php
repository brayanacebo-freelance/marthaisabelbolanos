<div class="titulo-interna">
	<div class="titulo-interna-texto">TIENDA</div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url() ?>">Inicio</a></li>
	  <li class="active"><span class="label label-default">Tienda</span></li>
	</ol>
</div>

<div id="page-content">
	<?php $cont = 0; ?>
	<?php foreach ($featured as $product): ?>
	<?php $cont++; ?>
	<div class="animate guide-pane <?php echo ($cont/2 == 1) ? 'guide-pane--right' : null ?>">
		<div <?php echo ($cont/2 != 1) ? 'style="background-color:#f3f0e8;"' : null ?> class="guide-pane__inner animate__item guide-header <?php echo ($cont/2 == 1) ? 'guide-header--admin' : null ?>">
			<header class="guide-header__content">
				<h1 class="t-pageTitle u-white"><?php echo $product->name ?></h1>
				<p class="guide-header__description t-pageSubtitle u-white">
				<img src="<?php echo $product->image ?>" width="306" height="306" alt="<?php echo $product->name ?>">
				<?php echo $product->introduction ?></p>
				<a href="#" class="large-button">COMPRAR</a>
			</header>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
  			<div class="tienda-op-titulo">
	  			OTROS PRODUCTOS
	  		</div>
	  		<div class="perfil-item-fecha">Martha Bolaños</div>
  		</div>

  		<?php foreach ($products as $product): ?>
  		<div class="col-md-4">
  			<div class="item">
  			<img src="<?php echo $product->image ?>" width="306" height="306" alt="<?php echo $product->name ?>">
		  	<h2 class="tienda-op-nombre"><?php echo $product->name ?></h2>
		  	<div class="tienda-op-texto"><?php echo $product->description ?></div>
		  	<a href="#" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<?php endforeach; ?>

	</div>
</div>