<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//NEVER FORGET!!!! CANNOT HAVE SESSION VARIABLES WITHOUT SESSIONS TART!!
session_start();

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
//include all your model files here

require 'Model/connection.php';
require'.env';

require 'Model/student.php';
require 'Model/studentLoader.php';

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
}
if($_GET["page"] === "students" || $_GET["page"] === "addStudent" || $_GET["page"] === "studentAdd" || $_GET["page"] === "viewStudent" || $_GET["page"] === "editStudent" || $_GET["page"] === "studentEdit" || $_GET["page"] === "deleteStudent"){
    $studentController->render($_GET, $_POST);
}
if(empty($_GET) || $_GET["page"] === "teachers"){
    $teacherController->render($_GET, $_POST);
}
if(empty($_GET) || $_GET["page"] === "classes"){
    $classController->render($_GET, $_POST);
}

//whatIsHappening();