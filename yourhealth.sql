CREATE TABLE Unverified_Account (   

     firstname varchar(50) NOT NULL,   
     lastname varchar(500) NOT NULL,  
     gender char(1) NOT NULL, 
     email varchar(30) NOT NULL UNIQUE,
     password varchar(100) NOT NULL,
     bdate varchar(50) NOT NULL,
     address varchar(500)NOT NULL,
     usertype char(1) NOT NULL,
     date timestamp
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Verified_Account (   

     firstname varchar(50) NOT NULL,   
     lastname varchar(500) NOT NULL,  
     gender char(1) NOT NULL, 
     email varchar(30) NOT NULL UNIQUE,
     password varchar(100) NOT NULL,
     bdate varchar(50) NOT NULL,
     address varchar(500)NOT NULL,
     usertype char(1) NOT NULL,
     date timestamp
)
     ENGINE=InnoDB DEFAULT CHARSET=latin1;