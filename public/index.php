<?php 

#1.
require_once '../libraries/auth.lib.php';
require_once '../libraries/xss.lib.php';

require_once '../models/user.model.php';
require_once '../models/image.model.php';

require_once '../models/images.collection.php';


#2.

$user = new User();
$user->load($_SESSION['user']['id']);

$images = new My_Images_Collection([
	'deleted' => '0'
	]);




#3.
include "../views/header.php";
include "../views/image_list.php";
include "../views/footer.php";
