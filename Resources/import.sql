DROP TABLE IF EXISTS Student;
CREATE TABLE Student (
   Name varchar(255) NOT NULL,
   Email varchar(255) NOT NULL,
   Class varchar(255),
   PRIMARY KEY (Name),
   FOREIGN KEY (Class) REFERENCES Class(Name)
);

DROP TABLE IF EXISTS Teacher;
CREATE TABLE Teacher (
     Name varchar(255) NOT NULL,
     Email varchar(255),
     PRIMARY KEY (Name)
);

DROP TABLE IF EXISTS Class;
CREATE TABLE Class (
     Name varchar(255) NOT NULL,
     Location varchar(255) NOT NULL,
     Teacher varchar(255),
     PRIMARY KEY (Name),
     FOREIGN KEY (Teacher) REFERENCES Teacher(Name)
);