

<div class="titulo-interna">
	<div class="titulo-interna-texto">BLOG DE MARTHA ISABEL</div>
	<ol class="breadcrumb">
		<li><a href="">Inicio</a></li>
		<li class="active"><span class="label label-default">Blog</span></li>
	</ol>
</div>

<div class="container blog">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			{{ if posts }}
			{{ posts }}
			<div class="row blog-item">
				<div class="col-md-12">
					<div class="blog-item-titulo">
						<a href="{{ url }}">{{ title }}</a>
					</div>
				</div>
				{{ if image }}
				<div class="col-xs-12 col-md-4">
					<a href="blog-detalle.html"><img src="{{ url:site }}{{ image }}" alt="" class="img-responsive" /></a>
				</div>
				{{ endif }}
				<div class="col-xs-12 col-md-8">
					<div class="texto">
						<p>{{ preview }}</p>
						<p><a href="{{ url }}" class="home-boton">Leer más</a></p>
					</div>
				</div>
			</div>
			{{ /posts }}
			{{ pagination }}
			<script>
				$(function() {
				  $('.pagination ul').addClass('pagination pull-right');
				});
			</script>
			{{ else }}
				{{ helper:lang line="blog:currently_no_posts" }}
			{{ endif }}
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