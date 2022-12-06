<?php


class Pony
{
    private $name;
    private $gender;
    private $color;

    public function __construct($name,$gender,$color)
    {
        $this->__setName($name);
        $this->__setGender($gender);
        $this->__setColor($color);
    }

    public function __destruct()
    {
        echo "I’m a dead pony.\n";
    }

    public function __toString()
    {
        return "Don’t worry, I’m a pony !\n";
    }


    public function __call($name,$method)
    {
        if(!method_exists(strval($name),strval($method)))
        {
                echo "I don’t know what to do...";
        }
    }

    public function __set($name="",$value="")
    {
        if(property_exists("Pony",$name))
        {
            echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
            $this->$name=$value;
        }
        else
        {
            echo "Il n’y a pas d’attribut : $name\n";
            $this->$name=$value;
        }
    }

    public function __get($name="")
    {
        if(property_exists("Pony",$name))
        {
            echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
            return $this->$name;
        }
        else
        {
            echo "Il n’y a pas d’attribut : $name\n";
            return $this->$name;
        }
    }
}



$pony = new Pony("dado","homme","red");
echo $pony;
$pony->__get();


$pony->__getPony();