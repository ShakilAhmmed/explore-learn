<?php

echo "Hello I am Running from Docker";

interface SummableOne
{
    public function sum($a, $b);
}

interface SummableTwo extends SummableOne
{
    public function sum($a, $b, $c);
}

class Sum implements SummableOne
{

    public function sum($a, $b, $c)
    {
        echo $a + b;
    }
}