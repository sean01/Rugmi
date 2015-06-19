 <div>
 	<h1><?= $image->title ?></h1>

 	<div>
 		<img src="<?= $image->url ?>" alt="">
 	</div>

 	<div>
 		<p>
 			<?= $image->caption ?>
 		</p>
 	</div>
	
	<div>
	

			<? if(Auth::is_logged_in() && $image->user_id == Auth::user_id()): ?>
				<a href="delete_image.php?id=<?= $image->id ?>" ></i>Delete</a>
				<a href="edit_image.php?id=<?= $image->id ?>">Edit</a>

			<? endif; ?>



	
	</div>
	

	

 </div>