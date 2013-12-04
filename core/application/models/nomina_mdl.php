<?php
include_once ('db_table.php');

class nomina_mdl extends DB_Table {
	function __construct() {
		parent::__construct();
		$this->strTable = "nomina";
		$this->strPk = "id";
    }

}

