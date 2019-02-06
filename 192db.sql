CREATE TABLE Student (
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  affiliation VARCHAR(100),
  creationDate DATE NOT NULL,
  PRIMARY KEY (username)
);

CREATE TABLE EstablishmentRepresentative (
  username VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  creationDate DATE NOT NULL,
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
