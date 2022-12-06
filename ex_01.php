<?php

abstract class Warrior
{
    abstract public function represent();

    abstract public function shout();

    public function attack()
    {
        echo "I'll kill you, poor noob !\n";
    }
}

class Booba extends Warrior
{
    public function represent()
    {
        echo "92\n";
    }

    public function shout()
    {
        echo "Bah bien Morray !";
    }
}

class Lafouine extends Warrior
{
    public function represent()
    {
        echo "78\n";
    }

    public function shout()
    {
        echo "Je suis proprietaire !";
    }
}

/*
$booba= new Booba();
$booba->shout();
$booba->represent();
$booba->attack();
*/