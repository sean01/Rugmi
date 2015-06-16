<?php 

#1. Load Libraries
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/my_post.model.php';


#2. Logic
// $db = new Database(Config::$database);

// $db -> set('title', $_POST ['title']);
// $db -> set('content', $_POST ['content']);
// $db -> set('date', date('Y-m-d H:i:s'));

// $db -> insert('posts');








if($_POST){
	$My_image = new My_Image();

	$My_image->url   = $_POST ['url'];
	$My_image->caption = $_POST ['caption'];
	// $My_image->date    = date('Y-m-d H:i:s');
	// $My_image->user_id = Login::user_id();

	$My_image->save();

	URL::redirect('index.php');

}



#3. Include

include '../views/header.php';
include '../views/image_form.php';
include '../views/footer.php';