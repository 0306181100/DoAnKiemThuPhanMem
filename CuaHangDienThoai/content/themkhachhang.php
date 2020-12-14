<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$HoTen = $_POST['txthoten'];
	$DiaChi = $_POST['txtdiachi'];
	$ketqua=DP::run_query("INSERT INTO khachhang(HoTen, DiaChi) VALUES (?,?)",[$HoTen,$DiaChi],3);
	header("location:".$level.PAGE."admin-khachhang.php");
?>