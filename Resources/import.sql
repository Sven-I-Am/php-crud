DROP TABLE IF EXISTS Teacher;
CREATE TABLE Teacher (
     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     Name varchar(255) NOT NULL,
     Email varchar(255)
);

DROP TABLE IF EXISTS Class;
CREATE TABLE Class (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL,
    Location varchar(255) NOT NULL,
    Teacher INT UNSIGNED,
    FOREIGN KEY (Teacher) REFERENCES Teacher(ID) ON DELETE RESTRICT ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Student;
CREATE TABLE Student (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Class INT UNSIGNED,
    FOREIGN KEY (Class) REFERENCES Class(ID) ON DELETE RESTRICT ON UPDATE CASCADE
);

INSERT INTO Teacher(Name, Email) VALUES ('Unasigned', ' ');
INSERT INTO Teacher(Name, Email) VALUES ('Tim Broos', 'tim.broos@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Ludovic Patho', 'ludovic.patho@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Arnaud Duchemin', 'arnaud.uchemin@becode.org');
INSERT INTO Teacher(Name, Email) VALUES ('Nicolas Jamar', 'nicolas.jamar@becode.org');

INSERT INTO Class(Name, Location, Teacher) VALUES ('Unasigned', ' ', 1);
INSERT INTO Class(Name, Location, Teacher) VALUES ('Lamarr', 'Antwerpen', 2);
INSERT INTO Class(Name, Location, Teacher) VALUES ('Jepsen', 'Liege', 5);
INSERT INTO Class(Name, Location, Teacher) VALUES ('Keller', 'Charleroi', 4);
INSERT INTO Class(Name, Location, Teacher) VALUES ('Swartz', 'Brussel', 3);

INSERT INTO student (Name, Email, Class) values ('Katya Heylen', 'katyaheylen@gmail.com', 1);
INSERT INTO student (Name, Email, Class) values ('Sven Vander Mierde', 'sven.vander.mierde@gmail.com', 1);
INSERT INTO student (Name, Email, Class) values ('Stefan Amuraritei', 'stefan@gmail.com', 2);
INSERT INTO student (Name, Email, Class) values ('Prince Prince', 'prince@yahoo.com', 4);
INSERT INTO student (Name, Email, Class) values ('Pokemon Pokemonovich', 'pokemon@gmail.com', 3);
