<?php
class DBController {
	private $hostimi = "localhost";
	private $perdoruesi = "root";
	private $fjalkalimi = "";
	private $bazaetedhenave = "umaue";
	private $lidh;
	
	function __construct() {
		$this->lidh = $this->connectDB();
	}
	
	function connectDB() {
		$lidh = mysqli_connect($this->hostimi,$this->perdoruesi,$this->fjalkalimi,$this->bazaetedhenave);
		return $lidh;
	}
	
	function runQuery($pyetje) {
		$rezultati = mysqli_query($this->lidh,$pyetje);
		while($rresht=mysqli_fetch_array($rezultati)) {
			$rezultatet[] = $rresht;
		}
		if(!empty($rezultatet))
			return $rezultatet;
	}
	
	function insertQuery($pyetje) {
	    mysqli_query($this->lidh, $pyetje);
	    $insert_id = mysqli_insert_id($this->lidh);
	    return $insert_id;
	}
	
	function getIds($pyetje) {
	    $rezultati = mysqli_query($this->lidh,$pyetje);
	    while($rresht=mysqli_fetch_array($rezultati)) {
	        $rezultatet[] = $rresht[0];
	    }
	    if(!empty($rezultatet))
	        return $rezultatet;
	}
}
?>