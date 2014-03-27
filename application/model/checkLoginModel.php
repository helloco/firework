<?php
	header("content-type:text/html;charset=utf-8");
	require_once "sqlModel.php";

	class Login{
		function checkLogin($name,$passwd){
			$mysqlConnect = new MysqlConnect();
			if ($mysqlConnect->mysqlConn()) {
				$sql = "select uid,passwd,type from users where uid='$name'";
				$res = $mysqlConnect->query($sql);
				$row = mysql_fetch_row($res);
				// var_dump($row);
				// die();
				if (!empty($row[0])) {
					if ($row[1] == md5($passwd)) {
						return $row;
						
					}
					// else{
					// 	echo "密码错误";
					// }
				}
				else{
					return null;
				}
				
			}
		}
		function query(){
			echo "oooo";
		}
	}
	

