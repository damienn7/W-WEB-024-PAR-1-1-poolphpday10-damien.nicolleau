<?php

class Body
{
    private $head = 1;
    protected $arm = 2;
    public $hand = 2;
    protected $leg = 2;
    public $foot = 2;

    public function print_inside_attributes($object)
    {
        $arr=get_object_vars($object);
        foreach($arr as $key => $value)
        {
            echo "$key : $value\n";
        }
    }
}

/*
$body = new Body();

$body->print_inside_attributes($body);

print_object_attributes($body);
*/

function print_object_attributes($object)
{
    $arr=get_object_vars($object);
    foreach($arr as $key => $value)
    {
        if($value!=NULL)
        {
        echo "$key => $value\n";
        }
    }
}