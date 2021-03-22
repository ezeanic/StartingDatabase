CREATE DATABASE IF NOT EXISTS books;
USE books;

DROP TABLE IF EXISTS customers;

CREATE TABLE customers
(CustomerID int,
 Name varchar(40),
 Address varchar(40),
 City varchar(40),
 PRIMARY KEY (CustomerID)
);

INSERT INTO customers VALUES(1,'Julie Smith','25 Oak Street','Airport West');
INSERT INTO customers VALUES(2,'Alan Wong', '1/47 Haines Avenue','Box Hill');
INSERT INTO customers VALUES(3,'Michelle Arthur', '357 North Road','Varraville');

DROP TABLE if EXISTS books;

CREATE TABLE books
(ISBN char(13),
 Author varchar(40),
 Title varchar(40),
 Price varchar(5),
 PRIMARY KEY (ISBN)
);

INSERT INTO books VALUES('0-672-31509-2','Pruitt, et al.','Teach Yourself GIMP in 24 Hours','24.99');
INSERT INTO books VALUES('0-672-31697-8','Michael Morgan.','Java 2 for professional Developers','34.99');
INSERT INTO books VALUES('0-672-31745-1','Thomas Down','Installing Debian GNU/Linux','24.99');
INSERT INTO books VALUES('0-672-31769-9','Thomas Schenk','Caldera OpenLinux System Administration Unleashed','49.99');

DROP TABLE IF EXISTS orders;

CREATE TABLE orders
(OrderID int,
 CustomerID int,
 Amount varchar(40),
 DateOccur varchar(40),
 PRIMARY KEY (OrderID),
 FOREIGN KEY (CustomerID) REFERENCES customers(CustomerID)
);

INSERT INTO orders VALUES(1,3,'69.98','2007-04-02');
INSERT INTO orders VALUES(2,1,'49.99','2007-04-15');
INSERT INTO orders VALUES(3,2,'74.98','2007-04-19');
INSERT INTO orders VALUES(4,3,'24.99','2007-05-01');

DROP TABLE IF EXISTS book_reviews;

CREATE TABLE book_reviews
(ISBN char(13),
 Review varchar(500),
 PRIMARY KEY (ISBN),
 FOREIGN KEY (ISBN) REFERENCES books(ISBN)
);

INSERT INTO book_reviews VALUES('0-672-31697-8','The Morgan book is clearly written and goes well beyond most of the basic Java books out there.');

DROP TABLE IF EXISTS order_items;

CREATE TABLE order_items(
 OrderID int,
 ISBN char(13),
 Quantity int,
 FOREIGN KEY (OrderID) REFERENCES orders(OrderID),
 FOREIGN KEY (ISBN) REFERENCES books(ISBN)
);

INSERT INTO order_items VALUES(1,'0-672-31697-8',2);
INSERT INTO order_items VALUES(2,'0-672-31769-9',1);
INSERT INTO order_items VALUES(3,'0-672-31509-2',1);
INSERT INTO order_items VALUES(3,'0-672-31769-9',1);
INSERT INTO order_items VALUES(4,'0-672-31745-1',3);