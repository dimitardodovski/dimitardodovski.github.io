<?php
require_once "../lib/database.php";
require_once "model_dao/MsCustomerDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza
$action = $data[0]->action;
echo $data[0]->action;

//instance...
$DB = new Database();
$objMSCustomerDAO = new MsCustomerDAO($DB);

/*$action="insert";*/

switch($action)
{
	case "insert":
		$customer_name=$data[0]->customer_name;
		$customer_address=$data[0]->customer_address;
		$music_shop_id=$data[0]->music_shop_id;
		$objMSCustomerDAO->setCustomer_name($customer_name);//pojo
		$objMSCustomerDAO->setCustomer_address($customer_address);//pojo	
		$objMSCustomerDAO->setMusic_shop_id($music_shop_id);//pojo
		$objMSCustomerDAO->insertMsCustomer();//dao
	break;


	case "delete":
        $objMSCustomerDAO->setCustomer_id(10); // se brisi so reden broj 10
        $objMSCustomerDAO->deleteMsCustomer(); // dao
    break;

	case "update":
        $objMSCustomerDAO->setCustomer_name("John Robertson");
        $objMSCustomerDAO->setCustomer_address("Prilepska 44/5");    
        $objMSCustomerDAO->setCustomer_id(1);
        $objMSCustomerDAO->updateMsCustomer(); //dao
     
}

?>
