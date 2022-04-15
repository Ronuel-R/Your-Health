CREATE TABLE Chat (   
     Id int NOT NULL , email varchar(255) not null, recipient varchar(255) not null,
     message text, date timestamp
)
     ENGINE=InnoDB DEFAULT CHARSET=latin1;