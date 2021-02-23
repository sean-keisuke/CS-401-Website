-- CREATE TABLE users (
--     id int not null AUTO_INCREMENT,
--     user_id int not null AUTO_INCREMENT,
--     user_name varchar(50) not null,
--     password varchar(50) not null,
--     date timestamp, 
--     primary key (id)
-- );
    
-- CREATE TABLE comments (
--     CommentID int not null AUTO_INCREMENT,
--     UserID bigint(20) not null,
--     CommentContent varchar(500),
--     TimePosted timestamp,
--     pageID int,
--     PRIMARY KEY (CommentID),
--     FOREIGN KEY (pageID) REFERENCES ContentPage(pageID),
--     FOREIGN KEY (UserID) REFERENCES users(id)
-- );

-- CREATE TABLE ContentPage (
--     pageID int not null AUTO_INCREMENT,
--     PageName varchar(50) not null,
--     content varchar(8000),
--     PRIMARY KEY (pageID)
-- );

-- create table products (
-- 	productID int not null auto_increment,
--     productTitle varchar(200) not null,
--     productDescription varchar(8000),
--     productReview varchar(8000),
    
--     primary key (productID)
-- );

-- create table guitarCenterProduct (
-- 	   GCProductID int not null auto_increment,
--     productTitle varchar(200) not null,
--     productPrice DECIMAL(10,2),
--     productURL varchar(1000) not null,
--     productID int not null,
--     primary key (GCProductID),
--      FOREIGN KEY (productID) REFERENCES products(productID)
-- );

-- create table amazonProduct (
-- 	AZProductID int not null auto_increment,
--     productTitle varchar(200) not null,
--     productPrice DECIMAL(10,2),
--     productURL varchar(1000) not null,
--     productID int not null,
--     primary key (AZProductID),
--      FOREIGN KEY (productID) REFERENCES products(productID)
-- );

-- create table loneStarProduct (
-- 	LSProductID int not null auto_increment,
--     productTitle varchar(200) not null,
--     productPrice DECIMAL(10,2),
--     productURL varchar(1000) not null,
--     productID int not null,
--     primary key (LSProductID),
--      FOREIGN KEY (productID) REFERENCES products(productID)
-- );

-- create table steveWeissProduct (
-- 	SWProductID int not null auto_increment,
--     productTitle varchar(200) not null,
--     productPrice DECIMAL(10,2),
--     productURL varchar(1000) not null,
--     productID int not null,
--     primary key (SWProductID),
--      FOREIGN KEY (productID) REFERENCES products(productID)
-- );
