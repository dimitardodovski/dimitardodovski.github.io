<?php
//insert
//delete
//edit

require_once "../lib/database.php";
require_once "model_dao/MusicShopDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;

//instance

$DB = new Database();
$objMusicShopDAO = new MusicShopDAO($DB);


//$table_name="music_shop";
//$action="insert";//[insert,update, delete]

switch($action) 
{
	case "insert":
	//vnesi music_shop
	$music_shop_name=$data[0]->music_shop_name;
	$music_shop_address=$data[0]->music_shop_address;
	$music_shop_email=$data[0]->music_shop_email;

	$objMusicShopDAO->setMusic_shop_name($music_shop_name);
	$objMusicShopDAO->setMusic_shop_address($music_shop_address);
	$objMusicShopDAO->setMusic_shop_email($music_shop_email);
	$objMusicShopDAO->insertMusicShop();
	break;

	case "delete":
	//detele music_shop
	$objMusicShopDAO->setMusic_shop_id(2);
	$objMusicShopDAO->deleteMusicShop();

	break;

	case "update":
	//izmeni music_shop
	$objMusicShopDAO->setMusic_shop_id(2);
	$objMusicShopDAO->setMusic_shop_name('Horizont');
	$objMusicShopDAO->setMusic_shop_address('Jovan Petrovski 22');
	$objMusicShopDAO->setMusic_shop_email('horizont3@gmail.com');
	$objMusicShopDAO->updateMusicShop();


	
	break;

	default:
	echo "ne postoi opcijata";
	break;
}



/*if($action=="insert") 
{
	//zapisi nov dukjan
} elseif ($action=="update")

//update
}

else {

}*/


?>