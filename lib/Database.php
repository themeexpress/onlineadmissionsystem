<?php
//Database connection initialize

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "onlineadmission");

Class Database{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}
	
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if(!$insert_row){
		die("Error :(".$this->link->errno.")".$this->link->error);
	} 		
	
  }
  
    // Update data
  	public function update($query){
	$result = $this->link->query($query) or die($this->link->error.__LINE__);
    if ($result=== FALSE) {
      die($this->link->error);
    }else{
      return $result;
    }
  
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if(!$delete_row){		
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
	public function connect()
  {
  	return "I M connected";
  }

 
 
}

