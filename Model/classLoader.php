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

    // public static function addClass(PDO $PDO, string $className, string $location, string $teacherName)
    // {
    //     $handler = $PDO->query('')
    // }


}