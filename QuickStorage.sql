DROP DATABASE quickstorage;
CREATE DATABASE QuickStorage;
	
use QuickStorage;
CREATE TABLE `staff` (
  `staffid` int AUTO_INCREMENT,
  `stname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stpass` varchar(25) NOT NULL,
  `dept` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffid`)
);	

Insert into staff ( stname, login,  email,  stpass, dept)
values ( 'John BonJovi', 'JBonjovi',   'johnbonjovi@quickstorage.ie',  'LivingPr@y3r', 'Accounts' ), ( 'Taylor Swift', 'tswift', 'taylorswift@quickstorage.ie',  'shak3!tout', 'Reception');


Use QuickStorage;	
Create TABLE `StorageUnit` (
	UnitID int AUTO_INCREMENT,
	UnitSize varchar(25),
    UnitPrice float,
	
    	
	PRIMARY KEY (Unitid)	
);

/* Add Multiple Size Units for Rent*/
Use QuickStorage;
insert into StorageUnit (UnitSize, UnitPrice )
values
(25, 35), (50, 70);


Use QuickStorage;
Create Table `Customer` (
	CustomerID int AUTO_INCREMENT,
    Firstname varchar(30),
    Surname varchar(35),
    ContactNumber varchar(15),
    email varchar(35),
    address varchar(100),
    userpass varchar(256),
    secret varchar(25),
    isverified varchar(25),
    webphoto varchar(100),
    idphoto varchar(100),
    primary key (CustomerID)
    );

Insert into Customer ( firstname, surname,  contactNumber, email, address,  userpass, secret, isverified)
values ( 'siobhan', 'kenzie',  017896543, 'siobhankenzie@gmail.com', '10 the mall, cork', '974cabf0cedbab359c16df6555f65d8f410dbfbe19a7f3c1498e7ba90cc8ae36', 'Pakenham','yes'), ( 'eilish', 'marks',  02645694, 'eilish.marks88@hotmail.com', '45 the downs drogheda',  '81a2a9c1c4e69522a0ce0e93d2a9f6559bb42e91d2d8ec5df62316fc8174a315', 'Wandin','yes');

Use QuickStorage;

Create Table `Admins` (
	AdminID int AUTO_INCREMENT,
    Firstname varchar(30),
    email varchar(35),
    userpass varchar(256),
    primary key (AdminID)
    );
    
Insert into Admins ( Firstname, email, userpass) values ('Christine','christine@gmail.com', '57f54af0dc80d267841f94286c346be43ec829a684861552256f4d8437eafee2');
  Use QuickStorage;
  Create Table `Booking` (
	BookingID int AUTO_INCREMENT,
    BookingDate date,
    BookingStartDate date,
    BookingEndDate date,
    CustomerID int,
    UnitID int,
  
    TotalDays int,
    TotalAmount float,
    
    foreign key(CustomerID)references Customer(CustomerID),
    foreign key(UnitID)references StorageUnit(UnitID),
  
    primary key (BookingID)
    );
  /* Add booking*/
Use QuickStorage;
insert into Booking (BookingDate, BookingStartDate, BookingEndDate, CustomerID, UnitID,  TotalDays, TotalAmount )
values
("2022-07-26", "2022-07-27", "2022-08-02", 2, 1, 7, 100), ("2022-07-26", "2022-09-01", "2022-09-05", 1, 1, 5, 100), ("2022-07-26", "2022-08-27", "2022-08-30", 2, 2, 5, 100);

    SELECT BookingID FROM quickstorage.booking WHERE BookingStartDate="2022-09-01" AND BookingEndDate="2022-09-05" AND UnitID=1;
    
    select * from booking;
   /* select * from payment;*/
    
Use QuickStorage;	
CREATE TABLE `Payment` (
	Paymentid int AUTO_INCREMENT,
	TotalAmount int,
	PaymentDate date,
    BookingID int,
    PaymentConfirmation varchar(20),
    
	foreign key(BookingID)references Booking(BookingID),
	PRIMARY KEY (PaymentID)	
);
select * from booking;
Use QuickStorage;
insert into Payment (TotalAmount, PaymentDate, BookingID, PaymentConfirmation )
values
(100, "2202-07-26", 1, "Confirmed" );
select * from customer;
/*SELECT BookingStartDate, BookingEndDate FROM quickstorage.booking WHERe UnitID=*/