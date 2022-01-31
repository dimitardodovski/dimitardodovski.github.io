<?php

require_once "model_pojo/musical_item.php";
//dao trga od pojoto geteri a model fajlot trga seteri od daoto

class MusicalItemDAO extends MusicalItem
//    CHILD          extends/nasleduva PARENT
{

    private  $table_name = "musical_item";
    private  $database = null;

 
    public function __construct($DB)
    {
        // Da se objasni dependency so konstruktorot
        $this->database = $DB;
    }

    
    public function insertMusicalItem()
    {
        $item_name=parent::getItemName();
        $item_genre=parent::getItemGenre();
        $item_style=parent::getItemStyle();
        $item_format=parent::getItemFormat();
        $item_release_date=parent::getItemReleaseDate();
        $columns = "item_name,item_genre,item_style,item_format, item_release_date";
        $columns_value = "'$item_name','$item_genre','$item_style','$item_format', '$item_release_date'";
        $this->database->insertRow($this->table_name,$columns,$columns_value);
    }

    /**
     * 
     */
    public function deleteMusicalItem()
    {
        $pk_name = "item_id";
        $pk_value = parent::getItemID();
        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
        
    }


    public function updateMusicalItem()
    {
       $item_name=parent::getItemName();
       $item_genre=parent::getItemGenre();
       $item_style=parent::getItemStyle();
       $item_format=parent::getItemFormat();
       $item_release_date=parent::getItemReleaseDate();
       $columns = "item_name,item_genre,item_style,item_format, item_release_date";
        $columns_value = "'$item_name','$item_genre','$item_style','$item_format', '$item_release_date'";
       $this->database->updateRow($this->table_name,$columns,$columns_value);

    }

    /**
     * 
     */
    public function selectMusicalItem()
    {
        return $this->database->selectRow($this->table_name); //ovaa linija ja kopirame vo site DAO-si
    }

}
