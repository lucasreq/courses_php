<?php

class Potion_2 extends Potion
{
    public function __construct($name,$level)
    {
        $this->name = "super potion";
        $this->level = 2;
        $this->stock = 3;
    }
}