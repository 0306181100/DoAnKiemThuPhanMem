<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$_isKhachHang = true;
	$id = $_GET['id'];
	$khachhang=DP::run_query("select * from khachhang WHERE id=?",[$id],2);
	include($level.PAGE."layout-admin.php");
?>