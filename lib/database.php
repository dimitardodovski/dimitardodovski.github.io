<?php
//databazata
class Database
{
	//class Attributes
	private $db_servername = "localhost";
	private $db_username   = "root";
	private $db_password   = "";
	private $db_name	   = "musicalshop";
	private $conn		   = null;
	//class methods
	public function __construct(){
		
		try
		{
			$this->conn = new PDO("mysql:host=$this->db_servername;dbname=$this->db_name", $this->db_username, $this->db_password);
  // set the PDO error mode to exception
  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
		}catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}

		public function selectRow($table_name) {
			$sql="SELECT * FROM $table_name";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();
		return $stmt->fetchAll();
	}





	public function insertRow($table_name,$columns,$columns_value){
	 $sql = "INSERT INTO $table_name ($columns)
	  VALUES ($columns_value)";
	  // use exec() because no results are returned
	  $this->conn->exec($sql);
	}


	public function deleteRow($table_name,$pk_name,$pk_value){
    $sql = "DELETE FROM $table_name WHERE $pk_name=$pk_value";
    $this->conn->exec($sql);
}

    public function deleteAllRows($table_name){
        $sql = "DELETE FROM $table_name ";
        $this->conn->exec($sql);
    }
	public function updateRow($table_name,$columns,$pk_name,$pk_value){
    $sql = "UPDATE $table_name SET $columns WHERE $pk_name=$pk_value";

    // Prepare statement
    $stmt = $this->conn->prepare($sql);

    // execute the query
    $stmt->execute();

}



	public function callStoredProcedureWithParams($StoredProcedure,$column_value){

		//call stored procedure from database
		//     call   _insert_alternativa('Vozduh','Zemja',2)
		$sql=" CALL ".$StoredProcedure." (".$column_value.")";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute();
	}



}
?>