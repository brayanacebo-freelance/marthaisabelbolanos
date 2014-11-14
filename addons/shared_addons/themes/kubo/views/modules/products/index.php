<div class="titulo-interna">
	<div class="titulo-interna-texto">TIENDA</div>
	<ol class="breadcrumb">
	  <li><a href="index.html">Inicio</a></li>
	  <li class="active"><span class="label label-default">Tienda</span></li>
	</ol>
</div>

<div id="page-content">
	<?php $cont = 0; ?>
	<?php foreach ($products as $product): ?>
	<?php $cont++; ?>
	<div class="animate guide-pane <?php echo ($cont/2 == 1) ? 'guide-pane--right' : null ?>">
		<div <?php echo ($cont/2 != 1) ? 'style="background-color:#f3f0e8;"' : null ?> class="guide-pane__inner animate__item guide-header <?php echo ($cont/2 == 1) ? 'guide-header--admin' : null ?>">
			<header class="guide-header__content">
				<h1 class="t-pageTitle u-white"><?php echo $product->name ?></h1>
				<p class="guide-header__description t-pageSubtitle u-white">
				<img src="http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/10598600_835516546467915_1200269597_a.jpg" alt="">
				<?php echo $product->introduction ?></p>
				<a href="/guide/business" class="large-button">COMPRAR</a>
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
  		<div class="col-md-4">
  			<div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil01.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil02.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil03.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil04.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil05.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil06.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="item">
		  	<a href="tienda-detalle.html"><img src="../img/perfil07.jpg" alt=""></a>
		  	<h2 class="tienda-op-nombre">Nombre del producto</h2>
		  	<div class="tienda-op-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
		  	<a href="tienda-detalle.html" class="large-button">COMPRAR</a>
		  </div>
		</div>
	</div>
</div>