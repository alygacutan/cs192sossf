/*
Code History
v1.0 - Jan 28, 2019 - Initial file with CREATE TABLE statements [Daine Daling]
v1.1 - Jan 29, 2019 - Added INSERT INTO statements [Daine Daling]
*/

/*
File Creation Date: Jan 28, 2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: This file creates and partially populates the database for the SOSSF project
*/

CREATE TABLE Student (
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  affiliation VARCHAR(100),
  creationDate DATE,
  PRIMARY KEY (username)
);

CREATE TABLE EstablishmentRepresentative (
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  creationDate DATE,
  PRIMARY KEY (username)
);

CREATE TABLE Establishment (
  establishmentID BIGINT NOT NULL,
  name VARCHAR(250) NOT NULL,
  location VARCHAR(250) NOT NULL,
  tags VARCHAR(250),
  businessHours VARCHAR(100),
  contactNo VARCHAR(100),
  lastUpdate DATE,
  status SMALLINT,
  username VARCHAR(100),
  PRIMARY KEY (establishmentID,name),
  FOREIGN KEY (username) REFERENCES EstablishmentRepresentative(username)
);

CREATE TABLE Admin (
  adminID INT NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

INSERT INTO Student VALUES("student_test1","student1","student1@test.com","testpass","none","");
INSERT INTO EstablishmentRepresentative VALUES("estrep_test1","estrep1","estrep1@test.com","testpass","");
INSERT INTO EstablishmentRepresentative VALUES("estrep_test2","estrep2","estrep2@test.com","testpass","");
INSERT INTO Admin VALUES(1,"daine","dainedaling@gmail.com","password");
INSERT INTO Establishment VALUES(1,"est_test1","est1","UP Diliman","printing, photocopy","8am to 5pm","09995551234","","1","estrep_test1");
INSERT INTO Establishment VALUES(2,"est_test2","est2","UP Village","books","9am to 7pm","09154444321","","0","estrep_test2");
