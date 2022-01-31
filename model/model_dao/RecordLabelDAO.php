<?php

require_once "model_pojo/record_label.php";

class RecordLabelDAO extends RecordLabel
{

    private  $table_name = "record_label";
    private  $database = null;
   
    
    public function __construct($DB){

        //Dependency DA SE OBJASNIi
        $this->database = $DB;

    }

   
    public function insertRecordLabel()
    {
        $label_name=parent::getLabelName();
        $label_country=parent::getLabelCountry();
        $columns ="label_name,label_country";
        $columns_value="'$label_name','$label_country'";
        $this->database->insertRow($this->table_name,$columns,$columns_value);
    }

    /**
     * 
     */
    public function deleteRecordLabel()
    {
       $pk_name="label_id";
       $pk_value=parent::getLabelID();
       $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

    /**
     * 
     */
    public function updateRecordLabel()
    {
        $label_name=parent::getLabelName();
        $label_country=parent::getLabelCountry();

        //ovie koloni gi azurirame. t.e vnesuvame vrednosti

        $label_name="label_name='$label_name'";
        $label_country="label_country='$label_country'";

        $pk_name="label_id";
        $pk_value=parent::getLabelID();
    }

    /**
     * 
     */
    public function Operation3()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function selectRecordLabel()
    {
        return $this->database->selectRow($this->table_name); //ovaa linija ja kopirame vo site DAO-si
    }

}
