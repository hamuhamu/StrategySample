<?php
class User
{
    private $grade;
    private $sex;

    public function __construct($grade, $sex)
    {
        $this->grade = $grade;
        $this->sex   = $sex;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getSex()
    {
        return $this->sex;
    }
}
