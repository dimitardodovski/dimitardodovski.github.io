<?php
require_once "../lib/database.php";
require_once "model_dao/ContractDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;

//instance
$DB = new Database();
$objContractDAO = new ContractDAO($DB);


//$table_name="contract";
/*$action="insert";//[insert,update, delete]*/

switch($action) 
{
	case "insert":
	$label_id=$data[0]->label_id;
	$item_id=$data[0]->item_id;
	$artist_id=$data[0]->artist_id;
	$objContractDAO->setLabelID($label_id);
	$objContractDAO->setItemID($item_id);
	$objContractDAO->setArtistID($artist_id);
	$objContractDAO->insertContract();		
	break;

	case "update":
	$objContractDAO->setLabelID(2);
	$objContractDAO->setItemID(7);
	$objContractDAO->setArtistID(6);
	$objContractDAO->updateContract();		
	break;

	case "delete":
		//izbrisi contract
		$objContractDAO->setContractID(8);
		//go brisime dogovor so broj 8
		$objContractDAO->deleteContract();
	break;

	default:
	echo "ne postoi opcijata";
	break;
}




?>