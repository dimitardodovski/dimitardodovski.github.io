<?php
//modelot se povrzva so databazata i daoto

require_once "../lib/database.php";
require_once "model_dao/ArtistDAO.php";

//se pocnuva so inicijalizi ranje na databazata i pravenje nova instanca od DAoto

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;


$DB = new Database();
$objArtistDAO = new ArtistDAO($DB);

 //[insert,update, delete]

switch($action) 
{
	case "insert":
		$artist_name=$data[0]->artist_name;
		$objArtistDAO->setArtistName($artist_name);
		$objArtistDAO->insertArtist();//dao
	break;

	case "update":
		$objArtistDAO->setArtistName('Mokira');
		$objArtistDAO->updateArtist();//dao
	break;

	case "delete":
		//izbrisi artist
		$objArtistDAO->setArtistID(5);//go brisime Twerk
		$objArtistDAO->deleteArtist();
	break;

	default:
	echo "ne postoi opcijata";
	break;
}


?>