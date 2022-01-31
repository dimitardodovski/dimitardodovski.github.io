<?php

class Contract
{
	//class attributes
	private  $contract_id;
    private  $label_id;
    private  $item_id;
    private  $artist_id;

	//setter
	public function setContractID($contract_id){
		$this->contract_id=$contract_id;
	}

	public function setLabelID($label_id){
		$this->label_id=$label_id;
	}

	public function setItemID($item_id){
		$this->item_id=$item_id;
	}

	public function setArtistID($artist_id){
		$this->artist_id=$artist_id;
	}


	//getter

	public function getContractID(){
		return $this->contract_id;
	}

	public function getLabelID(){
		return $this->label_id;
	}

	public function getItemID(){
		return $this->item_id;
	}

	public function getArtistID(){
		return $this->artist_id;
	}

	

}//end class contract



?>