<?php

require_once "model_pojo/music_shop.php";//pojo

class MusicShopDAO extends MusicShop
{

    private  $table_name = "music_shop";
    private  $database = null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
        // Dependency
        $this->database = $DB;
    }

  
    public function insertMusicShop()
    {
        $music_shop_name=parent::getMusic_shop_name();//pojo is parent of dao

        $music_shop_address=parent::getMusic_shop_address();

        $music_shop_email=parent::getMusic_shop_email();

        $columns="music_shop_name, music_shop_address,music_shop_email";

        $columns_value="'$music_shop_name', '$music_shop_address','$music_shop_email'";

    $this->database->insertRow($this->table_name,$columns,$columns_value);
    //lib/database.php
    }

   
    public function deleteMusicShop()
    {
        $pk_name = "music_shop_id";
        $pk_value = parent::getMusic_shop_id();

        $this->database->deleteRow($this->table_name,$pk_name, $pk_value);
        // so delete funcijata se brishat samo primary key
    }

   
    public function updateMusicShop()
    {
        $music_shop_name = parent::getMusic_shop_name();
        $music_shop_address = parent::getMusic_shop_address();
        $music_shop_email = parent::getMusic_shop_email();

        $columns="music_shop_name='$music_shop_name',
                  music_shop_address='$music_shop_address',
                  music_shop_email='$music_shop_email'";
                  //ovde ima nekoja greska//
        $pk_name="music_shop_id";
        $pk_value=parent::getMusic_shop_id();

        $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
        
    }

   
    public function selectMusicShop()
    {
       return $this->database->selectRow($this->table_name); //ovaa linija ja kopirame vo site DAO-si
    }

}
