	
<h1>Gallery</h1>
<div class="images">
	<? foreach($images->items as $image ): ?>
		<div class="image-container">
			<h2><?= $image->title ?></h2>
			<a href="view_image.php?id=<?= $image->id?>"><img src="<?= $image->url ?>" alt="" height="200"></a>
			<p><?= $image->caption ?></p>
	
		</div>
	<? endforeach; ?>
</div>