<?php

declare(strict_types=1);

class teacherController
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
            case "teachers":
                require 'View/teachersView.php';
                break;
        }
    }
}