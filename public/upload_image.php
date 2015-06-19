<?php 

#1. Load Libraries
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/upload.lib.php';




require_once '../models/image.model.php';


#2. Logic


if($_FILES){

		$files = Upload::to_folder('assets/uploads/');

		//print_r($files);

		if($files[0]['error_message'] == false){

			$My_image = new My_Image();

		$My_image->url   = $files[0]['filepath'];
		$My_image->caption = $_POST ['caption'];
		$My_image->title = $_POST ['title'];
		// $My_image->date    = date('Y-m-d H:i:s');
		$My_image->user_id = Auth::user_id();

		$My_image->save();

			
			URL::redirect('view_image.php?id='.$My_image->id);
 
		}else{

			echo $files[0]['error_message'];
		}
	}




#3. Include

include '../views/header.php';
include '../views/upload_form.php';
include '../views/footer.php';