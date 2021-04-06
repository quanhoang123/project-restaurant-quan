drop database if  exists group_restaurant;
create database group_restaurant;
use group_restaurant;

create table if not exists wedding_img(
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
status int(11) DEFAULT NULL,
PRIMARY KEY (id)
 );

INSERT INTO wedding_img values 	(1,'Tôm Nướng','img/wedding/tom.jpg','',200000,0),
							(2,'Fruit','img/wedding/fruit.jpg','',200000,0),
                            (3,'Mâm Cưới','img/wedding/mâm.jpg','',200000,0);
                            


-- -----------------------------
-- table for image:
-- -----------------------------


Create table  image_member(
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
       
CREATE table  image_slider (
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
CREATE TABLE   admin (
id INT(11) NOT NULL,
username VARCHAR(50) DEFAULT NULL,
password VARCHAR(50) DEFAULT NULL,
avatar varchar(50) default null,
PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
INSERT INTO admin
VALUES 	(1, 'mylishop', '8A86E1AAF7327885729E5B450841FEF6',''),
		(2,'trungquanidol','q!uan1211',''),
        (3,'thidiemidol','vingoc1211',''),
        (4,'ngocviidol','d!iem1211',''),
        (5,'hungvuongidol','vuong!1211','');

select * from admin;
create table employees(
id_employeer int primary key,
name_employeer varchar(60),
    gender varchar(5),
    address varchar(100),
    phone varchar(11),
    salary decimal(10,2)
);
insert into employees
values (1,'Nguyen Doan Ngoc Hau','Nu','Hai Lang- Quang Tri',12000123,6000000),
(2,'Nguyen Dinh Long','Nam','Dinh-10 Quang Binh',111112,3000000),
(3,'Nguyen Ngoc Pha','Nam','Quang Nam',111113,5000000),
(4,'Le Ngoc Vi','Nam','Binh Dinh',111114,5000000),
(5,'Le Hong Hanh','Nu','Tuyen Hoa- Quang Tri',111115,4000000),
(6,'Ho Thi Nhu Quynh','Nu','Quang Tri',111116,4000000);
create table  users(
id_user int primary key,
    fullname varchar(60),
    user_name varchar(255),
    password char(11),
    gender char(5),
    email varchar(50),
    phone char(11),
    role int(11) not null default '0',
    address varchar(100)
);

insert into users
value (100,'Nguyen Van Hung','hungvon123','h!ung1211','Nam','hung100@gmail.com',100110,'Le Thuy- Quang Binh',1),
(101,'Nguyen Son Nam','nam123','nam!1211','Nam','Nam101@gmail.com',100111,'Vinh linh - Quang Tri',1);

select * from users;



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
id_prodCate int primary key auto_increment,
    product_Category_Name varchar(100),
id_vendor int,
    foreign key (id_vendor) references Vendor(id_vendor)
);
insert into Product_category values (1,'New Product',2),
(2,'Drinks',3),
(3,'Product Discount',4),
                                    (4,'Room',1);
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



create table products(
	id_newProd int primary key auto_increment,
    name_newProd varchar(100),
	id_prodCate int, -- id thể loái sản phầm
	image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    price decimal(10,2) not null,
    quantity int,
    Descriptions varchar(250), -- mô tả sản phẩm
status int(11) DEFAULT NULL,
    foreign key (id_prodCate) references Product_category(id_prodCate)
);
insert into products values
(1,'Ba Ba',1,'img/img-product/baba.jpg','',100000,'2020-1-21',1),
(2,'Ga Luoc',1,'img/img-product/galuoc.png','',150000,'2020-03-05',1),
(3,'Cua Hoang De',1,'img/img-product/cuahoangde.jpg','',150000,'2020-03-05',1),
(4,'Ca Mú Hấp',1,'img/img-product/camuhap.jpg','',700000,'2020-05-11',1),
(5,'Cá',2,'img/img-product/ganuong.jpg','',100000,'2020-05-12',1),
(6,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',1),
(7,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',1),
(8,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',1),
(9,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',1),
(10,'Ga Nuong',1,'img/img-product/ganuong.jpg','',500000,'2020-05-14',1);


-- -----------------------------
-- table for products:
-- -----------------------------
CREATE TABLE  discount_product (
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
(1,'Ba Ba',1,'img/img-product/baba.jpg','',120000,100000,'2020-1-21',20,1),
(2,'Ga Luoc',1,'img/img-product/galuoc.png','',200000,150000,'2020-03-05',23,1),
(3,'Cua Hoang De',1,'img/img-product/cuahoangde.jpg','',200000,150000,'2020-03-05',23,1),
(4,'Ca Mú Hấp',1,'img/img-product/camuhap.jpg','',1000000,700000,'2020-05-11',20,1),
(5,'Cá',2,'img/img-product/honhop.jpg','',200000,100000,'2020-05-12',20,1),
(6,'Ga Nuong',1,'img/img-product/ganuong.jpg','',600000,500000,'2020-05-14',40,1);

-- -----------------------------
-- table for rooms:
-- -----------------------------

CREATE TABLE room_restaurant(
id_room int NOT NULL AUTO_INCREMENT primary key,
name_room varchar(255) COLLATE utf8_unicode_ci NOT NULL,
category_id int(11) NOT NULL,
image_room varchar(255) COLLATE utf8_unicode_ci NOT NULL,
description text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
price float NOT NULL,
quantity_person int(11) NOT NULL,
status int(11) DEFAULT NULL,
FOREIGN KEY (category_id) REFERENCES Product_category(id_prodCate)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34;
INSERT INTO room_restaurant values (1,'room',4,'img/img-room/room1.jpg','',100000,20,1),
(2,'room1',4,'img/img-room/room2.jpg','',100000,'2020-1-21',20,1),
                            (3,'room2',4,'img/img-room/room3.jpg','',100000,20,1),
                            (4,'room3',4,'img/img-room/room4.jpg','',100000,20,1),
                            (5,'room4',4,'img/img-room/room5.jpg','',100000,20,1),
                            (6,'room5',4,'img/img-room/room6.jpg','',100000,20,1);

select * from room_restaurant;



CREATE TABLE room_interface(
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

CREATE TABLE orders (
    id_order INT PRIMARY KEY,
    id_user INT,
    total_money DECIMAL(10 , 2 ),
    id_product int,
	id_room int,
    FOREIGN KEY (id_newProd) REFERENCES products(id_newProd),
    FOREIGN KEY (id_product) REFERENCES discount_product(id_product),
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_room) REFERENCES room_restaurant(id_room)
);

-- tạo bảng giỏ hàng
create table carts(
id_cart int auto_increment primary key,
    total decimal(10,2) not null,
    date_time datetime, -- địa chỉ giao hàng
    id_order int,
	id_dis_prod INT,
    id_newProd int,
    id_room int,
	foreign key (id_order) references orders(id_order),
    FOREIGN KEY (id_newProd) REFERENCES products(id_newProd),
    FOREIGN KEY (id_dis_prod) REFERENCES discount_product(id_product),
	FOREIGN KEY (id_room) REFERENCES room_restaurant(id_room)
);  

-- Tạo bảng hóa đơn
create table bills(
	id_bill int primary key auto_increment,
    id_employ int,
    id_user int,
    id_carts int, -- id giỏ hàng
    total DECIMAL(10 , 2 ),
	id_dis_prod INT,
    id_newProd int,
    id_room int,
    foreign key (id_employ) references employees(id_employeer),
    foreign key (id_user) references users(id_user),
    foreign key (id_carts) references carts(id_cart),
    FOREIGN KEY (id_newProd) REFERENCES products(id_newProd),
    FOREIGN KEY (id_dis_prod) REFERENCES discount_product(id_product),
	FOREIGN KEY (id_room) REFERENCES room_restaurant(id_room)
);  

