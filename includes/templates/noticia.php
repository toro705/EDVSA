<a class="modulo-noticia" href="<?= $n->url ?>">
	<div class="modulo-noticia__imagen">
		<img class="img-responsive" src="<?= $n->foto->src('360x240') ?>" alt="">
	</div>
	<div class="modulo-noticia__texto">
		<h4><?= $n->titulo ?></h4>
		<p><?= $n->bajada ?></p>
		<span class="ver-mas"><small><?=$txt['gral'][2]?></small></span>
	</div>
</a>