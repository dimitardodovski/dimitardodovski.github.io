<?php

class MusicShop
{
	//class attributes
	private $music_shop_id;
	private $music_shop_name;
	private $music_shop_address;
	private $music_shop_email;


	//setter
	public function setMusic_shop_id($music_shop_id){
		$this->music_shop_id=$music_shop_id;
	}

	public function setMusic_shop_name($music_shop_name)
	{
		$this->music_shop_name=$music_shop_name;
	}

	public function setMusic_shop_address($music_shop_address)
	{
		$this->music_shop_address=$music_shop_address;
	}	

	public function setMusic_shop_email($music_shop_email)
	{
		$this->music_shop_email=$music_shop_email;
	}


		//getter
	public function getMusic_shop_id(){
		return $this->music_shop_id;
	}

	public function getMusic_shop_name()
	{
		return $this->music_shop_name;
	}

	public function getMusic_shop_address()
	{
		return $this->music_shop_address;
	}	

	public function getMusic_shop_email()
	{
		return $this->music_shop_email;
	}





}//end class music_shop



?>