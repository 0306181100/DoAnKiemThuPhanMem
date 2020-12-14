<?php
if(isset($_SESSION['username'])){
    include($level.Content."danh-sach-chuc-nang.php");
    if(!empty($_isSanPham))
        include($level.Content."admin-sanpham-content.php");
    else


    if(!empty($_isHoaDon))
        include($level.Content."admin-hoadon-content.php");
    else


    if(!empty($_isKhachHang)) 
        if(isset($id)) include($level.Content."form-sua-khachhang.php");//Nếu lấy được id thì đưa qua trang sửa
        else include($level.Content."admin-khachhang-content.php");
    else


    if(!empty($_isTaiKhoan)) include($level.Content."admin-taikhoan-content.php");
    //Nhìn cái là hiểu ha khỏi nói cũng biết để điều hướng content r
    //emty trả về true nếu biến rỗng
    //nếu chưa đăng nhập mà vê trang của admin thì điều hướng vô trang đăng nhập
}else
header('location:' . $level.PAGE.'Dangnhap.php');
?>