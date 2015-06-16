<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Website</title>
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			menubar: false,
			plugins: "textcolor", 
			toolbar: 'fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | forecolor backcolor'
		

		});


	</script>
	
</head>
<body>
	
	<header>
		<div class="container">
			<h1 >
				<a href="index.php" class="colorwhite">
					RUGMI
				</a>
			</h1>

			<? if(Auth::is_logged_in()): ?>
				<a class="colorwhite" href="upload_image.php">Upload Image
				</a>
			<? endif; ?>

			<nav>
				<? if(Auth::is_logged_in()): ?>
					<ul>
						<li><a href="index.php" class="colorwhite"><?= $user->username ?></a></li>
						<li><a href="logout.php" class="colorwhite">Logout</a></li>
					</ul>
				<? else: ?>
					<a href="login.php" class="colorwhite">Login</a>
					<a href="register.php" class="colorwhite">Register</a>
				<? endif; ?>
			</nav>
		</div>
	</header>

	<div class="container wrapper">
