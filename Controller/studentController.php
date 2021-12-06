<?php

declare(strict_types=1);

class StudentController
{

    public function render(array $GET, array $POST)
    {
        $connection = new Connection();
        $studentLoader = new StudentLoader($connection);

        $students = $studentLoader->getStudents();

        //load the view
        require 'View/student.php';
    }
}