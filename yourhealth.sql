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
     avatar varchar(255) NOT NULL,
     PRIMARY KEY (userid),
     date timestamp
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  CREATE TABLE Appointment (
    appointmentid int NOT NULL AUTO_INCREMENT,
    Department varchar(50) NOT NULL,
    email varchar(30) NOT NULL,
    Message varchar(200) NOT NULL,
    Doctor varchar(50) NOT NULL,
    Status varchar(50) NOT NULL,
    PRIMARY KEY (appointmentid),
    date timestamp
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
