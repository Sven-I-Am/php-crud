<?php

declare(strict_types=1);

class studentController
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
            case "students":
                $classes = ClassLoader::getAllClasses($this->db);
                if(isset($_POST["filterClass"])){
                    $classId = $_POST["filterClass"];
                    $students = StudentLoader::filterStudents($this->db, $classId);
                } else {
                    $students = StudentLoader::getAllStudents($this->db);
                }
                require 'View/students/studentView.php';
                break;
            case "viewStudent":
                $studentId = (int)$_GET["id"];
                $student = StudentLoader::getStudent($this->db, $studentId);
                require 'View/students/viewStudentView.php';
                break;
            case "addStudent":
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/students/addStudentView.php';
                break;
            case "studentAdd":
                $studentName = $_POST["studentName"];
                $studentEmail = $_POST["studentEmail"];
                $studentClass = (int)$_POST["studentClass"];
                $student = StudentLoader::addStudent($this->db, $studentName, $studentEmail, $studentClass);
                $students = StudentLoader::getAllStudents($this->db);
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/students/studentView.php';
                break;
            case "editStudent":
                $classes = ClassLoader::getAllClasses($this->db);
                $studentId = (int)$_GET["id"];
                $student = StudentLoader::getStudent($this->db, $studentId);
                require 'View/students/editStudentView.php';
                break;
            case "studentEdit":
                $studentId = (int)$_GET["id"];
                $studentName = $_POST["studentName"];
                $studentEmail = $_POST["studentEmail"];
                $studentClass = (int)$_POST["studentClass"];
                $student = StudentLoader::editStudent($this->db, $studentId, $studentName, $studentEmail, $studentClass);
                $students = StudentLoader::getAllStudents($this->db);
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/students/studentView.php';
                break;
            case "deleteStudent":
                $studentId = (int)$_GET["id"];
                StudentLoader::deleteStudent($this->db, $studentId);
                $students = StudentLoader::getAllStudents($this->db);
                $classes = ClassLoader::getAllClasses($this->db);
                require 'View/students/studentView.php';
                break;
        }


    }
}