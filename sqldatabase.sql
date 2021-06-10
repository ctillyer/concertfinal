create table productCategories (
    categoryId int(15) unsigned auto_increment primary key,
    eventType varchar(20),
    genre varchar(20)
);

CREATE TABLE user (
  userID int(11) unsigned auto_increment primary key not null,
  accountName varchar(40),
  phone varchar(13),
  email varchar(30),
  password varchar(20),
  firstName varchar(15),
  lastName varchar(15),
  country varchar(20),
  postcode varchar(7),
  firstLineAddress varchar(20),
  secondLineAddress varchar(20)
);

CREATE TABLE product (
    productId int(20) unsigned auto_increment not null primary key,
    productName varchar(50),
    categoryId int(20) unsigned not null,
    FOREIGN KEY (categoryId) REFERENCES productCategories(categoryId)
);

CREATE TABLE orders (
  orderId int(15) unsigned auto_increment not null primary key,
  userId int(11) unsigned not null,
  orderNumber varchar(10) not null,
  productId int(20) unsigned not null,
  orderDate datetime,
  orderTrackingNo varchar(30),
  orderPrice decimal,
  productReceival varchar(10),
  FOREIGN KEY (userId) REFERENCES user(userId),
  FOREIGN KEY (productId) REFERENCES user(product)
);