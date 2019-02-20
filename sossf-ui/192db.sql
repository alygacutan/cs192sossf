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
v2.0 - Feb 20, 2019 - Added User View, added ID columns for Student and EstablishmentRepresentative
v2.1 - Feb 21, 2019 - Added new entries, modified Establishment table (removed foreign key constraint)
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
  creationDate DATE,
  PRIMARY KEY (studentID,username)
);

/* Table for registered Establishment Representative users */
CREATE TABLE EstablishmentRepresentative (
  estrepID INT NOT NULL,
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  creationDate DATE,
  PRIMARY KEY (estrepID,username)
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
);

/* Table for Admin users */
CREATE TABLE Admin (
  adminID INT NOT NULL,
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (adminID,username)
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
INSERT INTO Student VALUES(1,"ddaling","Daine Daling","ddaling@up.edu.ph","testpass","");
INSERT INTO EstablishmentRepresentative VALUES(1,"ksantos","Kenneth Santos","kenneth@up.edu.com","testpass","");
INSERT INTO Admin VALUES(1,"agacutan","Aly Gacutan","alyg@up.edu.ph","password");
INSERT INTO Establishment VALUES(1,"Daine Store","NIGS, UP Diliman","Daine is cute","Grocery","24 hours","09454685149","",0,"ddaling");
INSERT INTO Establishment VALUES(2,"Kenneth Store","DCS, UP Diliman","Kenneth Store offers affordable food","Restaurant","9am to 7pm","09154444321","",0,"ksantos");
INSERT INTO Establishment VALUES(3,"Aly Store","Area 2, UP Diliman","Aly Store offers affordable printing and photocopy","printing, photocopy","8am to 5pm","09995551234","",0,"agacutan");
INSERT INTO EstablishmentRepresentative VALUES(2,"wmtan","KuyaWil","wmtan@dcs.upd.edu.ph","kuyawil","");
INSERT INTO Establishment VALUES(4,"Wilson Pharmacy","Krus na Ligas, Diliman","Alternative medicine","Drugstore","24 hours","09166611666","",1,"wmtan");
INSERT INTO Establishment VALUES(5,"Kuya Wil Supplies","Krus na Ligas, Diliman","Affordable school supplies","School Supplies","7am to 9pm","09166611666","",1,"wmtan");
