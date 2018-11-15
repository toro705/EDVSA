<li>
	<img src="<?= $proy->foto->src ?>" alt="<?= $proy->foto->alt ?>" />
	<div class="slide__cont">
		<i class="fa fa-map-marker color-2" aria-hidden="true"></i>
		<p class="paragraph-2 color-2"><b><?= $proy->ubicacion ?></b></p>
		<hr>	
		<h4 class="color-2"><?= $proy->titulo ?></h4>
		<hr>
		<?php if($proy->cliente){ ?>
	    <p class="paragraph-2 color-2">Cliente: <br> <?= $proy->cliente ?></p>		
		<?php } ?>
	</div>
</li>