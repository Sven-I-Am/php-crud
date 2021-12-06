DROP TABLE IF EXISTS Teacher;
CREATE TABLE Teacher (
     Name varchar(255) NOT NULL,
     Email varchar(255),
     PRIMARY KEY (Name)
);

INSERT INTO Teacher(Name, Email) VALUES ('Tim Broos', 'tim.broos@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Ludovic Patho', 'ludovic.patho@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Arnaud Duchemin', 'arnaud.uchemin@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Nicolas Jamar', 'nicolas.jamar@becode.org');


DROP TABLE IF EXISTS Class;
CREATE TABLE Class (
     Name varchar(255) NOT NULL,
     Location varchar(255) NOT NULL,
     Teacher varchar(255),
     PRIMARY KEY (Name),
     FOREIGN KEY (Teacher) REFERENCES Teacher(Name)
);

DROP TABLE IF EXISTS Student;
CREATE TABLE Student (
   Name varchar(255) NOT NULL,
   Email varchar(255) NOT NULL,
   Class varchar(255),
   PRIMARY KEY (Name),
   FOREIGN KEY (Class) REFERENCES Class(Name)
);

