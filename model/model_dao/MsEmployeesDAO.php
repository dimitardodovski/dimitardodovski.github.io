<?php
require_once "model_pojo/ms_employees.php";
//dao mora da se povrzi so pojo,


class MsEmployeesDAO extends MsEmployees

{

    private  $table_name = "ms_employees";
    private  $database = null;

 
   public function __construct($DB){

        //Dependency
        $this->database = $DB;

    }

   
    public function insertMsEmployees()
    {
       $employee_name=parent::getEmployeeName();
       $employee_plata=parent::getEmployeePlata();
       $music_shop_id=parent::getMusicShopID();

       $columns="employee_name,employee_plata,music_shop_id";
       $columns_value="'$employee_name','$employee_plata','$music_shop_id'";

       echo $columns_value;
       $this->database->insertRow($this->table_name, $columns,$columns_value);//lib/database.php
    }


    public function deleteMsEmployees()
    {
        $pk_name = "employee_id";
        $pk_value = parent::getEmployeeID();

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

 
    public function updateMsEmployees()
    {

        $customer_name = parent::getEmployeeName();
        $customer_address = parent::getEmployeePlata();
        $customer_address = parent::getMusicShopID();

        

        // koloni koi gi azurirame
        $columns="employee_name='$employee_name',
                  employee_plata='$employee_plata',";

        $pk_name="employee_id";
        $pk_value = parent::getEmployeeID();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
        
    }

    public function selectMsEmployees()
    {
        return $this->database->selectRow($this->table_name."

            INNER JOIN music_shop
            ON ms_employees.music_shop_id = music_shop.music_shop_id


        "); //ovaa linija ja kopirame vo site DAO-si
    }

}
