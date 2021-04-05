drop database if exists RESTAURANT_PROJECT;
create database RESTAURANT_PROJECT;
use RESTAURANT_PROJECT;
-- -----------------------------
-- table for image:
-- -----------------------------

Create table if not exists image_member(
id INT(11) NOT NULL auto_increment primary key,
name_mem varchar(255) default null,
image_mem varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
Note varchar(255) default null
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
 insert into image_member value
(1, 'Quan', 'img/img_member/quan.jpg', 'Quanty nha'),
(2,'Diem','img/img_member/diem.jpg', 'Không biết thì hỏi thầy sẽ biết'),
        (3,'Vương','img/img_member/vuong.jpg', 'Auto hand some boy'),
        (4,'Vi','img/img_member/vi.jpg', 'Dep trai co gi sai');
       

CREATE table if not exists image_cuss(
id INT(11) NOT NULL auto_increment primary key,
name_cus varchar(255) default null,
image_cus varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
Note varchar(255) default null
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
 insert into image_cuss value
(1, 'Bat Gioi', 'img/img_customer/batgioi.jpg', 'good'),
(2,'Obama','img/img_customer/obama.jpg', 'good'),
        (3,'thidiemidol','img/img_customer/batgioi.jpg', 'good');
       
-- -----------------------------
-- table for image_slider:
-- -----------------------------

CREATE table if not exists image_slider (
id INT(11) NOT NULL auto_increment primary key,
name_slider varchar(255) default null,
image varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
note varchar(255) default null
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

 insert into image_slider value
(1, 'Good', 'img/interface/backgroundd.jpg', 'Shop Now'),
(2,'Good','img/interface/backgroundd.jpg', 'Shop Now'),
        (3,'Good','img/interface/backgroundd.jpg', 'Shop Now');
       
-- -----------------------------
-- table for admin:
-- -----------------------------
CREATE TABLE  if not exists admin (
id INT(11) NOT NULL,
username VARCHAR(50) DEFAULT NULL,
password VARCHAR(50) DEFAULT NULL,
PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
INSERT INTO admin
VALUES (1, 'mylishop', '8A86E1AAF7327885729E5B450841FEF6'),
(2,'trungquanidol','q!uan1211'),
        (3,'thidiemidol','vingoc1211'),
        (4,'ngocviidol','d!iem1211'),
        (5,'hungvuongidol','vuong!1211');

select * from admin;
-- -----------------------------
-- table for employee:
-- -----------------------------
create table if not exists employees(
id_employee int primary key,
name_employee varchar(60),
    gender varchar(5),
    age int(2),
    address varchar(100),
    phone varchar(11),
    positions varchar(50), -- chức vụ vị trí trong cty
    salary decimal(10,2),
    dateOfwork date
);
insert into employees
values (1,'Nguyen Doan Ngoc Hau','Nu',19,'Hai Lang- Quang Tri',12000123,'quan li',6000000,'2019-3-3'),
(2,'Nguyen Dinh Long','Nam',20,'Dinh-10 Quang Binh',111112,'Ke Toan',3000000,'2020-3-6'),
(3,'Nguyen Ngoc Pha','Nam',19,'Quang Nam',111113,'Tu Van',5000000,'2020-05-08'),
(4,'Le Ngoc Vi','Nam',19,'Binh Dinh',111114,'Tu Van',5000000,'2019-07-06'),
(5,'Le Hong Hanh','Nu',19,'Tuyen Hoa- Quang Tri',111115,'Marketing',4000000,'2019-12-08'),
(6,'Ho Thi Nhu Quynh','Nu',19,'Quang Tri',111116,'Marketing',4000000,'2019-05-06');

select * from employees;
-- -----------------------------
-- table for user:
-- -----------------------------
create table if not exists users(
	id_user int primary key,
    fullname varchar(60),
    user_name varchar(255),
    password char(11),
    gender char(5),
    email varchar(50),
    phone char(11),
    status int(11) not null default '0',
    address varchar(100)
);

insert into users
value (100,'Nguyen Van Hung','hungvon123','h!ung1211','Nam','hung100@gmail.com',100110,'Le Thuy- Quang Binh',1),
(101,'Nguyen Son Nam','nam123','nam!1211','Nam','Nam101@gmail.com',100111,'Vinh linh - Quang Tri',1);

select * from users;

-- -----------------------------
-- table for carts:
-- -----------------------------
create table if not exists carts(
	id_cart int auto_increment primary key,
    name_product varchar(255) not null,
    price decimal(10,2) not null,
    payments varchar(50), -- cột hình thức thanh toán
    delivery_address varchar(50) -- địa chỉ giao hàng
);  
-- insert into carts values (01,20000,'shipper','Thi Xa-Quang Tri'),
-- (02,100000,'shipper','Le Thuy-Quang Binh'),
-- (03,150000,'shipper','Hue'),
-- (04,200000,'shipper','Ha Noi'),
-- (05,25000,'shipper','Lien Chieu-Da Nang'),
-- (06,90000,'shipper','Hoa Khanh-Da Nang');


-- -----------------------------
-- table for carts:
-- -----------------------------

-- Tạo bảng nhà cung cấp
create table Vendor(
id_vendor int primary key,
    name_vendor varchar(100),
    address   varchar(100),
    phone char(11),
    email varchar(100)
);
insert into Vendor value(1,'ABCD','33-HungVuong-HaNoi',012345,'abcd@gmail.com.vn'),
(2,'CDEFH','Ho Chi Minh',012367,'cdefh@gmail.com.vn'),
(3,'HFQXZ','Da Nang',012389,'hfqxz@gmail.com.vn'),
(4,'HDTHC','Quang Binh',19008198,'hdthc@gmail.com.vn');

-- Tạo bảng danh mục sản phẩm( thể loại chính cho từng sản phẩm)
create table Product_category(
	id_prodCate int primary key,
   --  id_cart int,
    product_Category_Name varchar(100)
   --  foreign key (id_cart) references carts(id_cart)
);
insert into Product_category values (1,'New Product'),
(2,'Drinks'),
(3,'Product Discount'),
(4,'Room');
-- -----------------------------
-- table for products:
-- -----------------------------
CREATE TABLE if not exists products (
id_product int NOT NULL AUTO_INCREMENT,
name_product varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
created_day date NOT NULL,
quantity int(11) NOT NULL,
-- keyword varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
status int(11) DEFAULT NULL,
PRIMARY KEY (id_product),
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34;

insert into products values
(1010,'Ba Ba',1,'img/img-product/baba.jpg','',100000,'2020-1-21',20,1),
(1011,'Ga Luoc',1,'img/img-product/galuoc.png','',150000,'2020-03-05',23,1),
(1012,'Cua Hoang De',1,'img/img-product/cuahoangde.jpg','',150000,'2020-03-05',23,1),
(1013,'Ca Mú Hấp',1,'img/img-product/camuhap.jpg','',700000,'2020-05-11',20,1),
(1014,'Cá',2,'img/img-product/ganuong.jpg','',100000,'2020-05-12',20,1),
(1015,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',40,1),
(1016,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',40,1),
(1017,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',40,1),
(1018,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',40,1),
(1019,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',40,1);
-- (1016,'TV Sony SX max',14000000,1,'Sản phâm ưu dùng nhất thi trường siêu bền','2020-05-17',2),
-- (1017,'Sofa',14000000,1,'Ngồi êm hơn cùng sofa','2020-05-19',1),
-- (1018,'May tinh ASUS',12000000,1,'Thoái mái xem phim lướt fb cùng bạn tình','2020-03-15',4),
-- (1019,'Smartphone',10000000,1,'Dien thoai chong tham nươc cuc tot tới 99%','2020-01-10',4);

select *from Products;



-- -----------------------------
-- table for products:
-- -----------------------------
CREATE TABLE if not exists discount_product (
id_product int NOT NULL AUTO_INCREMENT,
name_product varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
old_price float not null,
created_day date NOT NULL,
quantity int(11) NOT NULL,
-- keyword varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
status int(11) DEFAULT NULL,  
PRIMARY KEY (id_product),
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34;

-- drop table discount_product;

insert into discount_product values
(1010,'Ba Ba',1,'img/img-product/baba.jpg','',120000,100000,'2020-1-21',20,3),
(1011,'Ga Luoc',1,'img/img-product/galuoc.png','',200000,150000,'2020-03-05',23,3),
(1012,'Cua Hoang De',1,'img/img-product/cuahoangde.jpg','',200000,150000,'2020-03-05',23,3),
(1013,'Ca Mú Hấp',1,'img/img-product/camuhap.jpg','',1000000,700000,'2020-05-11',20,3),
(1014,'Cá',2,'img/img-product/honhop.jpg','',200000,100000,'2020-05-12',20,3),
(1015,'Ga Nuong',1,'img/img-product/ganuong.jpg','',600000,500000,'2020-05-14',40,3);

 create table if not exists drinks(
id int(11) NOT NULL AUTO_INCREMENT,
name_water varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image_water varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
status int(11) DEFAULT NULL,
PRIMARY KEY (id),
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate)
 );

INSERT INTO drinks values 	(1,'Red Bull',2,'img/drink/Bò-húc.jpg','',200000,0),
							(2,'CocaCoLa',2,'img/drink/coca.jpg','',200000,0),
                            (3,'Beer',2,'img/drink/beer.jpg','',200000,0),
                            (4,'Milk-tea',2,'img/drink/gong-cha.jpg','',200000,0),
                            (5,'Bí đao',2,'img/drink/milk-tea.jpg','',200000,0),
                            (6,'KHông Độ',2,'img/drink/không-độ.jpg','',200000,0);

create table if not exists wedding_img(
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
status int(11) DEFAULT NULL,
PRIMARY KEY (id),
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate)
 );

INSERT INTO wedding_img values 	(1,'Tôm Nướng',2,'img/wedding/tom.jpg','',200000,0),
							(2,'Fruit',2,'img/wedding/fruit.jpg','',200000,0),
                            (3,'Mâm Cưới',2,'img/wedding/mâm.jpg','',200000,0);
                            


-- -----------------------------
-- table for rooms:
-- -----------------------------

CREATE TABLE if not exists rooms(
id int(11) NOT NULL AUTO_INCREMENT,
name_room varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image_room varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
created_day date NOT NULL,
quantity_person int(11) NOT NULL,
status int(11) DEFAULT NULL,
PRIMARY KEY (id),
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate 	)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34;
INSERT INTO rooms values (1,'room',4,'img/img-room/room1.jpg','',100000,'2020-1-21',20,20),
(2,'room1',4,'img/img-room/room2.jpg','',100000,'2020-1-21',20,20),
                            (3,'room2',4,'img/img-room/room3.jpg','',100000,'2020-1-21',20,20),
                            (4,'room3',4,'img/img-room/room4.jpg','',100000,'2020-1-21',20,20),
                            (5,'room4',4,'img/img-room/room5.jpg','',100000,'2020-1-21',20,20),
                            (6,'room5',4,'img/img-room/room6.jpg','',100000,'2020-1-21',20,20);

select * from rooms;


CREATE TABLE if not exists room_interface(
id int(11) NOT NULL AUTO_INCREMENT,
room_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
img_room varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34;
INSERT INTO room_interface values (1,'room','img/img-room/room1.jpg','Good nè'),
(2,'room1','img/img-room/room2.jpg','Good nè'),
                            (3,'room2','img/img-room/room3.jpg','Good nè'),
                            (4,'room3','img/img-room/room4.jpg','Good nè');
                           

select * from room_interface;




-- -----------------------------
-- table for bills:
-- -----------------------------

-- CREATE TABLE Bills (
--     id_bill INT PRIMARY KEY,
--     id_users INT,
--     Date_of_payment DATE, -- ngày thanh toán
--     total_money DECIMAL(10 , 2 ),
--     id_prod INT,
--     FOREIGN KEY (id_users)
-- REFERENCES users (id_user),
--     FOREIGN KEY (id_prod)
--         REFERENCES products (id_prod)
-- );
-- insert into Bills values (001,105,'2020-01-15',10000000,1010),
-- (002,100,'2020-05-22',14000000,1015),
--                             (003,101,'2020-03-06',20000,1014),
--                             (004,103,'2020-01-15',150000,1010),
--                             (005,102,'2020-01-15',700000,1018),
--                             (006,104,'2020-01-15',500000,1016),
-- (007,109,'2020-01-15',14000000,1012),
--                             (008,107,'2020-01-15',500000,1011),
--                             (009,108,'2020-01-15',600000,1019);






/* Đồ án học kì 2*/
-- VIEW
-- drop view view_name;
-- drop view if exists view_name;
-- Create view view_name
-- As
-- select  p.id_prod, p.name_prod, s.id_supplier, s.name_supplier
-- from Products p
-- INNER JOIN Suppliers s  
-- ON (p.id_supplier = s.id_supplier)
-- where p.id_prod in( 1012,1015);

-- select * from view_name;

-- -- view tim khach hang vip
-- drop view if exists view_employee;
-- create view  view_employee as
-- select name_employee,phone,max(salary)
-- from employees;
-- select * from view_employee;

-- -- PROCEDURE
-- -- Tìm giá lớn nhất và bé nhất trong bảng sản phẩm
-- drop procedure if exists Prices;
-- delimiter //
-- create procedure Prices(out maxx int, out minn int)
-- begin
--     select max(price) into maxx  from Products;
--     select min(price) into minn from Products;
-- select @maxx,@minn;
--     end//
--     delimiter ;
--     call Prices(@maxx,@minn);
--    
-- -- tạo cursor danh sách email và phone của curtomer
-- drop procedure if exists createEmail_Phone;
-- delimiter //
-- create procedure createEmail_Phone(inout phoneEmail_List varchar(9000))
-- begin
-- declare finished int default 0;
-- declare email_address  varchar(100) default "";
-- declare phone_address varchar(100) default "";
-- declare cur_customer cursor for
-- select email ,phone from customers;
--     DECLARE CONTINUE HANDLER
--         FOR NOT FOUND SET finished = 1;
-- OPEN cur_customer;
--     getEmail_Phone: LOOP
--     Fetch cur_customer  into email_address,phone_address;
-- if finished=1 then
-- leave getEmail_Phone;
--     end if;
--     Set phoneEmail_List = concat(phoneEmail_List," ",email_address ,phone_address,"----");
-- end loop getEmail_Phone;
-- close cur_customer;
-- end //
-- delimiter ;
-- set @phoneEmail_List ="";
-- CALL createEmail_Phone(@phoneEmail_List);
-- select @phoneEmail_List as phone_email_customer;


-- -- FUNCTION
--  -- đếm số đơn hàng trong tháng
--  drop function if exists CountEd;
--  delimiter //
--  create function CountEd( months int)
--  returns int
--  deterministic
--  begin
-- declare sums int ;
-- select count(*) into sums  from Bills
--     where month(Date_of_payment) = months ;
--     return sums ;
--     end//
-- delimiter ;
-- select CountEd(1) AS 'Số hóa đơn trong tháng';

-- -- Function tìm lương của nhân viên theo id  nhân viên
-- drop function if exists salaryEmp;
-- delimiter //
-- create function salaryEmp (id_emp char(4)) returns decimal(10,2)
-- deterministic
-- begin
--  declare salarys decimal(10,2);
--  select salary into salarys from Employees
--  where id_employee = id_emp ;
--  return salarys ;
--  end //
--  delimiter ;
--  select salaryEmp (5) as 'Salary_Of_Employee';
--  
-- -- TRIGGER
-- -- Trigger kiểm tra số lượng của sản phẩm trước khi update;
-- drop  trigger if exists  before_product_update
-- DELIMITER //
-- CREATE TRIGGER before_product_update
-- BEFORE UPDATE
-- ON products FOR EACH ROW
-- BEGIN
-- declare errorMessage VARCHAR(255);
-- SET errorMessage = CONCAT('The new amount ',NEW.quantity,' cannot be 2 times greater than the current quantity ',OLD.quantity);
-- IF new.quantity > old.quantity * 2 THEN
-- SIGNAL SQLSTATE '45000'
-- SET MESSAGE_TEXT = errorMessage;
-- END IF;
-- END //
-- DELIMITER ;

-- select quantity from products where id_prod = 1010;

-- UPDATE products
-- SET quantity = 100
-- WHERE id_prod = 1010;
-- select * from products;

-- -- kiểm tra insert giá < 0 thì báo lỗi
-- drop  trigger if exists  befor_product_insert ;
-- delimiter //
-- create trigger befor_product_insert
-- before insert on products for each row
-- begin
-- declare bug varchar(200);
-- set bug =concat("The product inserted is invalid , price < 0 ");
-- if( new.price <= 0 ) then signal sqlstate '45000' set message_text = bug ;
--     end if;
--     end //
-- delimiter ;
-- insert into products values (1020,'Tạ 10kg',-100,2,'Suc khoe doi dao nang cao the luc','2020-03-05',500,03);


-- -- EVENT
-- Drop table messages;
-- CREATE TABLE  messages (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     message VARCHAR(1000) NOT NULL
-- );
-- set global event_scheduler= on;
-- drop event Number_of_Employee;
-- delimiter //
-- Create event  Number_of_Employee
-- ON SCHEDULE every 10 second
-- ON COMPLETION PRESERVE
-- Do
-- begin
-- declare numberofemployee int;    
-- declare tmp varchar(1000);
--     Select count(e.id_employee) into numberofemployee
--     from employees e
--     inner join orders o
--     On e.id_employee = o.id_employee
--     where e.salary >= 5000000 or  o.quantity >3;
--     set tmp=concat("There are: ", numberofemployee," employee that salary in 1million to 5 mililion and quantity >3 ");
--     insert into messages (message) value (tmp);
-- End//
-- delimiter ;
-- select * from messages;
-- show events from banhang_online;

-- -- AFTER INSERT
-- -- kiểm tra ngày xuất hóa đơn , nếu ngày xuat hóa đơn là null thì insert vào message id hóa đơn đó và content : vui lòng nhập ngày lập hóa đơn
-- delimiter //
-- create trigger after_Bill_insert
-- after insert on Bills for each row
-- begin
-- if new.Date_of_payment is null then
-- insert into messages values (new.id_bill,concat("Vui lòng nhập ngày xuất hóa đơn"));
--     end if;
-- end //
-- delimiter ;
-- drop trigger after_Bill_insert;
-- insert into Bills values (112,108,null,900000,1019);
-- select id,message from messages;

-- drop table messages;


-- -- AFTER UPDATE
-- -- Giá trị của giá thay đổi thì lưu vào table message để sau này biết lịch sử thay đổi của nó
-- create table change_price(
-- id int primary key,
-- content varchar (200)
-- );

-- drop trigger if exists after_product_update;
-- delimiter //
-- create trigger after_product_update
-- after update on products for each row
--  begin
--   if new.price <> old.price then
--   insert into change_price values ( new.id_prod , concat( " Giá thay đổi từ ", old.price, " thành ", new.price));
--   end if;
--   end//
-- delimiter ;
-- update products set price = '15000' where id_prod = '1015';

-- select * from change_price ;



-- -- FullText INDEX
-- CREATE FULLTEXT INDEX NameProd_IDX ON Products(Descriptions);
-- Select *from products where match(Descriptions) against("Ngon" in natural language mode);

-- ALTER TABLE shippers
-- DROP INDEX name_shipper;

-- CREATE FULLTEXT INDEX index_shippers ON shippers(name_shipper);
-- Select * from shippers where match(name_shipper) against("Chu" in natural language mode);  .
