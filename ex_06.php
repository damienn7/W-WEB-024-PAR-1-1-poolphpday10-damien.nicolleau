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

        if(is_int(strpos($name, "__get"))||is_int(strpos($name,"__set")))
        {
            if(!method_exists("Pony",strval($name)))
            {
                if(!property_exists("Pony",str_replace("__get","",strtolower(strval($name)))))
                {
                    echo "Il n’y a pas d’attribut :".str_replace("__get","",strval($name)).".\n";
                }

                if(!property_exists("Pony",str_replace("__set","",strtolower(strval($name))))&&is_int(strpos($name,"__set")))
                {
                    echo "ici";
                    echo "Il n’y a pas d’attribut :".str_replace("__set","",strval($name)).".\n";
                }
            }
        }
        else
        {
            echo "Il n’y a pas d’attribut :".$name;
        }
    }

    public function __setName($name)
    {
        echo "Ce n’est pas bien de setter un attribut qui est privé !\n";
        $this->name=$name;
    }

    public function __setGender($gender)
    {
        echo "Ce n’est pas bien de setter un attribut qui est privé !\n";
        $this->gender=$gender;
    }

    public function __setColor($color)
    {
        echo "Ce n’est pas bien de setter un attribut qui est privé !\n";
        $this->color=$color;
    }

    public function __getName()
    {
        echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
        return $this->name=$name;
    }

    public function __getGender()
    {
        echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
        return $this->gender=$gender;
    }

    public function __getColor()
    {
        echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
        return $this->color=$color;
    }
    
}



$pony = new Pony("dado","homme","red");
echo $pony;
$pony->get();


$pony->__getPony();