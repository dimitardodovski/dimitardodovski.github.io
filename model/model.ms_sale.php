<?php
//insert
//delete
//edit

require_once "../lib/database.php";
require_once "model_dao/MsSaleDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;


//instance
$DB = new Database();
$objMsSaleDAO = new MsSaleDAO($DB);


//$table_name="ms_sale";
/*$action="insert";//[insert,update, delete]*/

switch($action) 
{
	case "insert":
		//
		$customer_id=$data[0]->customer_id;
		$item_id=$data[0]->item_id;
		$sale_date=$data[0]->sale_date;
		$sale_price=$data[0]->sale_price;
		$objMsSaleDAO->setCustomerID($customer_id);//pojo
		$objMsSaleDAO->setItemID($item_id);//pojo	
		$objMsSaleDAO->setSaleDate($sale_date);//pojo
		$objMsSaleDAO->setSalePrice($sale_price);//pojo
		$objMsSaleDAO->insertMsSale();//dao
	break;

	case "update":
		$objMsSaleDAO->setCustomerID(6);//pojo
		$objMsSaleDAO->setItemID(10);//pojo	
		$objMsSaleDAO->setSaleDate('2021-12-12');//pojo
		$objMsSaleDAO->setSalePrice(124);//pojo
		$objMsSaleDAO->updateMsSale();//dao
	break;

	case "delete":
	$objMsSaleDAO->setSaleID(8);
	$objMsSaleDAO->deleteMsSale();
	break;

	default:
	echo "ne postoi opcijata";
	break;
}




?>