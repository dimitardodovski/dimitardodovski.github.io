<?php

class MusicalItem
{
	//class attributess
	private  $item_id;
    private  $item_name;
    private  $item_genre;
    private  $item_style;
    private  $item_format;
    private  $item_release_date;


	//setter
	public function setItemID($item_id){
		$this->item_id=$item_id;
	}

	public function setItemName($item_name){
		$this->item_name=$item_name;
	}

	public function setItemGenre($item_genre){
		$this->item_genre=$item_genre;
	}


	public function setItemStyle($item_style){
		$this->item_style=$item_style;
	}

	public function setItemFormat($item_format){
		$this->item_format=$item_format;
	}

	public function setItemReleaseDate($item_release_date){
		$this->item_release_date=$item_release_date;
	}

	


		//getter
	public function getItemID(){
		return $this->item_id;
	}

	public function getItemName(){
		return $this->item_name;
	}

	public function getItemGenre(){
		return $this->item_genre;
	}

	public function getItemStyle(){
		return $this->item_style;
	}

	public function getItemFormat(){
		return $this->item_format;
	}

	public function getItemReleaseDate(){
		return $this->item_release_date;
	}


	





}//end class musical_item



?>