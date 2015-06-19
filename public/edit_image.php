<?php # edit_image.php

#1. Load libs and models

require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';

require_once '../models/image.model.php';
require_once '../models/images.collection.php';
require_once '../models/user.model.php';


#2. Logic

Auth::kickout('login.php');

// $page_title = 'Edit Image';

$My_image = new My_Image();

# Load the subject who's id is in the url
$My_image->load($_GET['id']);

# If the form was posted
if($_POST && $_POST['title'] != ''){

	# update the name
	$My_image->title = $_POST['title'];
	$My_image->caption = $_POST['caption'];


	# and send that to the database
	$My_image->save();
}


#3. Load views


include '../views/header.php';
include '../views/edit_image_form.php';
include '../views/footer.php';