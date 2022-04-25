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
