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
        echo "Bah bien Morray !\n";
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
        echo "Je suis proprietaire !\n";
    }
}

/*
$booba= new Booba();
$booba->shout();
$booba->represent();
$booba->attack();
*/