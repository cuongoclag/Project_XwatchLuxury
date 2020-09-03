
-- Cơ sở dữ liệu: `xwatchluxurydb`
--
CREATE DATABASE XwatchLuxury;
use XwatchLuxury;
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `accountlist`
--
CREATE TABLE AccountList(
--Accountid varchar(20) NOT NULL CONSTRAINT PK_Accountid PRIMARY KEY,
Customerid varchar(20) NOT NUlL CONSTRAINT PK_Account PRIMARY KEY,
Username varchar(30) NOT NULL,
Password varchar(30) NOT NULL,
)
go
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `brand`
--
CREATE TABLE Typeproduct (
  Typeid varchar(20)  NOT NULL CONSTRAINT PK_Typeid Primary key,
  Typename varchar(30)  NOT NULL,
  Description varchar(100) NULL,
) 
go
--INSERT INTO Typeproduct (Typeid, Typename, Description) VALUES
--('T1', 'Tissot', 'Tissot 1853 nổi danh là thương hiệu đồng hồ có nền móng lịch sử lâu đời, sở hữu nhiều bộ sưu tập độc'),
--('T2', 'Calvin Klein', 'Đồng hồ Calvin Klein còn được gọi là đồng hồ CK - cái tên nổi bật mang sự phá cách của thời trang và'),
--('T3', 'Frederique Constant', 'Đồng hồ nam Frederique Constant Geneve - những cỗ máy thời gian cổ điển được nhấn nhá bởi các chi ti');
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `customer`
--
CREATE TABLE Customer(
	Customerid varchar(20) NOT NULL CONSTRAINT PK_Customerid PRIMARY KEY,
	Customername varchar(30) NOT NULL,
	CustomerPass varchar(30) NOT NULL,
	Customeremail varchar(50) NOT NULL,
	Customerphone int NOT NULL,
	Customeraddress varchar(128) NOT NULL
)
go
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `feedback`
--
CREATE TABLE Feedback(
	Customerid varchar(20) NOT NULL CONSTRAINT PK_Feedback PRIMARY KEY,
	Title varchar(30) NOT NULL,
	COMMENT varchar(100) NOT NULL
)
go
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `orderdetails`
--
CREATE Table OrderDetails(
	Orderdetailsid varchar(20) NOT NULL CONSTRAINT PK_Orderdetail PRIMARY KEY,
	Productid varchar(20)  NOT NULL,
	Quantity int NOT NULL,
	TotalMoney float NOT NULL
)
go
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `ordermaster`
--
CREATE TABLE OrderMaster (
	Orderid varchar(20) NOT NULL CONSTRAINT PK_Orderid PRIMARY KEY,
	Orderdetailsid varchar(20) NOT NULL,
	Customerid varchar(20) NOT NULL,
	Recipient_Name varchar(20) NOT NULL,
	Recipient_Phone int NOT NULL,
	Recipient_Email varchar(20) NOT NULL,
	Recipient_Address varchar(200) NOT NULL,
	Note varchar(300) NULL,
	OrderDate date NOT NULL
)
go
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE Product (
  Productid varchar(20) NOT NULL CONSTRAINT PK_Productid PRIMARY KEY,
  Typeid varchar(20) NOT NULL,
  Productname varchar(30) NOT NULL,
  Typename varchar(30) NOT NULL,
  Image varchar(50) NOT NULL,
  WarrantyPeriod varchar(20) NOT NULL,
  Price float NOT NULL,
  Description varchar(100) NULL
)
go

--INSERT INTO Product (Productid, Typeid, Productname, Typename, Image, WarrantyPeriod, Price, Description) VALUES
--('ti1', 'T1', 'Đồng hồ Tissot T118.410.36.277', 'Tissot', 'ti1.jpg', '2 năm', 11.210.000, 'Xuất xứ: Thụy Sĩ'),
--('ti2', 'T1', 'Đồng hồ Tissot T006.428.16.058', 'Tissot', 'ti2.jpg', '2 năm', 21.710.000, 'Xuất xứ: Thụy Sĩ'),
--('ti3', 'T1', 'Đồng hồ Tissot T067.417.33.041', 'Tissot', 'ti3.jpg', '2 năm', 19.330.000, 'Xuất xứ: Thụy Sĩ'),
--('ti4', 'T1', 'Đồng hồ Tissot T063.637.16.057', 'Tissot', 'ti4.jpg', '2 năm', 12.870.000, 'Xuất xứ: Thụy Sĩ'),
--('ck1', 'T2', 'K5S341C6', 'Calvin Klein', 'ck1.jpg', '2 năm', 14.060.000, 'Xuất xứ: Thụy Sĩ'),
--('ck2', 'T2', 'K8M21126', 'Calvin Klein', 'ck2.jpg', '2 năm', 7.200.000, 'Xuất xứ: Thụy Sĩ'),
--('ck3', 'T2', 'K8N23646', 'Calvin Klein', 'ck3.jpg', '2 năm', 8.570.000, 'Xuất xứ: Thụy Sĩ'),
--('ck4', 'T2', 'K3M23V26', 'Calvin Klein', 'ck4.jpg', '2 năm', 7.540.000, 'Xuất xứ: Thụy Sĩ'),
--('fc1', 'T3', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc1.jpg', '2 năm', 89.620.000, 'Xuất xứ: Thụy Sĩ'),
--('fc2', 'T3', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc2.jpg', '2 năm', 225.680.000, 'Xuất xứ: Thụy Sĩ'),
--('fc3', 'T3', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc3.jpg', '2 năm', 109.170.000, 'Xuất xứ: Thụy Sĩ'),
--('fc4', 'T3', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc4.jpg', '2 năm', 109.170.000, 'Xuất xứ: Thụy Sĩ');

--COMMIT;
ALTER TABLE OrderMaster ADD CONSTRAINT fk_Ord_Details FOREIGN KEY(Orderdetailsid) REFERENCES OrderDetails(Orderdetailsid);
ALTER TABLE OrderMaster ADD CONSTRAINT fk_Ord_customer FOREIGN KEY(Customerid) REFERENCES customer(customerid);
ALTER TABLE OrderDetails ADD CONSTRAINT fk_orderdetails FOREIGN KEY(Productid) REFERENCES Product(Productid);
ALTER TABLE Product ADD CONSTRAINT fk_product FOREIGN KEY(Typeid) REFERENCES TypeProduct(Typeid);
ALTER TABLE AccountList ADD CONSTRAINt fk_ACC_Customer FOREIGN KEY (Customerid) REFERENCES customer(customerid);
ALTER TABLE Feedback ADD CONSTRAINT fk_FB_Customer FOREIGN KEY(customerid) REFERENCES customer(customerid);
