<?php

declare(strict_types=1);

class Classes
{
    private int $classID;
    private string $className;
    private string $location;
    private string $teacherName;

    public function __construct(int $classID, string $className, string $location, string $teacherName)
    {
        $this->classID = $classID;
        $this->className = $className;
        $this->location = $location;
        $this->teacherName = $teacherName;
    }

    public function getClassID()
    {
        return $this->classID;
    }
    
    public function getClassName()
    {
        return $this->className;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getTeacherName()
    {
        return $this->teacherName;
    }
}
