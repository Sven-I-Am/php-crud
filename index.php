<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here

require 'Model/connection.php';
require'.env';

require 'Model/student.php';
require 'Model/studentLoader.php';
require 'Model/class.php';
require 'Model/classLoader.php';
require 'Model/teacher.php';
require 'Model/teacherLoader.php';

//include all your controllers here
require 'Controller/studentController.php';
require 'Controller/teacherController.php';
require 'Controller/classController.php';
require 'Controller/homeController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$homeController = new homeController();
$studentController = new studentController();
$teacherController = new teacherController();
$classController = new classController();

if(empty($_GET) || $_GET["page"] === "home"){
    $homeController->render($_GET, $_POST);
}else if($_GET["page"] === "students" || $_GET["page"] === "addStudent" || $_GET["page"] === "studentAdd" || $_GET["page"] === "viewStudent" || $_GET["page"] === "editStudent" || $_GET["page"] === "studentEdit" || $_GET["page"] === "deleteStudent"){
    $studentController->render($_GET, $_POST);
}else if(empty($_GET) || $_GET["page"] === "teachers" || $_GET["page"] === "viewTeacher" || $_GET["page"] === "addTeacher" || $_GET["page"] === "teacherAdd" || $_GET["page"] === "editTeacher" || $_GET["page"] === "teacherEdit" || $_GET["page"] === "deleteTeacher") {
    $teacherController->render($_GET, $_POST);
} else if($_GET["page"] === "classes" || $_GET["page"] === "addClass" || $_GET["page"] === "classAdd" || $_GET["page"] === "viewClass" || $_GET["page"] === "editClass" || $_GET["page"] === "classEdit" || $_GET["page"] === "deleteClass"){
    $classController->render($_GET, $_POST);
}

//whatIsHappening();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}