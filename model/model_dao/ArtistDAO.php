<?php
require_once "model_pojo/artist.php";
//daoto mora da go povika pojoto bidejki tamu se geterite i seterite. a daoto e kolekcija na operacii. modelot gi zema operaciitke.



class ArtistDAO extends Artist

{

    private  $table_name = "artist"; //vo daoto -prajme varijabla so imeto na tabelata i varijabla za databazata.
    private  $database = null;

   

   public function __construct($DB){

        //Dependency DA SE OBJASNI--
        $this->database = $DB;

    }



    public function insertArtist()
    {
        $artist_name=parent::getArtistName();
        $columns = "artist_name";
        $columns_value = "'$artist_name'";
        $this->database->insertRow($this->table_name,$columns,$columns_value);
 
    }

  
    public function deleteArtist()
    {
        $pk_name = "artist_id";
        $pk_value = parent::getArtistID();
        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }


    public function updateArtist()
    {
        // getters doagjaat od pojo
        $artist_name = parent::getArtistName();
       

       

        // koloni koi gi azurirame
        $artist_name="artist_name='$artist_name'";

        $pk_name="artist_id";
        $pk_value = parent::getArtistID();
    }

   
    public function selectArtist()
    {
        return $this->database->selectRow($this->table_name); //ovaa linija ja kopirame vo site DAO-si
    }

}
