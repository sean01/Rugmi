<?php

#1. Require libraries and models

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/user.model.php';

#2. Logic

if($_POST){

	# Attempt to log the user in
	$user = new User();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	$success = $user->authenticate();

	if($success){
		Login::log_in($user->id);

		URL::redirect('index.php');
	}
}


#3. Load views

include '../views/header.php';
include '../views/login_form.php';
include '../views/footer.php';