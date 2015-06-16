<?php

# page.model.php

# load the Model library if it hasn't already been done
require_once '../libraries/model.lib.php';

class My_Image extends Model {

	# Tell the ppost model what table it belongs to
	protected $table = 'images';

	# We need to do this for the model to work
	public function __construct(){
		parent::__construct();
	}

}