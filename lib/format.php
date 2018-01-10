<?php 

//data validation
/**
* 
*/
class Format
{
 public function validation($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;

	}	
	public function formatdate($date){
		return date('F j,Y',strtotime($date));
	}

	
}

?>