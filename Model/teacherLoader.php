<?php
//
class TeacherLoader
{
    public static function getAllTeachers(PDO $PDO): array
    {
        $handler = $PDO->query('SELECT * FROM teacher');
        $allTeachers= $handler->fetchAll(); //this is an array
        $teachers = [];
        foreach ($allTeachers as $teacher){
            array_push($teachers, $teacher);
        }
        return $teachers;
    }

    public static function getTeacher(PDO $PDO, int $id){
        $handler = $PDO->query('SELECT * FROM teacher WHERE ID = ' . $id);
        return $handler->fetchAll();
    }
    public static function addTeacher(PDO $PDO, string $name, string $email)
    {
        $handler = $PDO->query('INSERT INTO teacher(Name, Email) VALUES ("'. $name . '", "' . $email . '")');
    }

    public static function deleteTeacher(PDO $PDO, int $id)
    {
        $handler = $PDO->query('DELETE FROM teacher WHERE ID = '. $id);
    }

    public static function editTeacher(PDO $PDO, int $id, string $name, string $email)
    {
        $handler = $PDO->query('UPDATE teacher SET ID=' . $id . ', Name="' . $name . '", Email="' . $email . '" WHERE ID=' . $id);
        return $handler->fetchAll(); //this is an array
    }

    public static function getTeacherId(PDO $PDO, int $id)
    {
        $handler = $PDO->query('SELECT ID FROM teacher WHERE ID = ' . $id);
        $teacherId= $handler->fetchAll(); //this is an array
        return $teacherId[0]["ID"];
    }

    public static function getTeacherName(PDO $PDO, int $id)
    {
        $handler = $PDO->query('SELECT Name FROM teacher WHERE ID = ' . $id);
        $teacherName= $handler->fetchAll(); //this is an array
        return $teacherName[0]["Name"];
    }
    public static function getTeacherEmail(PDO $PDO, int $id)
    {
        $handler = $PDO->query('SELECT Email FROM teacher WHERE ID = ' . $id);
        $teacherEmail = $handler->fetchAll(); //this is an array
        return $teacherEmail[0]["Name"];
    }

}