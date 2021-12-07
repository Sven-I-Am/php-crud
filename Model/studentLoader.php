<?php
//
class StudentLoader
{
    public static function getAllStudents(PDO $PDO): array
    {
        $handler = $PDO->query('SELECT * FROM student');
        $allStudents= $handler->fetchAll(); //this is an array
        $students=[];
        foreach ($allStudents as $student){
            $student["ClassName"] = self::getClassName($PDO, $student["Class"]);
            array_push($students, $student);
        }
        return $students;
    }

    public static function getStudent(PDO $PDO, int $id){
        $handler = $PDO->query('SELECT * FROM student WHERE ID = ' . $id);
        $student = $handler->fetchAll(); //this is an array
        $student[0]["ClassName"] = self::getClassName($PDO, $student[0]["Class"]);
        return $student;
    }

    public static function addStudent(PDO $PDO, string $name, string $email, int $class)
    {
        $handler = $PDO->query('INSERT INTO student(Name, Email, Class) VALUES ("'. $name . '", "' . $email . '", ' . $class . ')');
    }

    public static function deleteStudent(PDO $PDO, int $id)
    {
        $handler = $PDO->query('DELETE FROM student WHERE ID = '. $id);
    }

    public static function editStudent(PDO $PDO, int $id, string $name, string $email, int $class)
    {
        $handler = $PDO->query('UPDATE student SET ID=' . $id . ', Name="' . $name . '", Email="' . $email . '", Class=' . $class . ' WHERE ID=' . $id);
        return $handler->fetchAll(); //this is an array
    }

    public static function getClassName(PDO $PDO, int $classID)
    {
        $handler = $PDO->query('SELECT Name FROM class WHERE ID = ' . $classID);
        $className= $handler->fetchAll(); //this is an array
        return $className[0]["Name"];
    }
}