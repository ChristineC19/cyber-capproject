Summary:

This document gives a brief description of the tasks involved in ensuring that the client can use the website and understands both the software, hardware, and connectivity.  The website will add efficiency for Quick Storage and for their customers.  This is the first stage of moving online and further enhancements are encouraged to streamline processes and to make them secure around payment information and customer account details. 

The project has opened opportunities up to the client, ensuring customer retention and better management of the facility whilst allowing them to increase their portfolio of storage units at a future date. 

The Team have been testing the software successfully and are documenting any issues which need to be addressed.  They are not only embracing it, they as a team are brainstorming new ideas to make it work for their roles in a more productive way.  
 
 

Technologies 
The database is a MYSQL database and this username and password for this will be documented in the appendix of this document.   The database is a structural view of the transactions that are occurring, it consists of many tables from customers to units, bookings, payments, and admin access. 
This database sits in the background on a server, in this instance it’s a windows 2019  server.    This server is not public facing.  
MYSQL has a service running in the background, this seems to have crashed on me a few times and the connection back to the database from XAMPP doesn’t work. -  Note:  I’ve had to restart this a couple of times, it  is located in the services app on the laptop/server  
 

The website is public facing server, in this instance we are using Apache via XAMPP to make the connection between the website and database.    The website is customer driven to accommodate the customers accessing their accounts and booking units when they need them.    The website has both an admin portal and a customer login.      For Admin details see below. 
The main website is accessible at  http://localhost/cap-project/index.html  
and the admin portal is accessible at http://localhost/cap-project/admin/loginadmin.php

The website is dependent on XAMPP being connected for all the functionality to work . 
XAMPP is downloadable from and I am currently working with V.3.3.0 
XAMPP Installers and Downloads for Apache Friends 

XAMPP automatically downloads to the C:\ and it’s the htdocs folder within xampp where the project needs to reside  C:\xampp\htdocs\cap-project 

 
 

Apache needs to connect to the database and is reliant on the MYSQL connection details to make that connection.    
 
Tasks

Active Customers on System
Two accounts have been setup as part of the database creations.  These accounts have passwords and bookings on their accounts. 
See appendix 3 for account information  

Register Customer Account 

A customer has the option of creating an account on-line giving them the flexibility of managing their books and making payments.   
Registering the account takes three steps 
1.	 Register your details
2.	 Take a facial Image
3.	 Upload photo ID for verification
a.	Submit 

Until the account is verified, they are unable to sign in or make bookings.   The verification is done through the admin portal where it is approved. 

Make a Booking
The customer can make a booking and check the availability of units.   They can view their bookings on their account page.  Bookings cannot be made online without an account. 
The Booking process has a three of steps once the customer is logged into their account. 
1.	Check Availability
2.	Select the Unit
3.	Make a Payment  
a.	Submit

Change Password

Customers can change their password through via their customer account page or if they’ve forgotten it, they can change it on with the ‘Forgot Password’ option on the Login Page. 
With the ‘Forgot Password’ they need to also enter their ‘Secret’ word. 

Login as Admin 

The admin can view the dashboard of all customer bookings against the units with the start and end dates, they also can see the quantity of accounts which are waiting to be verified.   
See appendix 2 for Admin details 
Verify Account
The verify account is a manual process of verifying the facial image with the ID upload to approve that the account can be used.   Once approve they would notify the customer, who can then proceed with booking units. 

 

Appendices:

Appendix 1:  MYSQL

MySQL is free database software and connection details are set out as. 
Username: Root
Password: Blanch15
Hostname: 127.0.0.1  port: 3306	 

Appendix 2:  Admin Portal 

The main account on the Admin Portal is 
Username Christine 
Password Belle 22 
Access is via http://localhost/cap-project/admin/loginadmin.php

Appendix 3:  User Account already created

 
The following account is already set up on the system with booking information attached
Username: siobhankenzie@gmail.com
Password: Sienna@99 
