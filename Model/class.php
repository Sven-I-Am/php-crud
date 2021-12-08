<?php

declare(strict_types=1);

class Classes
{
    private int $id;
    private string $name;
    private string $location;
    private string $teacher;

    public function __construct(int $id, string $name, string $location, string $teacher)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->teacher = $teacher;
    }

    public function getID()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }


}
