CREATE TABLE Account (   

     firstname varchar(50) NOT NULL,   
     lastname varchar(500) NOT NULL,  
     gender char(1) NOT NULL, 
     email varchar(30) NOT NULL UNIQUE,
     password varchar(100) NOT NULL,
     bdate varchar(50) NOT NULL,
     address varchar(500)NOT NULL
)
     ENGINE=InnoDB DEFAULT CHARSET=latin1;