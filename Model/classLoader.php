<?php
class ClassLoader 
{
    public static function getAllClasses(PDO $PDO): array
    {
        $handler = $PDO->query('SELECT * FROM class');
        $allClasses = $handler->fetchAll();
        $classes = [];
        foreach ($allClasses as $eachClass){
            $eachClass["TeacherName"] = self::getTeacherName($PDO, $eachClass["Teacher"]);
            array_push($classes, $eachClass);
        }
        return $classes;

    }

    public static function getClass(PDO $PDO, int $classID)
    {
        $handler = $PDO->query('SELECT * FROM Class WHERE ID = '. $classID);
        $oneClass = $handler->fetchAll();
        $oneClass[0]["TeacherName"] = self::getTeacherName($PDO, $oneClass[0]["Teacher"]);
        return $oneClass;
    }

    public static function getTeacherName(PDO $PDO, int $teacherID)
    {
        $handler = $PDO->query('SELECT Name From Teacher WHERE ID = '. $teacherID);
        $teacherName = $handler->fetchAll();
        return $teacherName[0]["Name"];
    }

    public static function addClass(PDO $PDO, string $className, string $location, int $teacherName)
    {
        $handler = $PDO->query('INSERT INTO class(Name, Location, Teacher) VALUES ("' . $className . '", "' . $location . '", ' . $teacherName . ')');
    }
    
    public static function deleteClass(PDO $PDO, int $classID)
    {
        $handler = $PDO->query('DELETE FROM class WHERE ID = '. $classID);
    }

    public static function editClass(PDO $PDO, int $classID, string $className, string $location, int $teacherName)
    {
        $handler = $PDO->query('UPDATE class SET ID=  '. $classID .' , Name= "' . $className . '", Location="' . $location . '", Teacher=' . $teacherName . ' WHERE ID=' . $classID);
    }
}