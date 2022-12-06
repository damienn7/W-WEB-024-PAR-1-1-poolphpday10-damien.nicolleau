<?php


class Pony
{
    public $name;
    public $gender;
    public $color;

    public function __construct($name,$gender,$color)
    {
        $this->setName($name);
        $this->setGender($gender);
        $this->setColor($color);
    }

    public function __destruct()
    {
        echo "I’m a dead pony.\n";
    }

    public function __toString()
    {
        return "Don’t worry, I’m a pony !\n";
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setGender($gender)
    {
        $this->gender=$gender;
    }

    public function setColor($color)
    {
        $this->color=$color;
    }

    public function __call($name,$method)
    {
        if(!method_exists(strval($name),strval($method)))
        {
            echo "I don’t know what to do...";
        }
    }
}


/*
$pony = new Pony("dado","homme","red");
echo $pony;
$pony->get();
*/