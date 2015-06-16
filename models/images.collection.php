<?php

# pages.collection.php

require_once '../libraries/collection.lib.php';

class My_Images_Collection extends Collection {

	protected $table = 'images';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}

}