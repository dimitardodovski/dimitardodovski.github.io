<?php
require_once "model_pojo/ms_sale.php";//pojo



class MsSaleDAO extends MsSale
    //CHILD     extends PARENT
{

    private  $table_name = "ms_sale";
    private  $database = null;

  
    public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }



  
    public function insertMsSale()
    {
       $customer_id=parent::getCustomerID();
       $item_id=parent::getItemID();
       $sale_date=parent::getSaleDate();
       $sale_price=parent::getSalePrice();

       /*$columnName="customer_id,item_id,sale_date,sale_price";
       $columnValue="$customer_id,$item_id,'$sale_date',$sale_price";
       //OVDE PRIJAVUVA GRESKA 
       
       $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php*/
        
    }

    public function deleteMsSale()
    {
        $pk_name = "sale_id";
        $pk_value = parent::getSaleID();
        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

 
    public function updateMsSale()
    {
          // getters doagjaat od pojo
        $customer_id = parent::getCustomerID();
        $item_id = parent::getItemID();
        $sale_date=parent::getSaleDate();
        $sale_price=parent::getSalePrice();

   

        // koloni koi gi azurirame
        $columns="customer_id='$customer_id',
                  item_id='$item_id',sale_date='$sale_date',
                        sale_price='$sale_date'";

        $pk_name="sale_id";
        $pk_value = parent::getSaleID();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);


    }


    public function selectMsSale()
    {
        return $this->database->selectRow($this->table_name."
            INNER JOIN ms_customer
            ON ms_customer.customer_id = ms_sale.customer_id


            INNER JOIN musical_item
            ON musical_item.item_id = ms_sale.item_id


        "); //ovaa linija ja kopirame vosite DAO-si
    }

}

?>
