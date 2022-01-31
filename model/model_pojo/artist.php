<?php
/**
 * @author DDodovski <dimitar.dodovski@gmail.com>
 */
class Artist
{
	//class attributes
	private  $artist_id;
    private  $artist_name;


	//setter

    /**
     * @param int $artist_id
     */
	public function setArtistID($artist_id){
		$this->artist_id=$artist_id;
	}

	public function setArtistName($artist_name){
		$this->artist_name=$artist_name;
	}


	//getter
	/**
     * @return int $artist_id
     */
	public function getArtistID(){
		return $this->artist_id;
	}

	public function getArtistName(){
		return $this->artist_name;
	}

	

}//end class artist



?>