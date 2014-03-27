<?php
	class MysqlConnect{
		public $host = "127.0.0.1";
		public $username = "root";
		public $password = "";
		public $db = "syslog";
		function mysqlConn(){
			$conn = mysql_connect($this->host,$this->username,$this->password);
			if($conn){
				return true;
			}else{
				die('Could not connect: ' . mysql_error());
			}
		
		}
		function query($sql){
			mysql_query("set names utf8");
			mysql_select_db($this->db);
			$res = mysql_query($sql);
			return $res;
		}
	}

	// function __destruct() {
	//        
	//    }
?>