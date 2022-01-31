<?php
require_once "../lib/database.php";
$DB = new Database();
$data = array();

/*$data=json_decode(file_get_contents("php://input"));
var_dump($data); //printaj niza*/


$table_name=$_GET["table_name"];

switch ($table_name) {
	case "artist":
		require_once "model_dao/ArtistDAO.php";
		$objArtistDAO = new ArtistDAO($DB);
		$results = $objArtistDAO->selectArtist();
		foreach ($results as $row) {
			$data[]=array ("artist_id" => $row["artist_id"],
						  "artist_name" =>$row["artist_name"]);
		}
	break;

	case "contract":
	    require_once "model_dao/ContractDAO.php";
		$objContractDAO = new ContractDAO($DB);
		$results = $objContractDAO->selectContract();
		foreach ($results as $row) {
			$data[]=array ("contract_id" => $row["contract_id"],
						  "label_name" => $row["label_name"],
						  "item_name" => $row["item_name"],
						  "artist_name" => $row["artist_name"]);
		}
	break;

	case "ms_customer":
		require_once "model_dao/MsCustomerDAO.php";
		$objMsCustomerDAO = new MsCustomerDAO($DB);
		//$objMsCustomerDAO = new MsCustomerDAO($DB);
		$results = $objMsCustomerDAO->selectMsCustomer();
		foreach ($results as $row) {
			$data[]=array ("customer_id" => $row["customer_id"],
						  "customer_name" => $row["customer_name"],
						  "customer_address" => $row["customer_address"],
						  "music_shop_name" => $row["music_shop_name"],
						  "music_shop_id" => $row["music_shop_id"]);
		}
	break;

	case "ms_employees":
		require_once "model_dao/MsEmployeesDAO.php";
		$objMsEmployeesDAO = new MsEmployeesDAO($DB);
		$results = $objMsEmployeesDAO->selectMsEmployees();
		foreach ($results as $row) {
			$data[]=array ("employee_id" => $row["employee_id"],
						  "employee_name" => $row["employee_name"],
						  "employee_plata" => $row["employee_plata"],
						  "music_shop_name" => $row["music_shop_name"],
						  "music_shop_id" => $row["music_shop_id"]);
		}
	break;

	case "ms_sale":
		require_once "model_dao/MsSaleDAO.php";
		$objMsSaleDAO = new MsSaleDAO($DB);

		$results = $objMsSaleDAO->selectMsSale();
		foreach ($results as $row) {
			$data[]=array ("sale_id" => $row["sale_id"],
						  "customer_id" => $row["customer_id"],
						  "item_id" => $row["item_id"],
						  "sale_date" => $row["sale_date"],
						  "sale_price" => $row["sale_price"],
						  "item_name" => $row["item_name"],
					      "customer_name" => $row["customer_name"]);
		}
	break;

	case "musical_item":
		require_once "model_dao/MusicalItemDAO.php";
		$objMusicalItemDAO = new MusicalItemDAO($DB);

		$results = $objMusicalItemDAO->selectMusicalItem();
		foreach ($results as $row) {
			$data[]=array ("item_id" => $row["item_id"],
						  "item_name" => $row["item_name"],
						  "item_genre" => $row["item_genre"],
						  "item_style" => $row["item_style"],
						  "item_format" => $row["item_format"],
						  "item_release_date" => $row["item_release_date"]);
		}
	break;

	case "record_label":
		require_once "model_dao/RecordLabelDAO.php";
		$objRecordLabelDAO = new RecordLabelDAO($DB);

		$results = $objRecordLabelDAO->selectRecordLabel();
		foreach ($results as $row) {
			$data[]=array ("label_id" => $row["label_id"],
						  "label_name" => $row["label_name"],
						  "label_country" => $row["label_country"]);
						  
		}
	break;

	case "music_shop":
		require_once "model_dao/MusicShopDAO.php";
		$objMusicShopDAO = new MusicShopDAO($DB);

		$results = $objMusicShopDAO->selectMusicShop();
		foreach ($results as $row) {
			$data[]=array ("music_shop_id" => $row["music_shop_id"],
						  "music_shop_name" => $row["music_shop_name"],
						  "music_shop_address" => $row["music_shop_address"],
						  "music_shop_email" => $row["music_shop_email"]);
						  
		}
	break;
}


echo json_encode($data);

?>