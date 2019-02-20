/*
MIT License

Copyright (c) 2019 Daine Daling

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

This is a course requirement for CS 192 Software Engineering II under the 
supervision of Asst. Prof. Ma. Rowena C. Solamo of the Department of Computer 
Science, College of Engineering, University of the Philippines, Diliman for 
the AY 2018-2019
*/

/*
Code History
v1.0 - Jan 28, 2019 - Initial file with CREATE TABLE statements [Daine Daling]
v1.1 - Jan 29, 2019 - Added INSERT INTO statements [Daine Daling]
v1.2 - Feb 8, 2019 - Added comments and other code information
v2.0 - Feb 20, 2019 - Added Users View
*/

/*
File Creation Date: Jan 28, 2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: This file creates and partially populates the database for the SOSSF project
*/

/* Table for registered Student users */
CREATE TABLE Student (
  studentID INT NOT NULL,
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  affiliation VARCHAR(100),
  creationDate DATE,
  PRIMARY KEY (username,userID)
);

/* Table for registered Establishment Representative users */
CREATE TABLE EstablishmentRepresentative (
  estrepID INT NOT NULL,
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  creationDate DATE,
  PRIMARY KEY (username,estrepID)
);

/* Table for Establishments */
CREATE TABLE Establishment (
  establishmentID BIGINT NOT NULL AUTO_INCREMENT,
  name VARCHAR(250) NOT NULL,
  location VARCHAR(250) NOT NULL,
  services VARCHAR(250),
  tags VARCHAR(250),
  businessHours VARCHAR(100),
  contactNo VARCHAR(100),
  lastUpdate DATE,
  status SMALLINT,
  username VARCHAR(100),
  PRIMARY KEY (establishmentID,name),
  FOREIGN KEY (username) REFERENCES EstablishmentRepresentative(username)
);

/* Table for Admin users */
CREATE TABLE Admin (
  adminID INT NOT NULL,
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (adminID, username)
);

CREATE VIEW User AS
SELECT studentID as userID,
  username,
  password
FROM Student
UNION ALL
SELECT estrepID as userID,
  username,
  password
FROM EstablishmentRepresentative
UNION ALL
Select adminID as userID,
  username,
  password
FROM Admin;

/* The following statements are for sample input used for Sprint 1 */
INSERT INTO Student VALUES("student_test1","student1","student1@test.com","testpass","none","");
INSERT INTO EstablishmentRepresentative VALUES("estrep_test1","estrep1","estrep1@test.com","testpass","");
INSERT INTO EstablishmentRepresentative VALUES("estrep_test2","estrep2","estrep2@test.com","testpass","");
INSERT INTO Admin VALUES(1,"daine","dainedaling@gmail.com","password");
INSERT INTO Establishment VALUES(1,"est_test1","est1","UP Diliman","printing, photocopy","8am to 5pm","09995551234","","1","estrep_test1");
INSERT INTO Establishment VALUES(2,"est_test2","est2","UP Village","books","9am to 7pm","09154444321","","0",NULL);
