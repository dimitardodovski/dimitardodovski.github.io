<?php
require_once "../lib/database.php";
require_once "model_dao/MusicalItemDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;

//prajme instanca od DAOto...
$DB = new Database();
$objMusicalItemDAO = new MusicalItemDAO($DB);



//$action="insert";

switch($action) 
{
	case "insert":
		$item_name=$data[0]->item_name;
		$item_genre=$data[0]->item_genre;
		$item_style=$data[0]->item_style;
		$item_format=$data[0]->item_format;
		$item_release_date=$data[0]->item_release_date;

		$objMusicalItemDAO->setItemName($item_name);
		$objMusicalItemDAO->setItemGenre($item_genre);
		$objMusicalItemDAO->setItemStyle($item_style);
		$objMusicalItemDAO->setItemFormat($item_format);
		$objMusicalItemDAO->setItemReleaseDate($item_release_date);
		$objMusicalItemDAO->insertMusicalItem();
	break;

	case "update":
		$objMusicalItemDAO->setItemName('Mark Bell - 00x');
		$objMusicalItemDAO->setItemGenre('Electronic');
		$objMusicalItemDAO->setItemStyle('IDM');
		$objMusicalItemDAO->setItemFormat('CDR');
		$objMusicalItemDAO->setItemReleaseDate('2022-02-05');
		$objMusicalItemDAO->updateMusicalItem();
		//go apdejtirame Mark Bell vo CDR i nova data
	break;

	case "delete":
		//izbrisi musical_item
		$objMusicalItemDAO->setItemID(9);//go brisime Plastikman
		$objMusicalItemDAO->deleteMusicalItem();
	break;

	default:
	echo "ne postoi opcijata";
	break;
}




?>