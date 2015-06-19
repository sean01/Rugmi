<div>

	<h1><?= $My_image->title ?></h1>
	
	<?= Form::open() ?>
		
		<div class="row">
			<?= Form::label('title', 'Title:') ?>
			<?= Form::text('title', $My_image->title) ?>
		</div>

		<div>
 			<img src="<?= $My_image->url ?>" alt="" height="200" >
 		</div>

		<div class="row">
			<?= Form::label('caption', 'Caption:') ?>
			<?= Form::textarea('caption', $My_image->caption) ?>
		</div>


		<?= Form::submit() ?>

	<?= Form::close() ?>
<!-- 
	<? if($My_image->id): ?>
		<a href="delete_subject.php?id=<?= $subject->id ?>">Delete</a>
	<? endif; ?> -->

</div>