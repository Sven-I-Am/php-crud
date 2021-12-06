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

INSERT INTO Class(Name, Location, Teacher) VALUES ('Lamarr', 'Antwerpen', 'Tim Broos');
INSERT INTO Class(Name, Location, Teacher) VALUES ('Jepsen', 'Liege', 'Nicolas Jamar');
INSERT INTO Class(Name, Location, Teacher) VALUES ('Keller', 'Charleroi', 'Arnaud Duchemin');
INSERT INTO Class(Name, Location, Teacher) VALUES ('Swartz', 'Brussel', 'Ludovic Patho');

DROP TABLE IF EXISTS Student;
CREATE TABLE Student (

   Name varchar(255) NOT NULL,
   Email varchar(255) NOT NULL,
   Class varchar(255),
   PRIMARY KEY (Name),
   FOREIGN KEY (Class) REFERENCES Class(Name)
);

INSERT INTO student (name, email, class) values ('Katya Heylen', 'katyaheylen@gmail.com', 'Lamarr');
INSERT INTO student (name, email, class) values ('Sven Vander Mierde', 'sven.vander.mierde@gmail.com', 'Lamarr');
INSERT INTO student (name, email, class) values ('Stefan Amuraritei', 'stefan@gmail.com', 'Jepsen');
INSERT INTO student (name, email, class) values ('Prince Prince', 'prince@yahoo.com', 'Swartz');
INSERT INTO student (name, email, class) values ('Pokemon Pokemonovich', 'pokemon@gmail.com', 'Keller');
