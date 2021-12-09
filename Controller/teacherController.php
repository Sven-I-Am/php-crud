<?php

declare(strict_types=1);

class TeacherController
{
    private Connection $db;

    //create a new connection based on the database value.
    public function __construct(){
        $this->db = new Connection();
    }

    public function render(array $GET, array $POST)
    {

        //load the view
        switch($_GET["page"]){
            case "teachers":
                $teachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/teachersView.php';
                break;
            case "viewTeacher":
                $teacherId = (int)$_GET["id"];
                $teacher = TeacherLoader::getTeacher($this->db, $teacherId);
                require 'View/viewTeacherView.php';
                break;
            case "addTeacher":
                require 'View/addTeacherView.php';
                break;
            case "teacherAdd":
                $teacherName = $_POST["teacherName"];
                $teacherEmail = $_POST["teacherEmail"];
                $teacher = TeacherLoader::addTeacher($this->db, $teacherName, $teacherEmail);
                $teachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/teachersView.php';
                break;
            case "editTeacher":
                $teacherId = (int)$_GET["id"];
                $teacher = TeacherLoader::getTeacher($this->db, $teacherId);
                require 'View/editTeacherView.php';
                break;
            case "teacherEdit":
                $teacherId = (int)$_GET["id"];
                $teacherName = $_POST["teacherName"];
                $teacherEmail = $_POST["teacherEmail"];
                $teacher = TeacherLoader::editTeacher($this->db, $teacherId, $teacherName, $teacherEmail);
                $teachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/teachersView.php';
                break;
            case "deleteTeacher":
                $teacherId = (int)$_GET["id"];
                TeacherLoader::deleteTeacher($this->db, $teacherId);
                $teachers = TeacherLoader::getAllTeachers($this->db);
                require 'View/teachersView.php';
                break;
        }
    }
}