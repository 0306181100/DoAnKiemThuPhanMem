<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id=$_POST['id'];
	$HoTen=$_POST['txtten'];
	$DiaChi=$_POST['txtdiachi'];
	$ketqua=DP::run_query("UPDATE khachhang SET HoTen=?,DiaChi=? WHERE id=?",[$HoTen,$DiaChi,$id],1);
	header("location:".$level.PAGE."admin-khachhang.php");
?>