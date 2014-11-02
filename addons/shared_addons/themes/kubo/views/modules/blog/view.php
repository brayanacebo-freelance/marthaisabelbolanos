<div class="titulo-interna">
	<div class="titulo-interna-texto">BLOG DE MARTHA ISABEL</div>
	<ol class="breadcrumb">
	  <li><a href="index.html">Inicio</a></li>
	  <li class="active"><span class="label label-default"><a href="{{ url:site }}blog" style="color: white">Blog</a></span></li>
	</ol>
</div>

<div class="container blog">
	<div class="row">
	  <div class="col-xs-12 col-md-8">
	  	
	  	{{ post }}
	  	<div class="row blog-item">
	  		<div class="col-md-12">
	  			<div class="blog-item-titulo">
		  			<a href="blog-detalle.html">{{ title }}</a>
		  		</div>
	  		</div>
	  		{{ if image }}
	  		<div class="col-xs-12 col-md-12">
				<a><img src="{{ image }}" alt="{{ title }}" class="img-responsive" /></a>
	  		</div>
	  		{{ endif }}
	  		<div class="col-xs-12 col-md-12">
	  			<div class="texto">
	  				{{ body }}
	  			</div>
	  		</div>
	  	</div>
	  	{{ /post }}

	<?php if (is_logged_in()): ?>
	<?php echo $this->comments->form() ?>
	<?php endif; ?>

	<?php echo $this->comments->display() ?>
	  	
	  </div>
	  <div class="col-xs-12 col-md-4">
			<div class="blog-cat"><span class="glyphicon glyphicon-comment"></span> Post recientes</div>
			<ul class="blog-cat-lista">
				{{ blog:posts limit="5" }}
				<li><a href="{{ url }}">{{ title }}</a></li>
				{{ /blog:posts }}
			</ul>
			<div class="blog-cat"><span class="glyphicon glyphicon-th-list"></span> Categorias</div>
			<ul class="blog-cat-lista">
				{{ blog:categories }}
				<li><a href="{{ url:site }}blog/category/{{ slug }}">{{ title }}</a></li>
				{{ /blog:categories }}
			</ul>
			<div class="blog-cat"><span class="glyphicon glyphicon-tag"></span> Tags</div>
			<ul class="blog-cat-lista">
				{{ blog:tags }}
				<li><a href="{{ url }}">{{ title }}</a></li>
				{{ /blog:tags }}
			</ul>
		</div>
	</div>
</div>