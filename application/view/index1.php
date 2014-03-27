<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	if(empty($_SESSION['username'])){
		header("location:../../index.html");
	}else{
		if (($_SESSION['type'] == 1)) {  //type=1 ==>> secadmin index
			require_once "../../libs/Smarty.class.php";
			$smarty=new Smarty;
			$smarty->left_delimiter="<{";
			$smarty->right_delimiter="}>";
			$smarty->setTemplateDir("./");
			$smarty->setCompileDir('./templates_c');
			$arr=array('beijing','shanghai','天津');
			$smarty->assign("var2",$arr);
			$smarty->display("index1.html");


		}elseif(($_SESSION['type'] == 2)) {
			// header("location:index2.html");
		}
	}