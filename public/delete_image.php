<?php

#1. Libraries

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/image.model.php';

#2. Logic

Auth::kickout('login.php');

$My_image = new My_Image();

$My_image->load($_GET['id']);

$My_image->delete();


#3. Redirect

URL::redirect('index.php');