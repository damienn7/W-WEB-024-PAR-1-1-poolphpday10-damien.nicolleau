<?php

class Dolly
{
    static $instances;
    public $instance;
    public $animal;
    public $age;
    public $doctor;

    public function __construc($animal,$age,$doctor)
    {
        $this->animal=$animal;
        $this->age=$age;
        $this->doctor=$doctor;
        $this->instance = ++self::$instances;
    }

    public function setAnimal($animal)
    {
        $this->animal=$animal;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function setDoctor($doctor)
    {
        $this->doctor=$doctor;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function getDoctor()
    {
        return $this->doctor;
    }

    public function __clone() 
    {
        $this->instance = ++self::$instances;
    }

}

/*
$dolly = new Dolly("chat","10 ans","Docteur Maboule");
$dolly->setAge("10");
$dolly->setDoctor("dr");
$dolly->setAnimal("chat");
var_dump(clone_object($dolly));

var_dump($dolly);
*/

function clone_object($object)
{
    $object_cloned = clone $object;
    return $object_cloned;
}