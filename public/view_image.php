<?php 

#1 Require
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../models/image.model.php';


#2.

$image = new My_Image();

// $image->id = $_GET['id'];
$image->load($_GET['id']);




#3.

include '../views/header.php';
include '../views/view_image.php';
include '../views/footer.php';
