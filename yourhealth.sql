CREATE TABLE Accounts (   
     userid int NOT NULL AUTO_INCREMENT,
     firstname varchar(50) NOT NULL,   
     lastname varchar(500) NOT NULL,  
     gender char(1) NOT NULL, 
     email varchar(30) NOT NULL UNIQUE,
     password varchar(100) NOT NULL,
     bdate varchar(50) NOT NULL,
     address varchar(500)NOT NULL,
     usertype char(1) NOT NULL,
     status varchar(100) NOT NULL,
     PRIMARY KEY (userid),
     date timestamp
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

