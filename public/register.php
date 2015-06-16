<?php # register.php

# 1. Load libraries and models


require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';


require_once '../models/user.model.php';

# 2. Logic

if($_POST){

	$user = new User();

	$user->username = $_POST['username'];
	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$user->email    = $_POST['email'];

	$user->save();

	Auth::log_in($user->id);

	URL::redirect('index.php');
}




# 3. Load Views

include '../views/header.php';
include '../views/register_form.php';
include '../views/footer.php';

