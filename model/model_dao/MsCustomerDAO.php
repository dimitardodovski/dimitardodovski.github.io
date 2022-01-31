<?php
require_once "model_pojo/ms_customer.php";//pojo

class MsCustomerDAO extends MsCustomer
//    CHILD         extends PARENT
{


    private $table_name="ms_customer";
    private $database = null;

    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }

    public function insertMsCustomer(){

        $customer_name=parent::getCustomer_name();//pojo
        $customer_address=parent::getCustomer_address();//pojo
        $music_shop_id=parent::getMusic_shop_id();//pojo
        $columns="customer_name,customer_address,music_shop_id";
        $columns_value="'$customer_name','$customer_address',$music_shop_id";

        $this->database->insertRow($this->table_name,$columns,$columns_value);//lib/database.php
    }


    public function deleteMsCustomer(){
        $pk_name = "customer_id";
        $pk_value = parent::getCustomer_id();
        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }


    public function updateMsCustomer(){
        // getters doagjaat od pojo
        $customer_name = parent::getCustomer_name();
        $customer_address = parent::getCustomer_address();

       

        // koloni koi gi azurirame
        $columns="customer_name='$customer_name' ,
                  customer_address='$customer_address'
                          
        ";

        $pk_name="customer_id";
        $pk_value = parent::getCustomer_id();

        

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);

    }    



    public function selectMsCustomer()
    {
        return $this->database->selectRow($this->table_name."
            INNER JOIN music_shop
            ON ms_customer.music_shop_id = music_shop.music_shop_id


        "); // ovaa linija ja kopirame vo s ite DAO-si

    }

}

?>