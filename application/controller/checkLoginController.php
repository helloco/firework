<?php
	header("content-type:text/html;charset=utf-8");
	require_once "../model/checkLoginModel.php";
	$name = $_POST['username'];
	$passwd = $_POST['passwd'];
	$login = new Login();
	$row = $login->checkLogin($name,$passwd);
	if (!empty($row)) {
		session_start();
		$_SESSION['username'] = $row[0];
		$_SESSION['type'] = $row[2];
		if ($row[2] == 1) {
			header("Location:../view/index1.php"); //secadmin
		}elseif ($row[2] ==2) {
			header("Location:../view/index2.html"); //logadmin
		}
	}else{
		echo "psw or username wrong";
	}
	// $login->query();
