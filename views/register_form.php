<div>
	<h1>Register</h1>

	<?= Form::open() ?>

		<div class="row">
			<?= Form::label('username', 'Username') ?>
			<?= Form::text('username') ?>
		</div>

		<div class="row">
			<?= Form::label('email', 'Email') ?>
			<?= Form::email('email') ?>
		</div>

		<div class="row">
			<?= Form::label('password', 'Password') ?>
			<?= Form::password('password') ?>
		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>
</div>