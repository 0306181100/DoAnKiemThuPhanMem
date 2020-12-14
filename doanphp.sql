create table sanpham(
	idsanpham int AUTO_INCREMENT primary key,
	anhdaidien varchar(50),
	Tensp varchar(50),
	Gia varchar(50),
	Donvi varchar(20),
	idloaisp int,
	Manhacungcap int, 
	Trangthai int
);
create table Nhacungcap(
	 MANCC int primary key,
	 TenNCC text
);
create table KhachHang(
	 id int AUTO_INCREMENT primary key,
	 HoTen nvarchar(50),
	 DiaChi nvarchar(50)
);
Create Table Loaisp(
	idLoaisp int primary key,
	Tenloaisp varchar(50)
);
create TABLE slideshow
(
	idslideshow int(3) AUTO_INCREMENT primary key,    
	anh text,
	class text
);
CREATE TABLE binhluan
(
    idbinhluan int(3) AUTO_INCREMENT primary key,
    idsanpham int,
    noidung longtext CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL,
	nguoidang text,
    ngaydang varchar(20) 
);
CREATE TABLE users ( 
    Username char(20) NOT NULL PRIMARY KEY,
    Pass char(20) NOT NULL , 
	isAdmin BIT NOT NULL,
);

CREATE table hoadon(
	mahoadon int AUTO_INCREMENT PRIMARY key,
    	ngaylap text,
	tonghoadon int,
	khachhang text,
	sodienthoai text
);
CREATE table chitiethoadon(
	stt int AUTO_INCREMENT PRIMARY key,
	mahoadon int,
    idsanpham int,
    anhdaidien text,
    tensanpham text,
    gia int,
    donvi text,
    tennhacungcap text,
    soluong int
);
ALTER TABLE binhluan ADD Trangthai INT NOT NULL DEFAULT '1' AFTER ngaydang;
INSERT INTO users (Username,Pass,isAdmin) Values
('admin','abc',1),
('HaiLe','abc',0);	

INSERT INTO binhluan (idbinhluan, idsanpham, noidung, nguoidang, ngaydang) VALUES
(1, 40, 'Sản phẩm tốt', 'Lê Quang Hải', '5/30/2020'),
(2, 40, 'Dở', 'Lê Quang Hải 1', '15:24:08 pm'),
(3, 40, 'Dở', 'Lê Quang Hải', '15:25:25 pm');

INSERT INTO loaisp (idLoaisp, Tenloaisp) VALUES
(1, 'Điện thoai'),
(2, 'Laptop');

INSERT INTO sanpham (idsanpham, anhdaidien, Tensp, Gia, Donvi, Manhacungcap, idloaisp, Trangthai) VALUES
(40, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(41, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 2, 1, 1),
(42, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 1, 1, 1),
(43, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 1),
(44, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 2, 0),
(45, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 2, 0),
(46, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 3, 2, 0),
(47, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 0, 2, 0),
(48, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0),
(49, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(50, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 2, 1, 0),
(51, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 0, 1, 0),
(52, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 0),
(53, 'sp1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 1, 0),
(54, 'sp2.jpg', 'SAMSUNG GALAXY A10', '8900000', '(VND)', 2, 1, 0),
(55, 'sp3.jpg', 'HUAWEI P 30', '7000000', '(VND)', 0, 1, 0),
(56, 'sp4.jpg', 'SAMSUNG GALAXY A9', '2000000', '(VND)', 1, 1, 0),
(57, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 2, 0),
(58, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 3, 2, 1),
(59, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 0, 2, 0),
(60, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0),
(61, 'IPAD1.jpg', 'SAMSUNG GALAXY A9', '6900000', '(VND)', 1, 2, 0),
(62, 'IPAD2.jpg', 'Apple iPad (2018) 9.7\" 32GB', '8900000', '(VND)', 3, 2, 0),
(63, 'IPAD3.jpg', 'Apple iPad (Latest Model) 32GB', '7000000', '(VND)', 0, 2, 0),
(64, 'IPAD4.jpg', 'iPad 1 64Gb', '2000000', '(VND)', 2, 2, 0);

INSERT INTO slideshow (idslideshow, anh, class) VALUES
(1, 'QC1.png', 'carousel-item active'),
(2, 'QC2.png', 'carousel-item'),
(3, 'QC3.jpg', 'carousel-item'),
(4, 'QC4.jpg', 'carousel-item');

INSERT INTO nhacungcap (MANCC, TenNCC) VALUES
(1, 'IPHONE'),
(2, 'APPLE'),
(3, 'XIAOMI'),
(0, 'NOKIA');

