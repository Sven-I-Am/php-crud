<?php

declare(strict_types=1);

class classController
{
    private Connection $db;

    //create a new connection based on the database value.
    public function __construct(){
        $this->db = new Connection();
    }

    public function render(array $GET, array $POST)
    {
        //load the view
        switch($_GET["page"]) {
            case "classes":
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/classView.php';
                break;
            case "viewClass":
                $classId = (int)$_GET["id"];
                $oneClass = ClassLoader::getClass($this->db, $classId);
                require 'View/viewClassView.php';
                break;
            case "viewTeacher":
                $teacherId = (int)$_GET["id"];
                $teacherView = ClassLoader::getTeacherName($this->db, $teacherId);
                require 'View/viewTeachersView.php';
                break;
            case "addClass":
                $allTeachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/addClassView.php';
                break;
            case "classAdd":
                $className = $_POST["className"];
                $location = $_POST["loction"];
                $teacherName = (int)$_POST["teacherName"];
                $oneClass = ClassLoader::addClass($this->db, $className,  $location, $teacherName);
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/classView.php';
                break;
            case "editClass":
                $classId = (int)$_GET["id"];
                $oneClass = ClassLoader::getClass($this->db, $classId);
                $allTeachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/editClassView.php';
                break;
            case "classEdit":
                $classId = (int)$_GET["id"];
                $className = $_POST["className"];
                $location = $_POST["location"];
                $teacherName = (int)$_POST["teacherName"];
                $oneClass = ClassLoader::editClass($this->db, $classId, $className, $location, $teacherName);
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/classView.php';
                break;
            case "deleteClass":
                $classId = (int)$_GET["id"];
                $oneClass = ClassLoader::getClass($this->db, $classId);
                if(count($oneClass[0]["StudentName"]) === 0){
                ClassLoader::deleteClass($this->db, $classId);
               
                }else {
                    echo "<script type='text/javascript'>alert('Please Empty the class');</script>";
                }
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/classView.php';
                break;
        }
    }
}