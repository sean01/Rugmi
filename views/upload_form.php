<div>
	<h1>Upload Image</h1>

	<?= Form::open_upload() ?>
	
		<div class="form-group">
			<?= Form::label('file', 'File:') ?>
			<?= Form::file() ?>
		</div>

		<div class="form-group">
			<?= Form::label('title', 'Title:') ?>
			<?= Form::text('title') ?>
		</div>

		<div class="form-group">
			<?= Form::label('caption', 'Caption:') ?>
			<?= Form::textarea('caption') ?>
		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>
</div>