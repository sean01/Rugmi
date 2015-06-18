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
		<? Form::open(); ?>
		
			<div class="form-group">
				<?= Form::label('edit', 'Edit') ?>
				<?= Form::text('edit') ?>
			</div>

			<div class="form-group">
				<?= Form::label('delete', 'Delete') ?>
				<?= Form::text('delete') ?>
			</div>

			<?= Form::submit(); ?>

			<? if(Auth::is_logged_in() && $image->user_id == Auth::user_id()): ?>
				<a href="delete_image.php?id=<?= $content->id ?>">Delete</a>
			<? endif; ?>

		<? Form::close(); ?>
	</div>

	

 </div>