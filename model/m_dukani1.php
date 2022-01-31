<?php
require_once "../lib/database.php";

$action="insert";

switch($action){
	case "insert":
		//Instance
		$objDB = new Database();
		$table_name	= "dukani";
		$columns	= "adresa, grad";
		$columns_value = "'Bul. Turisticka 14/3', 'Ohrid'";
		$objDB->insertRow($table_name,$columns,$columns_value);
	
		break;
	case "update":
		echo "update";
	break;
	case "delete":
		echo "delete";
	break;
	case "select":
		echo "select";
	break;
}
?>