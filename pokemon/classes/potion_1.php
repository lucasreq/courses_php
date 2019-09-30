<?php

class Potion_1 extends Potion
{
    public function __construct($name,$level)
    {
        $this->name = "potion";
        $this->level = 1;
        $this->stock = 3;
    }
}