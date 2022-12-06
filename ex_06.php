<?php


class Pony
{
    private $name;
    private $gender;
    private $color;
    private $data = array();

    public function __construct($name,$gender,$color)
    {
        $this->name=$name;
        $this->gender=$gender;
        $this->color=$color;
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
            if($name=="gender")
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                $this->gender=$value;
            }
            elseif($name=="name")
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                $this->name=$value;
            }
            else
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                $this->color = $color;
            }
        }
        else
        {
            echo "Il n’y a pas d’attribut : $name\n";
        }
    }

    public function __get($name="")
    {
        if(property_exists("Pony",$name))
        {   
            if($name=="gender")
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                return $this->gender;
            }
            elseif($name=="name")
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                return $this->name;
            }
            else
            {
                echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
                return $this->color;
            }

        }
        else
        {
            echo "Il n’y a pas d’attribut : $name\n";
            return;
        }
    }
}


/*
$pony = new Pony("dado","homme","red");
echo $pony;
$pony->__get("gender");

var_dump($pony);


$pony->__getPony("name");

*/