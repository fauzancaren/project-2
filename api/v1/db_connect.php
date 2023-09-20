<?php
class DB_CONNECT{
	
	public $con=null;
	
    function __construct(){
		$con=null;
		$this->connect();
	}
	function __destruct(){
		$this->close();
	}
	function connect(){
 
		include "db_config.php";
 
		
		if(!$this->con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE)){
			die(mysqli_error($this->con));
		}
		//echo mysql_error();
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
 
		
		$db = mysqli_select_db($this->con,DB_DATABASE);
		//or die (mysql_error());
		//echo mysql_error();
		/* check connection */
		if (mysqli_errno($this->con)) {
			printf("Connect failed: %s\n", mysqli_error($this->con));
			exit();
		}
		
		return $this->con;
	}
	function close(){		
		if($this->con!=null){
			//mysqli_close($this->con);
		}
	}
}
?>