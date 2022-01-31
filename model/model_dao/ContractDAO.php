<?php

require_once "model_pojo/contract.php";
//mora da go povrzime so pojoto


class ContractDAO extends Contract
// daoto e dete na pojoto koe e roditel
{

    private  $table_name = "contract";
    private $database = null;
 
    public function __construct($DB)
    {
        //dependency
        $this->database = $DB;
    }

   
    public function insertContract()
    {
        $label_id=parent::getLabelID();
        $item_id=parent::getItemID();
        $artist_id=parent::getArtistID();

        $columnName="label_id,item_id,artist_id";
        $columnValue="'$label_id','$item_id','$artist_id'";

    $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    public function deleteContract()
    {
      $pk_name = "contract_id";
      $pk_value = parent::getContractID();
        $this->database->deleteRow($this->table_name,$pk_name,$pk_value); 
    }

  
    public function updateContract()
    {

        // getters doagjaat od pojo
        $label_id = parent::getLabelID();
        $item_id = parent::getItemID();
        $artist_id = parent::getArtistID();

       

        // koloni koi gi azurirame
        $columns="label_id='$label_id',
                  item_id='$item_id',
                  item_id='$item_id',
                  artist_id='$artist_id'";

        $pk_name="contract_id";
        $pk_value = parent::getContractID();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);


        
    }

    /**
     * 
     */
    public function selectContract()
    {
        return $this->database->selectRow($this->table_name."

            INNER JOIN record_label
            ON record_label.label_id = contract.label_id

            INNER JOIN musical_item
            ON musical_item.item_id = contract.item_id

            INNER JOIN artist
            ON artist.artist_id = contract.artist_id




        "); //ovaa linija ja kopirame vo site DAOsi
    }

}
