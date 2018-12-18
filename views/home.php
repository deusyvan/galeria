<?php foreach ($fotos as $foto) : ?>

	<img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300" border="0"/><br/>
	<?php echo $foto['titulo']; ?>
	<hr/>

<?php endforeach; ?>
