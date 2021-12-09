<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here

require 'Model/connection.php';
require'.env';

require 'Model/studentLoader.php';
require 'Model/classLoader.php';
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
} else {
    switch($_GET["page"]){
        case "students":
        case "addStudent":
        case "studentAdd":
        case "viewStudent":
        case "editStudent":
        case "studentEdit":
        case "deleteStudent":
            $studentController->render($_GET, $_POST);
            break;
        case "teachers":
        case "viewTeacher":
        case "addTeacher":
        case "teacherAdd":
        case "editTeacher":
        case "teacherEdit":
        case "deleteTeacher":
            $teacherController->render($_GET, $_POST);
            break;
        case  "classes":
        case "addClass":
        case "classAdd":
        case "viewClass":
        case "editClass":
        case "classEdit":
        case "deleteClass":
            $classController->render($_GET, $_POST);
            break;
        default:
            break;
    }
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