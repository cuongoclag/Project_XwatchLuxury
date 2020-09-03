SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS  AccountList;
CREATE TABLE IF NOT EXISTS AccountList(
Customerid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Username varchar(30)  COLLATE utf8_unicode_ci NOT NULL,
Password varchar(30)  COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (Customerid)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `typeproduct`;
CREATE TABLE IF NOT EXISTS `typeproduct` (
  `Typeid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Typename` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`Typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `typeproduct`
--

INSERT INTO `typeproduct` (`Typeid`, `Typename`, `Description`) VALUES
('T1', 'Tissot', 'Tissot 1853 nổi danh là thương hiệu đồng hồ có nền móng lịch sử lâu đời, sở hữu nhiều bộ sưu tập độc'),
('T2', 'Calvin Klein', 'Đồng hồ Calvin Klein còn được gọi là đồng hồ CK - cái tên nổi bật mang sự phá cách của thời trang và'),
('T3', 'Frederique Constant', 'Đồng hồ nam Frederique Constant Geneve - những cỗ máy thời gian cổ điển được nhấn nhá bởi các chi ti');

------------------------------------
DROP TABLE IF EXISTS Customer;
CREATE TABLE IF NOT EXISTS Customer(
Customerid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Customername varchar(30) COLLATE utf8_unicode_ci NOT NULL,
CustomerPass varchar(30) COLLATE utf8_unicode_ci NOT NULL,
Customeremail varchar(50) COLLATE utf8_unicode_ci NOT NULL,
Customerphone int(11) COLLATE utf8_unicode_ci NOT NULL,
Customeraddress varchar(128) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (Customerid)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8; 

DROP TABLE IF EXISTS Feedback;
CREATE TABLE IF NOT EXISTS Feedback(
Customerid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Title varchar(30) COLLATE utf8_unicode_ci NOT NULL,
COMMENT varchar(100) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (Customerid)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS OrderDetails;
CREATE TABLE IF NOT EXISTS OrderDetails(
Orderdetailsid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Productid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Quantity int NOT NULL,
TotalMoney float NOT NULL,
PRIMARY KEY (Orderdetailsid)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS OrderMaster;
CREATE TABLE IF NOT EXISTS OrderMaster(
Orderid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Orderdetailsid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Customerid varchar(20) COLLATE utf8_unicode_ci NOT NULL,
Recipient_Name varchar(30) COLLATE utf8_unicode_ci NOT NULL,
Recipient_Phone varchar(30) COLLATE utf8_unicode_ci NOT NULL,
Recipient_Email varchar(30) COLLATE utf8_unicode_ci NOT NULL,
Recipient_Address varchar(30) COLLATE utf8_unicode_ci NOT NULL,
Note varchar(300) COLLATE utf8_unicode_ci NULL,
OrderDate date NOT NULL,
PRIMARY KEY (Orderid)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Productid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Productname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Typename` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `WarrantyPeriod` varchar(20) NOT NULL,
  `Price` int NOT NULL,
  `Description` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Productid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Productid`, `Productname`, `Typename`, `Image`, `WarrantyPeriod`, `Price`, `Description`) VALUES
('ti1', 'Đồng hồ Tissot T118.410.36.277', 'Tissot', 'ti1.jpg', '2 năm', 11.21, 'Xuất xứ: Thụy Sĩ'),
('ti2', 'Đồng hồ Tissot T006.428.16.058', 'Tissot', 'ti2.jpg', '2 năm', 21.71, 'Xuất xứ: Thụy Sĩ'),
('ti3', 'Đồng hồ Tissot T067.417.33.041', 'Tissot', 'ti3.jpg', '2 năm', 19.33, 'Xuất xứ: Thụy Sĩ'),
('ti4', 'Đồng hồ Tissot T063.637.16.057', 'Tissot', 'ti4.jpg', '2 năm', 12.87, 'Xuất xứ: Thụy Sĩ'),
('ck1', 'K5S341C6', 'Calvin Klein', 'ck1.jpg', '2 năm', 14.06, 'Xuất xứ: Thụy Sĩ'),
('ck2', 'K8M21126', 'Calvin Klein', 'ck2.jpg', '2 năm', 7.2, 'Xuất xứ: Thụy Sĩ'),
('ck3', 'K8N23646', 'Calvin Klein', 'ck3.jpg', '2 năm', 8.57, 'Xuất xứ: Thụy Sĩ'),
('ck4', 'K3M23V26', 'Calvin Klein', 'ck4.jpg', '2 năm', 7.54, 'Xuất xứ: Thụy Sĩ'),
('fc1', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc1.jpg', '2 năm', 89.62, 'Xuất xứ: Thụy Sĩ'),
('fc2', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc2.jpg', '2 năm', 225.68, 'Xuất xứ: Thụy Sĩ'),
('fc3', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc3.jpg', '2 năm', 109.17, 'Xuất xứ: Thụy Sĩ'),
('fc4', 'Đồng hồ Frederique Constant FC', 'Frederique Constant', 'fc4.jpg', '2 năm', 109.17, 'Xuất xứ: Thụy Sĩ');


COMMIT;

ALTER TABLE Feedback ADD CONSTRAINT fk_feedback FOREIGN KEY(customerid) REFERENCES Customer(customerid);
ALTER TABLE OrderMaster ADD CONSTRAINT fk_ordermaster FOREIGN KEY(customerid) REFERENCES customer(customerid);
ALTER TABLE OrderMaster ADD CONSTRAINT fk_orderdetails FOREIGN KEY(Orderdetailsid) REFERENCES OrderDetails(Orderdetailsid);
ALTER TABLE OrderDetails ADD CONSTRAINT fk_orderdetails1 FOREIGN KEY(Productid) REFERENCES Product(Productid);
ALTER TABLE Product ADD CONSTRAINT fk_product FOREIGN KEY(Typename) REFERENCES TypeProduct(Typlename);
ALTER TABLE AccountList ADD CONSTRAINT fk_accountlist FOREIGN KEY (customerid) REFERENCES customer(customerid);