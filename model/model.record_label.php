<?php
//insert
//delete
//edit
require_once "../lib/database.php";
require_once "model_dao/RecordLabelDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;

//instance


$DB = new Database();
$objRecordLabelDAO = new RecordLabelDAO($DB);



//$action="insert";//[insert,update, delete]

switch($action) 
{
	case "insert":
		$label_name=$data[0]->label_name;
		$label_country=$data[0]->label_country;
		$objRecordLabelDAO->setLabelName($label_name);
		$objRecordLabelDAO->setLabelCountry($label_country);
		$objRecordLabelDAO->insertRecordLabel();
		echo "uspesno e vnesen record_label";
	break;

	case "update":

		$objRecordLabelDAO->setLabelName('WARP');
		$objRecordLabelDAO->setLabelCountry('D'); //go apdejtirame warp deka e od germanija
		$objRecordLabelDAO->updateRecordLabel();
	
		echo "uspesno izmenet record_label";
	break;

	case "delete":
		$objRecordLabelDAO->setLabelID(8);//go brishime SHM records
		$objRecordLabelDAO->deleteRecordLabel();
		echo "izbrisan record_label";
	break;

	default:
	echo "ne postoi opcijata";
	break;
}




?>