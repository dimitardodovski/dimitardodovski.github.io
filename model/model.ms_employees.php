<?php
require_once "../lib/database.php";
require_once "model_dao/MsEmployeesDAO.php";

$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza.
$action = $data[0]->action;
echo $data[0]->action;

//instancE
$DB = new Database();
$objMsEmployeesDAO = new MsEmployeesDAO($DB);


/*$action="insert";*/

switch($action) 
{
	case "insert":
	//vnesi ms_employees
	$employee_name=$data[0]->employee_name;
	$employee_plata=$data[0]->employee_plata;
	$music_shop_id=$data[0]->music_shop_id;
	$objMsEmployeesDAO->setEmployeeName($employee_name);
	$objMsEmployeesDAO->setEmployeePlata($employee_plata);
	$objMsEmployeesDAO->setMusicShopID($music_shop_id);
	$objMsEmployeesDAO->insertMsEmployees();
	echo "<hr>";
	echo "insert ms_employees done";
	break;

	case "update":
	//izmeni ms_employees
	/*$objMsEmployeesDAO->setEmployeeName('Jovan Jovanov');
	$objMsEmployeesDAO->setEmployeePlata(33000);
	$objMsEmployeesDAO->setMusicShopID(1);*/

	$pk_value=$data[0]->pk_value;
        $objMsEmployeesDAO->setEmployeeID($pk_value);
        $objMsEmployeesDAO->updateMsEmployees();	
	break;

	/*case "delete":
	//izbrisi ms_employees
	$objMsEmployeesDAO->setEmployeeID(5);
	$objMsEmployeesDAO->deleteMsEmployees();
	break;*/

	case "delete":
        $pk_value=$data[0]->pk_value;
        $objMsEmployeesDAO->setEmployeeID($pk_value);
        $objMsEmployeesDAO->deleteMsEmployees();
    break;


	default:
	echo "ne postoi opcijata";
	break;
}

?>